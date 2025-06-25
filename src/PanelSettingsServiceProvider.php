<?php

namespace SmartCms\PanelSettings;

use SmartCms\PanelSettings\Commands\MakeSettingsPageCommand;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PanelSettingsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'panel-settings';

    public static string $viewNamespace = 'panel-settings';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasCommands([
                MakeSettingsPageCommand::class,
            ])
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToStarRepoOnGitHub('smart-cms/panel-settings');
            });
    }
}
