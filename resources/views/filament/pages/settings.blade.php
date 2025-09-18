<x-filament::page>
    <form wire:submit="save" class="fi-sc-form">
        {{ $this->form }}
        <div class="fi-sc-component">
            <div class="fi-sc-actions">
                <div class="fi-ac fi-align-start">
                    <x-filament::button type="submit" size="sm">
                        {{__('filament-panels::resources/pages/edit-record.form.actions.save.label')}}
                    </x-filament::button>
                    <x-filament::button type="button" wire:loading.attr="disabled" color="gray" size="sm"
                        x-on:click="document.referrer ? window.history.back() : Livewire.navigate('{{url()->previous()}}')">
                       {{ __('filament-panels::resources/pages/edit-record.form.actions.cancel.label')}}
                    </x-filament::button>
                </div>
            </div>
        </div>
    </form>
</x-filament::page>
