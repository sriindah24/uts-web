<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request,$next){
            if(Gate::allows('admin'))return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Barang';
        $barang = Barang::paginate(5);
        //$barang = DB::where('barang','id_gudang')->first();
        
        //dd($barang);
        return view('admin.barang',compact('title','barang'));
       
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title='Input Barang';
        //$barang=Barang::paginate(5);
        //dd($barang);
        return view('admin.inputbarang',compact('title','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required'=>'Kolom: attribute harus lengkap',
            'date'=>'Kolom: attribute harus tanggal',
            'numeric'=>'Kolom: attribute harus lengkap',
        ];
        $validasi = $request->validate([
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'stok'=>'',
        ],$messages);
        Barang::create($validasi);
        return redirect('barang')->with('succes','Data berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title='Input Barang';
        $barang= Barang::find($id);
          return view('admin.inputbarang',compact('title','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $messages = [
            'required'=>'Kolom: attribute harus lengkap',
            'date'=>'Kolom: attribute harus tanggal',
            'numeric'=>'Kolom: attribute harus lengkap',
        ];
        $validasi = $request->validate([
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'stok'=>'',
        ],$messages);
        Barang::whereid_barang($id)->update($validasi);
        return redirect('barang')->with('succes','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::whereid_barang($id)->delete();
        return redirect('barang')->with('succes','Data berhasil diupdate');   
        //
    }
}


