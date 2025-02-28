<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;

class BarangController extends Controller{
    // menampilkan halaman tambah barang
    public function create (){
        $category = Category::all();
        return view("components.admin.buatBarang", compact('category'));
    }
    // menginput data barang
   public function store(Request $request)
    {
        $request->validate([
            'nusp' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'satuan' => 'required|string|max:50',
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:category,id',
        ]);

        Barang::create([
            'nusp' => $request->nusp,
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'category_id' => $request->category_id,
        ]);

        return redirect()->to('manajemen')->with('message', 'Barang berhasil ditambahkan!');
    }

    //menambahkan barang
    public function insert() {
        return redirect()->to(route('manajemen'));
    }
    //edit barang
     public function edit(Request $request, $id) {
        $barang = Barang::find($id);
        return view("components.admin.editBarang", compact('barang'));
    }
    //update barang
    public function update(Request $request, $id) {
        $body = $request->all();
        $barang = Barang::find($id);
        // dd($body);
        $barang->update([
            'nusp' => $body['nusp'],
            'nama_barang' => $body['nama_barang'],
            'jumlah' => $body['jumlah'],
            'satuan' => $body['satuan'],
            'stok' => $body['stok']
        ]);
        return redirect()->to(route('manajemen'))->with('message', 'Barang berhasil diedit!');
    }
    //hapus barang
    public function destroy($id)
{
    $barang = Barang::findOrFail($id);
    $barang->delete();

    return redirect()->back()->with('message', 'Barang berhasil dihapus!');
}

}
