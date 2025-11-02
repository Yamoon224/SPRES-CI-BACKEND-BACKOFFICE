<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobOffers\StoreRequest As StoreJobOfferRequest;
use App\Http\Requests\JobOffers\UpdateRequest As UpdateJobOfferRequest;
use App\Repositories\Contracts\CompanyRepositoryInterface;
use App\Repositories\Contracts\JobOfferRepositoryInterface;

class JobOfferController extends Controller
{
    protected JobOfferRepositoryInterface $repository;
    protected CompanyRepositoryInterface $companyRepository;

    public function __construct(JobOfferRepositoryInterface $repository, CompanyRepositoryInterface $companyRepository)
    {
        $this->repository = $repository;
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        $jobOffers = $this->repository->all();
        $stats = $this->repository->statsByContractType();

        return view('joboffers.index', compact('jobOffers', 'stats'));
    }

    public function store(StoreJobOfferRequest $request)
    {
        $this->repository->create($request->validated());
        return redirect()->route('joboffers.index');
    }

    public function show($id)
    {
        $jobOffer = $this->repository->find($id);
        return view('joboffers.show', compact('jobOffer'));
    }

    public function create()
    {
        $companies = $this->companyRepository->all();
        return view('joboffers.create', compact('companies'));
    }

    public function edit($id)
    {
        $jobOffer = $this->repository->find($id);
        $companies = $this->companyRepository->all();
        return view('joboffers.edit', compact('jobOffer', 'companies'));
    }

    public function update(UpdateJobOfferRequest $request, $id)
    {
        $this->repository->update($id, $request->validated());
        return redirect()->route('joboffers.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('joboffers.index');
    }
}
