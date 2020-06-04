@extends('layouts.tesnonadmin')
@section('content')



<div class="panel">
       <div class="panel-body">
        <div class=col-lg-12>
        <h2>Daftar Pembeli</h2>
        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>ID Pembeli</th><th>Nama Pembeli</th><th>Alamat</th><th>No HP</th></tr>
        </thead>
        <tbody>
            @foreach ($nonadminpembeli as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->id_pembeli}}</td><td>{{$val->nama_pembeli}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
                
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

