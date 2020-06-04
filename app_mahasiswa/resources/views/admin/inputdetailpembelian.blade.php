@extends('layouts.tes')
@section('content')
<div class="panel">
<form action="{{(isset($detailpembelian))?route('detailpembelian.update',$detailpembelian->id_detail_pembelian):route('detailpembelian.store')}}" method="POST">
@csrf
@if(isset($detailpembelian))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Detail Pembelian</h1>
          
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Nama Barang</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($detailpembelian))?$detailpembelian->nama_barang:old('nama_barang')}}" name="nama_barang" class="form-control"></div>
                @error('nama_barang')<small style="color:red">{{$message}}</small>@enderror
                </div>
                
                <div class="form-group"><label class="col-sm-2 control-label text-right">Harga Satuan</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($detailpembelian))?$detailpembelian->harga_satuan:old('harga_satuan')}}" name="harga_satuan" class="form-control"></div>
                @error('harga_satuan')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <div class="form-group"><label class="col-sm-2 control-label text-right">Jumlah Pembelian</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($detailpembelian))?$detailpembelian->jumlah_pembelian:old('jumlah_pembelian')}}" name="jumlah_pembelian" class="form-control"></div>
                @error('jumlah_pembelian')<small style="color:red">{{$message}}</small>@enderror
                </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">Total Harga</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($detailpembelian))?$detailpembelian->total_harga:old('total_harga')}}" name="total_harga" class="form-control"></div>
                </div>
                @error('total_harga')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group"><label class="col-sm-2 control-label text-right">Id Barang</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($detailpembelian))?$detailpembelian->id_barang:old('id_barang')}}" name="id_barang" class="form-control"></div>
                 </div>
                 @error('id_barang')<small style="color :red">{{$message}}</small>@enderror
                 <div class="form-group"><label class="col-sm-2 control-label text-right">Id Pembelian</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($detailpembelian))?$detailpembelian->id_pembelian:old('id_barang')}}" name="id_pembelian" class="form-control"></div>
                 </div>
                 @error('id_pembelian')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
    </div>
    @endsection