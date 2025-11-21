<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cvs\StoreRequest As StoreCvRequest;
use App\Http\Requests\Cvs\UpdateRequest As UpdateCvRequest;
use App\Http\Resources\CvResource;
use App\Repositories\CVRepository;
use Illuminate\Support\Facades\File;

class CvController extends Controller  
{
    public function __construct(private CVRepository $repository) {}

    public function index()
    {
        return CvResource::collection($this->repository->paginate(with: ['user']));
    }

    public function store(StoreCvRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
        
            // Génération d'un nom unique : timestamp + random string + extension
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
        
            // Dossier cible : public/images/cvs
            $destinationPath = public_path('images/cvs');
        
            // Crée le dossier s’il n’existe pas
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
        
            // Déplace le fichier dans le dossier
            $file->move($destinationPath, $filename);
        
            // Chemin relatif à sauvegarder dans la BDD
            $data['file_path'] = 'images/cvs/' . $filename;
        }

        $cv = $this->repository->create($data);
        return new CvResource($cv);
    }

    public function show($id)
    {
        return new CvResource($this->repository->find($id, ['user']));
    }

    public function update(UpdateCvRequest $request, $id)
    {
        $cv = $this->repository->update($id, $request->validated());
        return new CvResource($cv);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(['message' => 'CV deleted successfully']);
    }
}
