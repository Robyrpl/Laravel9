<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jenis;
class JenisController extends Controller
{
    public function index(){
        $jenis = DB::table('tbl_jenis')->get();
        // dd($jenis);
        return view('jenis.index', compact(['jenis']));
    }
    public function create(){
        return view('jenis.create');
    }
    public function store(Request $request){
        $jenis = Jenis::create([
            'id_jenis' => $request->id_jenis,
            'jenis_nama' => $request->jenis_nama,
            'jenis_status' => $request->jenis_status,
        ]);
        return redirect('/jenis');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis.edit',compact('jenis'));
    }
    public function update($id,Request $request){
        $jenis = Jenis::find($id)
        ->update($request->except('_token','method'));
        return redirect('/jenis');
    }
    public function destroy($id){
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');

    }
}
