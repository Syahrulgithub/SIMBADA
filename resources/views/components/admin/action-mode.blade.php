
    <div class="flex space-x-1">
        <span>
            <x-small-href href="{{ route('barang.edit', ['id' => $id]) }}" variant="green"
                @click="$dispatch('show-modal',{ id: '{{ $id }}' })"
                disabled                                                                                                                                                                                                            >
                <i class="fa-solid fa-plus"></i>
                Edit
        </x-small-href>
        </span>
        <span>
           <x-Button-kecil variant="danger"
                onclick="openDeleteModal({{ $id }})">
                    <i class="fa-solid fa-trash"></i>
                        Hapus
           </x-Button-kecil>


        </span>
    </div>

       
    