@extends('layouts.tes')
@section('content')


<div class="panel">
       <div class="panel-body">
        <div class=col-lg-12>
        <h2>Daftar Barang</h2>
        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>ID Barang</th><th>Kode Barang</th><th>Nama Barang</th><th>Stock Barang</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($barang as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->id_barang}}</td><td>{{$val->kode_barang}}</td><td>{{$val->nama_barang}}</td><td>{{$val->stok}}</td>
                <td>
                    <a href="{{route('barang.edit',$val->id_barang)}}">update</a>
                    <form action="{{route('barang.destroy',$val->id_barang)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <a href="{{route('barang.create')}}">Tambah Data</a>
        {{$barang->links()}}
        </div>
    </div>
</div>
</div>
</div>
@endsection

