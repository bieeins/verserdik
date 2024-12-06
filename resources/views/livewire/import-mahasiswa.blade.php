<div>
    <x-filament::form wire:submit.prevent="importData">
        <div class="space-y-4">
            <x-filament::file-upload
                wire:model="import_file"
                label="Pilih File Excel"
                accepted-file-types="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                max-file-size="10240"
            />

            <x-filament::button type="submit" color="primary">Import</x-filament::button>
        </div>
    </x-filament::form>
</div>
