
    <div class="">
        <span>
            <x-small-button href="{{ route('barang.edit', ['id' => $id]) }}" variant="default"
                @click="$dispatch('show-modal',{ id: '{{ $id }}' })"
                disabled                                                                                                                                                                                                            >
                <i class="fa-solid fa-plus"></i>
                Edit
        </x-small-button>
        </span>
    </div>

        <div class="">
        <span>
            <x-small-button variant="danger"
                @click="$dispatch('show-modal',{ id: '{{ $id }}' })"
                disabled                                                                                                                                                                                                            >
                <i class="fa-solid fa-plus"></i>
                Hapus
            </x-small-button>
        </span>
    </div>
    