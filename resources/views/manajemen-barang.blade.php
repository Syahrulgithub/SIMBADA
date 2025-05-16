<x-app-layout>
    <div class="max-w-7xl mx-auto mt-4 p-4 relative overflow-hidden">
        <!-- Header + Dropdown + Tombol Aksi -->
            <livewire:formatkbarang />
            
            <livewire:AtkBarangTabel/>
        </div>
    </div>
    <!-- Modal Konfirmasi -->
<div id="deleteModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-bold mb-4">Konfirmasi Hapus</h2>
        <p>Apakah Anda yakin ingin menghapus barang ini?</p>

        <div class="mt-4 flex justify-end space-x-2">
            <button onclick="closeDeleteModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
            
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
            </form>
        </div>
    </div>
</div>
<script>
    function openDeleteModal(id) {
        const modal = document.getElementById("deleteModal");
        const form = document.getElementById("deleteForm");

        form.action = "{{ route('barang.destroy', '') }}/" + id; // Set form action
        modal.classList.remove("hidden"); // Tampilkan modal
    }

    function closeDeleteModal() {
        document.getElementById("deleteModal").classList.add("hidden"); // Sembunyikan modal
    }
</script>

</x-app-layout>
