<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class AtkBarangTabel extends DataTableComponent
{
    protected $model = Barang::class;

    protected $listeners = ['barangUpdated' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPaginationEnabled(); // Aktifkan pagination
        $this->setPerPage(10); // Jumlah baris per halaman, bisa disesuaikan
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('category')
                ->options([
                    '' => 'Semua',
                    '1' => 'Alat Tulis Kantor',
                    '2' => 'Kertas dan Cover',
                    '3' => 'Bahan Cetak',
                    '4' => 'Benda Pos',
                    '5' => 'Persediaan Dokumen',
                    '6' => 'Alat Listrik',
                ])
                ->filter(function (Builder $query, string $value) {
                    if ($value) {
                        $query->where('category_id', $value);
                    }
                }),
        ];
    }

    public function columns(): array
    {
        $columns = [
        // Kolom ID tetap ada
        Column::make('ID', 'id')->sortable(),

        Column::make('NUSP', 'nusp')->searchable()->sortable(),
        Column::make('Nama Barang', 'nama_barang')->searchable()->sortable(),
        Column::make('Jumlah', 'jumlah')->sortable(),
        Column::make('Satuan', 'satuan')->sortable(),
        Column::make('Stok', 'stok')->sortable(),
    ];

    if (Auth::user() && Auth::user()->role === 'admin') {
        $columns[] = Column::make('Aksi')
            ->label(function ($row, Column $column) {
                return view('components.admin.action-mode', [
                    'id' => $row->id,
                ]);
            });
    }

    return $columns;
    }
}