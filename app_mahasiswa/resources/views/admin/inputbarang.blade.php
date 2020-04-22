@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($barang))?route('barang.update',$barang->id_barang):route('barang.store')}}" method="POST">
       @csrf
       @if(isset($barang))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Barang</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">Kode Barang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->kode_barang:old('kode_barang')}}" name="kode_barang" class="form-control"></div>
               @error('kode_barang')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Nama Barang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->nama_barang:old('nama_barang')}}" name="nama_barang" class="form-control"></div>
              @error('nama_barang')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Stock Barang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->stok:old('stok')}}" name="stok" class="form-control"></div>
              @error('stok')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

