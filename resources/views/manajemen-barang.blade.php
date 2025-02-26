<x-app-layout>
    <div class="mt-20 max-w-7xl mx-auto mt-4 p-4 relative overflow-hidden">
        <!-- Header + Dropdown + Tombol Aksi -->
        <div class="flex justify-between items-center">
            <div class="flex flex-col">
                <h2 class="text-lg font-semibold">Manajemen Barang</h2>
                
            </div>
            <div class="flex space-x-2">
                <x-button variant="danger">Tambah</x-button>
            </div>
        </div>

        <livewire:AtkBarangTabel/>
    </div>
</x-app-layout>
