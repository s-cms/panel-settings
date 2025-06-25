<?php

namespace SmartCms\PanelSettings\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeSettingsPageCommand extends GeneratorCommand
{
    protected $name = 'make:settings-page';

    protected $description = 'Create a new settings page.';

    protected $type = 'SettingsPage';

    protected function getStub()
    {
        return __DIR__ . '/../../stubs/settings-page.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Filament\Pages\Settings';
    }
}
