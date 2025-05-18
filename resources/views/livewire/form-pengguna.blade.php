<div class="mb-4">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold">User</h2>
        <x-button wire:click="toggleForm" variant="success">
            {{ $showForm ? 'Tutup' : 'Tambah' }}
        </x-button>
    </div>

    @if ($showForm)
        <div class="mt-4">
            <!-- 📦 Container Form Utama -->
            <div class="bg-white p-6 rounded shadow space-y-4">
                
                @if (session()->has('message'))
                    <div class="text-green-600">{{ session('message') }}</div>
                @endif

                <form wire:submit.prevent="simpan" class="space-y-4">
                    <div>
                        <x-label value="Nama" />
                        <x-input wire:model="name" class="w-full" />
                        @error('name') <div class="text-gray-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <x-label value="Email" />
                        <x-input wire:model="email" type="email" class="w-full" />
                        @error('email') <div class="text-gray-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <!-- ✅ Password dengan Toggle Eye -->
                    <div x-data="{ show: false }" class="relative">
                        <x-label value="Password" />

                        <input
                            :type="show ? 'text' : 'password'"
                            wire:model="password"
                            class="w-full pr-12 rounded border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        />

                        <div
                            class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer"
                            @click="show = !show"
                        >
                            <div class="relative w-5 h-0">
                                <!-- Ikon Mata -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-5 h-5 text-gray-500"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5
                                             c4.477 0 8.268 2.943 9.542 7
                                             -1.274 4.057-5.065 7-9.542 7
                                             -4.477 0-8.268-2.943-9.542-7z" />
                                </svg>

                                <!-- Garis Miring (jika disembunyikan) -->
                                <svg x-show="!show"
                                     xmlns="http://www.w3.org/2000/svg"
                                     class="absolute top-0 left-0 w-5 h-5 text-gray-500"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <line x1="4" y1="4" x2="20" y2="20"
                                          stroke="currentColor" stroke-width="2" />
                                </svg>
                            </div>
                        </div>

                        @error('password')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
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

                @if (session()->has('message'))
                    <div class="text-green-600">{{ session('message') }}</div>
                @endif
            </div>
        </div>
    @endif
</div>
