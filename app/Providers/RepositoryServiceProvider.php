<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Contracts
use App\Repositories\Contracts\{
    UserRepositoryInterface,
    CompanyRepositoryInterface,
    JobOfferRepositoryInterface,
    ApplicationRepositoryInterface,
    CVRepositoryInterface,
    ServiceRepositoryInterface,
    TestimonialRepositoryInterface
};

// Implementations
use App\Repositories\{
    UserRepository,
    CompanyRepository,
    JobOfferRepository,
    ApplicationRepository,
    CVRepository,
    ServiceRepository,
    TestimonialRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
        $this->app->bind(JobOfferRepositoryInterface::class, JobOfferRepository::class);
        $this->app->bind(ApplicationRepositoryInterface::class, ApplicationRepository::class);
        $this->app->bind(CVRepositoryInterface::class, CVRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
    }
}
