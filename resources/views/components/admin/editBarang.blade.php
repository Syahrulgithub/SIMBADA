<x-app-layout>
    <div class="bg-gray-100 justify min-h-screen ">
    <div>
    <h2 class="text-lg font-semibold">Edit Barang</h2>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('barang.update', ['id'=>$barang->id]) }}" method="post">
        @csrf 
        <div class="mb-4">
            <label for="nusp" class="block">NUSP</label>
            <input type="text" id="nusp" value="{{ $barang->nusp }}" class="border rounded w-full" name="nusp" required>
            @error('nusp') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="nama_barang" class="block">Nama Barang</label>
            <input type="text" id="nama_barang" value="{{ $barang->nama_barang }}" class="border rounded w-full" name="nama_barang" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="jumlah" class="block">Jumlah</label>
            <input type="number" id="jumlah" value="{{ $barang->jumlah }}" class="border rounded w-full" name="jumlah" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="satuan" class="block">Satuan</label>
            <input type="text" id="satuan" value="{{ $barang->satuan }}" class="border rounded w-full" name="satuan" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="stok" class="block">Stok</label>
            <input type="number" id="stok" value="{{ $barang->stok }}" class="border rounded w-full" name="stok" required>
            @error('nama_barang') <span class="text-customRed">{{ $message }}</span> @enderror
        </div>
        <x-button variant="green">update</x-button>
    </form>
   
</div>
    </div>
</x-app-layout>