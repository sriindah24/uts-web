@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Pembelian</h1>

    </div>
    </div>
    
    <div class="col lg 12">
    
        <table class="table table-bordered">

            <thead>
                <tr><th>No</th><th>ID Pembelian</th><th>Tanggal Pembalian</th><th>Tanggal Terima</th><th>Id Supplier</th><th>Id Penjual Pesan</th><th>Id Penjual Terima</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $pembelian as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td>{{$val->id_pembelian}}</td><td>{{$val->tanggal_pembelian}}</td><td>{{$val->tanggal_terima}}</td><td>{{$val->id_supplier}}</td><td>{{$val->id_penjual_pesan}}</td><td>{{$val->id_penjual_terima}}</td>
                
            <td>
            <a href = "{{route('pembelian.edit',$val->id_pembelian)}}">Update</a>
            <form action="{{route('pembelian.destroy',$val->id_pembelian)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>
           
                   @endforeach
            </tbody>
            </table>
            <button><a href="{{route('pembelian.create')}}">Tambah Data</a></button>
            <button><a href="{{route('detailpembelian.index')}}">Detail Pembelian</a></button>
            {{$pembelian->links()}}
        </div>
        </div>
        </div>
    @endsection
