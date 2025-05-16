<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Category;

class FormAtkBarang extends Component
{
    public $nusp, $nama_barang, $jumlah, $satuan, $stok, $category_id;
    public $showForm = false;
        protected $rules = [
            'nusp' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'satuan' => 'required|string|max:50',
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:category,id',
    ];
    public function render()
    {
        if(Auth::user() && Auth::user()->role !== 'admin'){abort(404);};
        $category = Category::all();
        return view("livewire.form-atkbarang", compact('category'));
    }
        public function toggleForm()
{
    $this->showForm = !$this->showForm;
}
public function simpan()
    {
        $this->validate();

        Barang::create([
            'nusp' => $this->nusp,
            'nama_barang' => $this->nama_barang,
            'jumlah' => $this->jumlah,
            'satuan' => $this->satuan,
            'stok' => $this->stok,
            'category_id' => $this->category_id,
        ]);


        session()->flash('message', 'Barang berhasil ditambahkan!');

        $this->reset(['nusp', 'nama_barang', 'jumlah', 'satuan', 'stok', 'category_id']);

        $this->dispatch('barangUpdated'); // trigger event ke Livewire table jika ada
    }
}
