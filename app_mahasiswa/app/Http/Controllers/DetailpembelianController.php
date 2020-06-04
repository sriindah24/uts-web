<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Detailpembelian;
use Illuminate\Support\Facades\Gate;
class DetailpembelianController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
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
        $title='Detailpembelian';
        $detailpembelian=Detailpembelian::paginate(5);
        //dd($detailpembelian);
        return view('admin.detailpembelian',compact('title','detailpembelian'));
        //
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Detail Pembelian';
        return view('admin.inputdetailpembelian',compact('title','detailpembelian'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom: atribute harus lengkap',
            'date'=> 'Kolom: atribute harus Tanggal',
            'numeric'=> 'Kolom: atribute harus Angka', 
        ];
        $validasi = $request->validate([
           
            'nama_barang'=>'required',
            'harga_satuan'=>'required',
            'jumlah_pembelian'=>'required',
            'total_harga'=>'required',
            'id_barang'=>'required',
            'id_pembelian'=>'required',
        ],$messages);
        Detailpembelian::create($validasi);
        return redirect('detailpembelian')->with('succses','Data berhasil diupdate');
        //
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
        $title='Input Detail Pembelian';
        $detailpembelian= Detailpembelian::find($id);
        return view('admin.inputdetailpembelian',compact('title','detailpembelian'));
        //
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
        $messages = [
            'required'=> 'Kolom: atribute harus lengkap',
            'date'=> 'Kolom: atribute harus Tanggal',
            'numeric'=> 'Kolom: atribute harus Angka', 
        ];
        $validasi = $request->validate([
           
            'nama_barang'=>'required',
            'harga_satuan'=>'required',
            'jumlah_pembelian'=>'required',
            'total_harga'=>'required',
            'id_barang'=>'required',
            'id_pembelian'=>'required',
        ],$messages);
        Detailpembelian::whereid_detail_pembelian($id)->update($validasi);
        return redirect('detailpembelian')->with('succses','Data berhasil diupdate');
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detailpembelian::whereid_detail_pembelian($id)->delete();
        return redirect('detailpembelian')->with('succses','Data berhasil diupdate');
        
        
        //
    }
}