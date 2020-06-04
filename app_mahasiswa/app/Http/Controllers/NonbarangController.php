<?php

namespace App\Http\Controllers;
use App\Nonbarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NonbarangController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('ppl')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
   // @return \Illuminate\Http\Response
    public function index()
    {
        //
        $title='Barang';
        $nonbarang = Nonbarang::paginate(10);
        return view('admin.nonbarang',['nonbarang'=>$nonbarang],compact('title,nonbarang'));
       
    
    }
}
