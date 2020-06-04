<?php

namespace App\Http\Controllers;
use App\Nonadminpembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class NonadminpembeliController extends Controller
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
        $title='Pembeli';
        $nonadminpembeli = Nonadminpembeli::paginate(10);
        return view('admin.nonadminpembeli',['nonadminpembeli'=>$nonadminpembeli],compact('title,nonadminpembeli'));
       
    
    }
}
