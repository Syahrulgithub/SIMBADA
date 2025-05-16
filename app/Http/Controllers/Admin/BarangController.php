<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;

class BarangController extends Controller{
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
