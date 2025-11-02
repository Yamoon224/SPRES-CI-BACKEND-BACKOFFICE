<?php

namespace App\Http\Controllers;

use App\Http\Requests\Services\StoreRequest As StoreServiceRequest;
use App\Http\Requests\Services\UpdateRequest As UpdateServiceRequest;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    protected ServiceRepositoryInterface $repository;

    public function __construct(ServiceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $services = $this->repository->paginate();
        return view('services.index', compact('services'));
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time().'_'.$file->getClientOriginalName();
        
            // Dossier cible : public/services
            $destinationPath = public_path('images/services');
        
            // Crée le dossier s’il n’existe pas
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
        
            // Déplace le fichier
            $file->move($destinationPath, $filename);
        
            // Chemin relatif à sauvegarder dans la BDD
            $data['icon'] = 'images/services/'.$filename;
        }

        $this->repository->create($data);
        return redirect()->route('services.index');
    }

    public function show($id)
    {
        $service = $this->repository->find($id);
        return view('services.show', compact('service'));
    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $data = $request->validated();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
        
            // 🟢 Chemin physique dans le dossier public
            $destinationPath = public_path('images/services');
        
            // Crée le dossier s’il n’existe pas
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
        
            // Déplace le fichier dans public/services
            $file->move($destinationPath, $filename);
        
            // 🟢 Stocke le chemin relatif (pour affichage)
            $data['icon'] = 'images/services/' . $filename;
        
            // Supprimer l’ancien fichier s’il existe
            $service = $this->repository->find($id);
            if ($service && $service->icon) {
                $oldPath = public_path($service->icon);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
        }

        $this->repository->update($id, $data);
        return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $service = $this->repository->find($id);
        if ($service && $service->icon) {
            $oldPath = public_path($service->icon);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }
        $this->repository->delete($id);
        return redirect()->route('services.index');
    }
}
