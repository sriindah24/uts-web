@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Detail Pembelian</h1>

    </div>
    </div>
    
    <div class="col lg 12">

        <table class="table table-bordered">

            <thead>
                <tr><th>No</th><th>Nama Barang</th><th>Harga Satuan</th><th>Jumlah Pembelian</th><th>Total Harga</th><th>Id Barang</th><th>Id Pembelian</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $detailpembelian as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td>{{$val->nama_barang}}</td><td>{{$val->harga_satuan}}</td><td>{{$val->jumlah_pembelian}}</td><td>{{$val->total_harga}}</td><td>{{$val->id_barang}}</td><td>{{$val->id_pembelian}}</td>
                
            <td>
            <a href = "{{route('detailpembelian.edit',$val->id_detail_pembelian)}}">Update</a>
            <form action="{{route('detailpembelian.destroy',$val->id_detail_pembelian)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>
           
                   @endforeach
            </tbody>
            </table>
            <a href="{{route('detailpembelian.create')}}">Tambah Data</a>
            {{$detailpembelian->links()}}
        </div>
        </div>
        </div>
    @endsection