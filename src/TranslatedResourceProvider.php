<?php

namespace MohammedHamad\TranslatedResource;

use Illuminate\Support\Facades\Artisan;
use MohammedHamad\TranslatedResource\commands\InstallCommand;
use MohammedHamad\TranslatedResource\commands\MakeTranslatedResourceCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TranslatedResourceProvider extends PackageServiceProvider
{


    public function configurePackage(Package $package): void
    {
        $package->name('translated-resource')
            ->hasInstallCommand(function(\Spatie\LaravelPackageTools\Commands\InstallCommand  $command){
                $command->copyAndRegisterServiceProviderInApp();
              })
        ->hasCommands([
            MakeTranslatedResourceCommand::class
        ]);
    }
}
