@extends('layouts.tes')
@section('content')
<div class="panel">
<form action="{{(isset($pembelian))?route('pembelian.update',$pembelian->id_pembelian):route('pembelian.store')}}" method="POST">
@csrf
@if(isset($pembelian))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Detail Pembelian</h1>
          
                
                <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Pembelian</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($pembelian))?$pembelian->harga_satuan:old('tanggal_pembelian')}}" name="tanggal_pembelian" class="form-control"></div>
                @error('tanggal_pembelian')<small style="color:red">{{$message}}</small>@enderror
                </div>
                <div class="form-group"><label class="col-sm-2 control-label text-right">Tanggal Terima</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($pembelian))?$pembelian->jumlah_pembelian:old('tanggal_terima')}}" name="tanggal_terima" class="form-control"></div>
                @error('tanggal_terima')<small style="color:red">{{$message}}</small>@enderror
                </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">ID Supplier</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($pembelian))?$pembelian->id_supplier:old('id_supplier')}}" name="id_supplier" class="form-control"></div>
                </div>
                @error('id_supplier')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group"><label class="col-sm-2 control-label text-right">ID Penjual Pesan</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($pembelian))?$pembelian->id_penjual_pesan:old('id_penjual_pesan')}}" name="id_penjual_pesan" class="form-control"></div>
                 </div>
                 @error('id_penjual_pesan')<small style="color :red">{{$message}}</small>@enderror
                 <div class="form-group"><label class="col-sm-2 control-label text-right">ID Penjual Terima</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($pembelian))?$pembelian->id_penjual_terima:old('id_bpenjual_terima')}}" name="id_penjual_terima" class="form-control"></div>
                 </div>
                 @error('id_penjual_terima')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
    </div>
    @endsection
