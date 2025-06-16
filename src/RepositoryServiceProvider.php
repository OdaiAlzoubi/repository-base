<?php

namespace Soft\RepositoryBase;

use Illuminate\Support\ServiceProvider;
use Soft\RepositoryBase\Interface\BaseRepositoryInterface;
use Soft\RepositoryBase\RepositoryBase;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, RepositoryBase::class);
    }

    public function boot()
    {
        //
    }
}
