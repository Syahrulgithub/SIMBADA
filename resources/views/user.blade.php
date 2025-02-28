<x-app-layout>
    <div class="max-w-7xl mx-auto mt-4 p-4 relative overflow-hidden">
        <!-- Header + Tombol Aksi -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">User</h2>
        </select>
            <div class="flex space-x-2">
                <x-button variant="success">Tambah</x-button>
                <x-button variant="danger">Hapus Semua</x-button>
            </div>
        </div>

        <livewire:Pengguna/>
    </div>
</x-app-layout>