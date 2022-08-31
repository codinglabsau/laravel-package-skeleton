<?php

namespace Codinglabs\FeatureFlags;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasMigration('create_skeleton_table');
    }
}
