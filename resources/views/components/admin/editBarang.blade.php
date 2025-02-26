<x-app-layout>
    <div class="">

    </div>
    <div>
    <h2 class="text-lg font-semibold">Edit Barang</h2>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update">
        <div class="mb-4">
            <label for="nusp" class="block">NUSP</label>
            <input type="text" id="nusp" wire:model="nusp" class="border rounded w-full" required>
            @error('nusp') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="nama_barang" class="block">Nama Barang</label>
            <input type="text" id="nama_barang" wire:model="nama_barang" class="border rounded w-full" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="jumlah" class="block">Jumlah</label>
            <input type="number" id="jumlah" wire:model="jumlah" class="border rounded w-full" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="satuan" class="block">Satuan</label>
            <input type="text" id="satuan" wire:model="satuan" class="border rounded w-full" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="stok" class="block">Stok</label>
            <input type="number" id="stok" wire:model="stok" class="border rounded w-full" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>
    </form>
   <x-button variant="success">update</x-button>
</div>
</x-app-layout>