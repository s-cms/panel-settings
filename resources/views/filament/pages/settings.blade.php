<x-filament::page>
    <form wire:submit="save">
        {{ $this->form }}

        <div>
            <x-filament::button type="submit">
                Save
            </x-filament::button>
        </div>
    </form>
</x-filament::page>
