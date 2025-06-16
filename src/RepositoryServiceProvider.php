<?php

namespace Soft\RepositoryBase;

use Illuminate\Support\ServiceProvider;
use Soft\RepositoryBase\Interface\RepositoryBaseInterface;
use Soft\RepositoryBase\RepositoryBase;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(RepositoryBaseInterface::class, RepositoryBase::class);
    }

    public function boot()
    {
        //
    }
}
