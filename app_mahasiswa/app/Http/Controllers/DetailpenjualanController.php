<?php

namespace App\Http\Controllers;
use App\Detailpenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DetailpenjualanController extends Controller
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
        $title='Detail Penjualan';
        $detailpenjualan = Detailpenjualan::paginate(20);
       //$barang = DB::where('barang','id_gudang')->first();
       
       //dd($gudang);
       return view('admin.detailpenjualan',compact('title','detailpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title='Input Detail Penjualan';
        //$penjualan=Penjualan::paginate(5);
        //dd($barang);
        return view('admin.inputdetailpenjualan',compact('title','detailpenjualan'));
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
            
            'nama_barang'=>'required',
            'harga_satuan'=>'required',
            'jumlah_penjualan'=>'required',
            'total_harga'=>'',
            'id_barang'=>'required',
            'id_penjualan'=>'required',
            
        ],$messages);
        Detailpenjualan::create($validasi);
        return redirect('detailpenjualan')->with('succes','Data berhasil diupdate');
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
        $title='Edit Detail Penjualan';
        $detailpenjualan= Detailpenjualan::find($id);
          return view('admin.inputdetailpenjualan',compact('title','detailpenjualan'));
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
            
            'nama_barang'=>'required',
            'harga_satuan'=>'required',
            'jumlah_penjualan'=>'required',
            'total_harga'=>'',
            'id_barang'=>'required',
            'id_penjualan'=>'required',
            
        ],$messages);
        Detailpenjualan::whereid_detailpenjualan($id)->update($validasi);
        return redirect('detailpenjualan')->with('succes','Data berhasil diupdate');
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
        Detailpenjualan::whereid_detailpenjualan($id)->delete();
        return redirect('detailpenjualan')->with('succes','Data berhasil diupdate');
    }
}
