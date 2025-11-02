<?php

namespace App\Http\Controllers;

use App\Http\Requests\Companies\StoreRequest As StoreCompanyRequest;
use App\Http\Requests\Companies\UpdateRequest As UpdateCompanyRequest;
use App\Repositories\Contracts\CompanyRepositoryInterface;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    protected CompanyRepositoryInterface $repository;

    public function __construct(CompanyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $companies = $this->repository->all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time().'_'.$file->getClientOriginalName();
        
            // Dossier cible : public/companys
            $destinationPath = public_path('images/companies');
        
            // Crée le dossier s’il n’existe pas
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
        
            // Déplace le fichier
            $file->move($destinationPath, $filename);
        
            // Chemin relatif à sauvegarder dans la BDD
            $data['logo'] = 'images/companies/'.$filename;
        }

        $this->repository->create($data);
        return redirect()->route('companies.index');
    }

    public function show($id)
    {
        $company = $this->repository->find($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = $this->repository->find($id);
        return view('companies.edit', compact('company'));
    }

    public function update(UpdateCompanyRequest $request, $id)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
        
            // 🟢 Chemin physique dans le dossier public
            $destinationPath = public_path('images/companies');
        
            // Crée le dossier s’il n’existe pas
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
        
            // Déplace le fichier dans public/companies
            $file->move($destinationPath, $filename);
        
            // 🟢 Stocke le chemin relatif (pour affichage)
            $data['logo'] = 'images/companies/' . $filename;
        
            // Supprimer l’ancien fichier s’il existe
            $company = $this->repository->find($id);
            if ($company && $company->logo) {
                $oldPath = public_path($company->logo);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }
        }

        $this->repository->update($id, $data);
        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        $company = $this->repository->find($id);
        if ($company && $company->icon) {
            $oldPath = public_path($company->icon);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }
        }
        $this->repository->delete($id);
        return redirect()->route('companies.index');
    }
}
