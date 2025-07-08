<?php

namespace SmartCms\PanelSettings;

use Filament\Notifications\Notification;
use Filament\Pages\Page;
use SmartCms\Settings\Models\Setting;

/**
 * @property mixed $form
 */
class SettingsPage extends Page
{
    protected string $view = 'panel-settings::filament.pages.settings';

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->fillForm();
    }

    public function save(): void
    {
        $data = $this->form->getState();
        foreach ($data as $key => $value) {
            Setting::set($key, $value);
        }

        $this->getSavedNotification()?->send();
    }

    protected function getSavedNotification(): ?Notification
    {
        $title = $this->getSavedNotificationTitle();

        if (blank($title)) {
            return null;
        }

        return Notification::make()
            ->success()
            ->title($this->getSavedNotificationTitle());
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return __('filament-settings::translations.notifications.saved');
    }

    protected function fillForm(): void
    {
        $this->form->fill(Setting::query()->pluck('value', 'key')->toArray());
    }
}
