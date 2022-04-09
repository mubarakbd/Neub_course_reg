<?php

namespace App\Providers;

use App\Interfaces\IClassRetourinRepository;
use App\Interfaces\ICourselistRepository;
use App\Interfaces\ICourseOfferRepository;
use App\Interfaces\ICourseRepository;
use App\Interfaces\IExamRepository;
use App\Interfaces\IFacilitesRepository;
use App\Interfaces\IGroupBaseRepository;
use App\Interfaces\IResultBaseRepository;
use App\Interfaces\IsemesterRepositroy;
use App\Repositories\ClassRetourinBaseRepsotiry;
use App\Repositories\CourselistRepository;
use App\Repositories\CourseOfferRepository;
use App\Repositories\CourseRepository;
use App\Repositories\ExamRepostiory;
use App\Repositories\FacilitesRepository;
use App\Repositories\GropuRepository;
use App\Repositories\ResultBaseRepository;
use App\Repositories\SemesterRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IGroupBaseRepository::class, GropuRepository::class);
        $this->app->bind(IsemesterRepositroy::class,  SemesterRepository::class);
  
        $this->app->bind(ICourselistRepository::class,CourselistRepository::class);
        $this->app->bind(ICourseOfferRepository::class,CourseOfferRepository::class);
        $this->app->bind(IExamRepository::class,ExamRepostiory::class);
        $this->app->bind(IFacilitesRepository::class,FacilitesRepository::class);
        $this->app->bind(IClassRetourinRepository::class,ClassRetourinBaseRepsotiry::class);
        $this->app->bind(IResultBaseRepository::class,ResultBaseRepository::class);
      

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
