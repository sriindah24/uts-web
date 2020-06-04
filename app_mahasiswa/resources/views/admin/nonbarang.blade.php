@extends('layouts.tesnonadmin')
@section('content')



<div class="panel">
       <div class="panel-body">
        <div class=col-lg-12>
        <h2>Daftar Barang</h2>
        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Stock Barang</th></tr>
        </thead>
        <tbody>
            @foreach ($nonbarang as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->kode_barang}}</td><td>{{$val->nama_barang}}</td><td>{{$val->stok}}</td>
                
                </tr>

            @endforeach
        </tbody>
        </table>
        
        </div>
    </div>
</div>
</div>
</div>
@endsection

