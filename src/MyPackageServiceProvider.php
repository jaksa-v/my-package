<?php

namespace JaksaVlahovic\MyPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JaksaVlahovic\MyPackage\Commands\MyPackageCommand;

class MyPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('my-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_package_table')
            ->hasCommand(MyPackageCommand::class);
    }
}
