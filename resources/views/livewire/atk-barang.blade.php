<div class="mb-4">
    <div class="flex justify-between items-center">
        <div class="flex flex-col">
            <h2 class="text-lg font-semibold">Manajemen Barang</h2>
            @if (session()->has('message'))
                <div class="bg-green-500 text-white p-2 rounded">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <x-button wire:click="toggleForm" variant="success">
            {{ $showForm ? 'Tutup' : 'Tambah' }}
        </x-button>
    </div> 

    @if ($showForm)
        <div class="mt-4 space-y-4">
            <div class="bg-white p-4 rounded shadow">

                <form wire:submit.prevent="simpan" class="space-y-3">
                    <div>
                        <x-label value="NUSP" />
                        <x-input wire:model="nusp" class="w-full" />
                        @error('nusp') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label value="Nama Barang" />
                        <x-input wire:model="nama_barang" class="w-full" />
                        @error('nama_barang') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label value="Jumlah" />
                        <x-input wire:model="jumlah" type="number" class="w-full" />
                        @error('jumlah') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label value="Satuan" />
                        <x-input wire:model="satuan" class="w-full" />
                        @error('satuan') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label value="Stok" />
                        <x-input wire:model="stok" type="number" class="w-full" />
                        @error('stok') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label for="category_id" value="Kategori" />
                        <x-select
                            wire:model="category_id"
                            id="category_id"
                            name="category_id"
                            :options="$category->pluck('nama', 'id')->toArray()"
                        />
                        @error('category_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="text-right">
                        <x-button type="submit" variant="primary">Simpan</x-button>
                    </div>
                </form>
            </div>

            @if (session()->has('message'))
                <div class="text-green-600 mt-3">{{ session('message') }}</div>
            @endif
        </div>
    @endif
</div>
