

<div class="mb-4">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold">User</h2>
        <x-button wire:click="toggleForm" variant="success">
            {{ $showForm ? 'Tutup' : 'Tambah' }}
        </x-button>
    </div>

    @if ($showForm)
        <div class="mt-4 space-y-4">
            <div class="bg-white p-4 rounded shadow mb-4">

            @if (session()->has('message'))
                <div class="text-green-600">{{ session('message') }}</div>
            @endif

            <form wire:submit.prevent="simpan" class="space-y-3">
                <div>
                    <x-label value="Nama" />
                    <x-input wire:model="name" class="w-full" />
                    @error('name') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div>
                    <x-label value="Email" />
                    <x-input wire:model="email" type="email" class="w-full" />
                    @error('email') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div>
                    <x-label value="Password" />
                    <x-input wire:model="password" type="password" class="w-full" />
                    @error('password') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div>
                    <x-label value="Role" />
                    <select wire:model="role" class="w-full rounded border-gray-300">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('role') <div class="text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div class="text-right">
                    <x-button type="submit" variant="primary">Simpan</x-button>
                </div>
            </form>
        </div>    @if (session()->has('message'))
        <div class="text-green-600 mt-3">{{ session('message') }}</div>
    @endif
</div>

    @endif
</div>



