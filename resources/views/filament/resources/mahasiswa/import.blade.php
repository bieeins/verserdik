<x-filament::page>
    <h2 class="mb-4 text-xl">Import Data Mahasiswa</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('mahasiswa.import') }}">
        @csrf
        <div class="space-y-4">
            <x-filament::form-section>
                <x-filament::file-upload
                    name="file"
                    label="Upload Excel / CSV"
                    required
                />
            </x-filament::form-section>
            <x-filament::button type="submit" color="primary">Import Data</x-filament::button>
        </div>
    </form>
</x-filament::page>
