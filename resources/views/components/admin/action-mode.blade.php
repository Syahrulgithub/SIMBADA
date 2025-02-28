
    <div class="flex space-x-1">
        <span>
            <x-small-button href="{{ route('barang.edit', ['id' => $id]) }}" variant="default"
                @click="$dispatch('show-modal',{ id: '{{ $id }}' })"
                disabled                                                                                                                                                                                                            >
                <i class="fa-solid fa-plus"></i>
                Edit
        </x-small-button>
        </span>
        <span>
           <x-small-button variant="danger"
                onclick="openDeleteModal({{ $id }})">
                    <i class="fa-solid fa-trash"></i>
                        Hapus
           </x-small-button>


        </span>
    </div>

       
    