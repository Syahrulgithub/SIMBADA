<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class Pengguna extends DataTableComponent
{
    public function mount()
{
    if (!Auth::user() || Auth::user()->role !== 'admin') {
        abort(403, 'Akses ditolak'); // Tampilkan halaman 403
    }
}
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
                Column::make("Role", "role")
    ->sortable(),

            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make("Aksi")
            ->label(function (Model $row) {
                return view('components.admin.action-akun', [
                    'id' => $row->id,
                ]);
            }),
        ];
    }
}
