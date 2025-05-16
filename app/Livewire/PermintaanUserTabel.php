<?php

namespace App\Livewire;

use App\Models\Permintaan;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PermintaanUserTabel extends DataTableComponent
{
    protected $model = Permintaan::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPaginationEnabled(); // Aktifkan pagination
        $this->setPerPage(10); // Jumlah baris per halaman, bisa disesuaikan
    }


    public function builder(): Builder
    {
        return Permintaan::with('user', 'barang')->latest();
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),

Column::make('User', 'user.name')
    ->sortable(function (Builder $query, $direction) {
        return $query->join('users', 'permintaans.user_id', '=', 'users.id')
                     ->orderBy('users.name', $direction);
    })
    ->format(fn($value, $row, Column $column) => $value) // karena $value = users.name dari join
    ->searchable(),

            Column::make('Barang', 'barang.nama_barang')
    ->sortable(function (Builder $query, $direction) {
        return $query->join('barang', 'permintaans.barang_id', '=', 'barang.id')
                     ->orderBy('barang.nama_barang', $direction);
    })
    ->format(fn($value, $row, Column $column) => $value) // karena $value = users.name dari join
    ->searchable(),

    Column::make('Status', 'status')
                ->sortable(),

                Column::make('Keterangan', 'keterangan')
                ->sortable(),

                Column::make('Tanggal Diambil', 'tanggal_diambil')
                ->sortable()
                ->format(function ($value) {
        return $value ? $value->format('d-m-Y H:i') : 'Belum diambil';
    }),

            Column::make('Tanggal Dibuat', 'created_at')
                ->sortable()
                ->format(fn($value) => $value->format('d-m-Y H:i')),
        ];
    }
}
