<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('tbl_barang')->get();
        // dd($barang);
        return view('barang.index', compact(['barang']));
    }
    public function create(){
        return view('barang.create');
    }
    public function store(Request $request){
        $barang = Barang::create([
            'id_barang' => $request->id_barang,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'id_jenis' => $request->id_jenis,
            'id_supplayer' => $request->id_supplier,
            'harga_jual' => $request->harga_jual,
            'harga_status' => $request->harga_status
        ]);
        return redirect('/barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit',compact('barang'));
    }
    public function update($id,Request $request){
        $barang = Barang::find($id)
        ->update($request->except('_token','method'));
        return redirect('/barang');
    }
    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');

    }
}
