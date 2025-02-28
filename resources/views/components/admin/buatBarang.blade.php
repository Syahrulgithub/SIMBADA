<x-app-layout>
    <div>
        <h2 class="text-lg font-semibold">Tambah Barang</h2>

        

        <form action="{{ route('barang.store') }}" method="POST">
    @csrf
            <div class="mb-4">
                <label for="nusp" class="block">NUSP</label>
                <input type="text" name="nusp" id="nusp" value="" class="border rounded w-full" required>
                @error('nusp') <span class="text-customRed">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="nama_barang" class="block">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="" class="border rounded w-full" required>
                @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="jumlah" class="block">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" value="" class="border rounded w-full" required>
                @error('jumlah') <span class="text-customRed">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="satuan" class="block">Satuan</label>
                <input type="text" name="satuan" id="satuan" value="" class="border rounded w-full" required>
                @error('satuan') <span class="text-customRed">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="stok" class="block">Stok</label>
                <input type="number" name="stok" id="stok" value="" class="border rounded w-full" required>
                @error('stok') <span class="text-customRed">{{ $message }}</span> @enderror
            </div>

            <!-- Dropdown Pilihan Kategori -->
            <div class="mb-4">
                <label for="category_id" class="block">Kategori</label>
                <select id="category_id" wire:model="category_id" name="category_id" class="border rounded w-full" required>
                    <option value="">Pilih Kategori</option>
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nama }}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="text-gray-800">{{ $message }}</span> @enderror
            </div>

            <x-button variant="success">Submit</x-button>
        </form>
    </div>
</x-app-layout>
