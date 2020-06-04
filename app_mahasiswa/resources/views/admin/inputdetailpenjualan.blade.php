@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($detailpenjualan))?route('detailpenjualan.update',$detailpenjualan->id_detailpenjualan):route('detailpenjualan.store')}}" method="POST">
       @csrf
       @if(isset($detailpenjualan))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Detail Penjualan</h3>

       

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Nama Barang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->nama_barang:old('nama_barang')}}" name="nama_barang" class="form-control"></div>
              @error('nama_barang')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Harga Satuan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->harga_satuan:old('harga_satuan')}}" name="harga_satuan" class="form-control"></div>
              @error('harga_satuan')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Jumlah Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->jumlah_penjualan:old('jumlah_penjualan')}}" name="jumlah_penjualan" class="form-control"></div>
              @error('jumlah_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Total Harga</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->total_harga:old('total_harga')}}" name="total_harga" class="form-control"></div>
              @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">ID Barang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->id_barang:old('id_barang')}}" name="id_barang" class="form-control"></div>
              @error('id_barang')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">ID Penjualan</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($detailpenjualan))?$detailpenjualan->id_penjualan:old('id_penjualan')}}" name="id_penjualan" class="form-control"></div>
              @error('id_penjualan')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

