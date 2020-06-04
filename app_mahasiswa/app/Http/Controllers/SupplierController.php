<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SupplierController extends Controller
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
        $title='Supplier';
        $supplier=Supplier::paginate(5);
        //dd($suplier);
        return view('admin.supplier',compact('title','supplier'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $title='Input Supplier';
        return view('admin.inputsupplier',compact('title','supplier'));
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
           
            'nama_supplier'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Supplier::create($validasi);
        return redirect('supplier')->with('succses','Data berhasil diupdate');
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
       $title='Input Supplier';
        $supplier= Supplier::find($id);
        return view('admin.inputsupplier',compact('title','supplier'));
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
            
            'nama_supplier'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
        ],$messages);
        Supplier::whereid_supplier($id)->update($validasi);
        return redirect('supplier')->with('succses','Data berhasil diupdate');
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
      Supplier::whereid_supplier($id)->delete();
        return redirect('supplier')->with('succses','Data berhasil diupdate');
        //
    }
}