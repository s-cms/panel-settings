<x-filament::page>
    <form wire:submit="save" class="fi-sc-form">
        {{ $this->form }}
        <div class="fi-sc-component">
            <div class="fi-sc-actions">
                <div class="fi-ac fi-align-start">
                    <x-filament::button type="submit">
                        Save
                    </x-filament::button>
                    <button class="fi-btn fi-size-sm  fi-ac-btn-action" type="button" wire:loading.attr="disabled"
                        x-on:click="document.referrer ? window.history.back() : Livewire.navigate('{{url()->previous()}}')">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-filament::page>
