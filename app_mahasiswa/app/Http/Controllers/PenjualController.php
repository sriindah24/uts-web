<?php

namespace App\Http\Controllers;
use App\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class PenjualController extends Controller
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
        $title='Penjual';
        $penjual = Penjual::paginate(5);
       //$barang = DB::where('barang','id_gudang')->first();
       
       //dd($gudang);
       return view('admin.penjual',compact('title','penjual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title='Input Penjual';
        //$penjualan=Penjualan::paginate(5);
        //dd($barang);
        return view('admin.inputpenjual',compact('title','penjual'));
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
            
            'nama_penjual'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            
            
        ],$messages);
        Penjual::create($validasi);
        return redirect('penjual')->with('succes','Data berhasil diupdate');
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
        $title='Edit Penjual';
        $penjual= Penjual::find($id);
          return view('admin.inputpenjual',compact('title','penjual'));
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
        //
        
        $messages = [
            'required'=>'Kolom: attribute harus lengkap',
            'date'=>'Kolom: attribute harus tanggal',
            'numeric'=>'Kolom: attribute harus lengkap',
        ];
        $validasi = $request->validate([
            
            'nama_penjual'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            
        ],$messages);
        Penjual::whereid_penjual($id)->update($validasi);
        return redirect('penjual')->with('succes','Data berhasil diupdate');
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
        Penjual::whereid_penjual($id)->delete();
        return redirect('penjual')->with('succes','Data berhasil diupdate');
    }
}
