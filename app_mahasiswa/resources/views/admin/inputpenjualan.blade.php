@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($penjualan))?route('penjualan.update',$penjualan->id_penjualan):route('penjualan.store')}}" method="POST">
       @csrf
       @if(isset($penjualan))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Penjualan</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">Kode Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$barang->kode_barang:old('kode_penjualan')}}" name="kode_penjualan" class="form-control"></div>
               @error('kode_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Tanggal Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjualan))?$penjualan->tanggal_penjualan:old('tanggal_penjualan')}}" name="tanggal_penjualan" class="form-control"></div>
              @error('tanggal_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Jenis Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjualan))?$penjualan->jenis_pembayaran:old('jenis_pembayaran')}}" name="jenis_pembayaran" class="form-control"></div>
              @error('jenis_pembayaran')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

