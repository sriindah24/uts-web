<?php

namespace App\Http\Controllers;
use App\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GudangController extends Controller
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
         $title='Gudang';
         $gudang = Gudang::all();
        //$barang = DB::where('barang','id_gudang')->first();
        
        //dd($gudang);
        return view('admin.gudang',compact('title','gudang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title='Input Gudang';
        //$barang=Barang::paginate(5);
        //dd($barang);
        return view('admin.inputgudang',compact('title','gudang'));
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
            'kode_gudang'=>'required',
            'alamat_gudang'=>'required',
            
        ],$messages);
        Gudang::create($validasi);
        return redirect('gudang')->with('succes','Data berhasil diupdate');
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
        $title='Edit Gudang';
        $gudang= Gudang::find($id);
          return view('admin.inputgudang',compact('title','gudang'));
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
            'kode_gudang'=>'required',
            'alamat_gudang'=>'required',
            
        ],$messages);
        Gudang::whereid_gudang($id)->update($validasi);
        return redirect('gudang')->with('succes','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Gudang::whereid_gudang($id)->delete();
        return redirect('gudang')->with('succes','Data berhasil diupdate');
    }
}
