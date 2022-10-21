<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')->get();
        // dd($transaksi);
        return view('transaksi.index', compact(['transaksi']));
    }
    public function create(){
        return view('transaksi.create');
    }
    public function store(Request $request){
        $transaksi = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->no_nota,
            'transaksi_status' => $request->status,
        ]);
        return redirect('/transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact('transaksi'));
    }
    public function update($id,Request $request){
        $transaksi = Transaksi::find($id)
        ->update($request->except('_token','method'));
        return redirect('/transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');

    }
}
