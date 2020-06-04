@extends('layouts.tes')
@section('content')

<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Supplier</h1>

    </div>
    </div>
    
    <div class="col lg 12">
    
        <table class="table table-bordered">

            <thead>
                <tr><th>No</th><th>ID Supplier</th><th>Nama Supplier</th><th>Alamat</th><th>No Hp</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $supplier as $in=>$val )
                <tr>
                <td>{{($in+1)}}</td><td> {{$val->id_supplier}}</td><td> {{$val->nama_supplier}}</td><td>{{$val->alamat}}</td><td>{{$val->no_hp}}</td>
                
            <td>
            <a href = "{{route('supplier.edit',$val->id_supplier)}}">Update</a>
            <form action="{{route('supplier.destroy',$val->id_supplier)}}"method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>
                   @endforeach
            </tbody>
            </table>
            <a href="{{route('supplier.create')}}">Tambah Data</a>
            {{$supplier->links()}}
        </div>
        </div>
        </div>
    @endsection