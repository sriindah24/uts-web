<?php

namespace App\Http\Controllers;
use App\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PembelianController extends Controller
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
        $title='Pembelian';
        $pembelian=Pembelian::paginate(5);
        //dd($detailpembelian);
        return view('admin.pembelian',compact('title','pembelian'));
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
        $title='Input Pembelian';
        return view('admin.inputpembelian',compact('title','pembelian'));
        //
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
           
            
            'tanggal_pembelian'=>'required',
            'tanggal_terima'=>'required',
            'id_supplier'=>'required',
            'id_penjual_pesan'=>'required',
            'id_penjual_terima'=>'required',
        ],$messages);
        Pembelian::create($validasi);
        return redirect('pembelian')->with('succses','Data berhasil diupdate');
        
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
        $title='Input Pembelian';
        $pembelian= Pembelian::find($id);
        return view('admin.inputpembelian',compact('title','pembelian'));
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
           
            
            'tanggal_pembelian'=>'required',
            'tanggal_terima'=>'required',
            'id_supplier'=>'required',
            'id_penjual_pesan'=>'required',
            'id_penjual_terima'=>'required',
        ],$messages);

        Pembelian::whereid_pembelian($id)->update($validasi);
        return redirect('pembelian')->with('succses','Data berhasil diupdate');
        
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
        Pembelian::whereid_pembelian($id)->delete();
        return redirect('pembelian')->with('succses','Data berhasil diupdate');
        
        //
    }
}