@extends('layouts.tes')
@section('content')

            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Detail Penjualan</h2>

        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>ID Detail Penjualan</th><th>Nama Barang</th><th>Harga Satuan</th><th>Jumlah Penjualan</th><th>Total Harga</th><th>ID Barang</th><th>ID Penjualan</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($detailpenjualan as $in=>$val )
            <tr><td>{{($in+1)}}</td><td>{{$val->id_detailpenjualan}}</td><td>{{$val->nama_barang}}</td><td>{{$val->harga_satuan}}</td><td>{{$val->jumlah_penjualan}}</td><td>{{$val->total_harga}}</td><td>{{$val->id_barang}}</td><td>{{$val->id_penjualan}}</td>
                <td>
                    <a href="{{route('detailpenjualan.edit',$val->id_detailpenjualan)}}">update</a>
                    <form action="{{route('detailpenjualan.destroy',$val->id_detailpenjualan)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <a href="{{route('detailpenjualan.create')}}">Tambah Data</a>
        </div>
    </div>
</div>
@endsection

