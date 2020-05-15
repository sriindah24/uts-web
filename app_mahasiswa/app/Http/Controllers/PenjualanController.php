<?php

namespace App\Http\Controllers;
use App\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class PenjualanController extends Controller
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
        $title='Penjualan';
        $penjualan = Penjualan::paginate(5);
       //$barang = DB::where('barang','id_gudang')->first();
       
       //dd($gudang);
       return view('admin.penjualan',compact('title','penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title='Input Penjualan';
        //$penjualan=Penjualan::paginate(5);
        //dd($barang);
        return view('admin.inputpenjualan',compact('title','penjualan'));
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
            'kode_penjualan'=>'required',
            'tanggal_penjualan'=>'required',
            'jenis_pembayaran'=>'required',
            'id_penjual'=>'',
            'id_pembeli'=>'',
            
        ],$messages);
        Penjualan::create($validasi);
        return redirect('penjualan')->with('succes','Data berhasil diupdate');
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
        $title='Edit Penjualan';
        $penjualan= Penjualan::find($id);
          return view('admin.inputpenjualan',compact('title','penjualan'));
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
            'kode_penjualan'=>'required',
            'tanggal_penjualan'=>'required',
            'jenis_pembayaran'=>'required',
            'id_penjual'=>'',
            'id_pembeli'=>'',
            
        ],$messages);
        Penjualan::whereid_penjualan($id)->update($validasi);
        return redirect('penjualan')->with('succes','Data berhasil diupdate');
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
        Penjualan::whereid_penjualan($id)->delete();
        return redirect('penjualan')->with('succes','Data berhasil diupdate');
    }
}
