@extends('layouts.tes')
@section('content')
<div class="panel">
<form action="{{(isset($supplier))?route('supplier.update',$supplier->id_supplier):route('supplier.store')}}" method="POST">
@csrf
@if(isset($supplier))?@method('PUT')@endif
     <div class="panel-body">
          <h1> Input Supplier</h1>
          
          <div class="form-group">
          <label class="col-sm-2 control-label text-right">Nama Supplier</label>
                <div class="col-sm-10"><input type="text" value="{{(isset($supplier))?$supplier->nama_supplier:old('nama_supplier')}}" name="nama_supplier" class="form-control"></div>
                @error('nama_supplier')<small style="color:red">{{$message}}</small>@enderror
          </div>
               <div class="form-group"><label class="col-sm-2 control-label text-right">Alamat</label>
                   <div class="col-sm-10"><input type="text"  value="{{(isset($supplier))?$supplier->alamat:old('alamat')}}" name="alamat" class="form-control"></div>
                </div>
                @error('alamat')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group"><label class="col-sm-2 control-label text-right">No Hp</label>
                     <div class="col-sm-10"><input type="text"  value="{{(isset($supplier))?$supplier->no_hp:old('no_hp')}}" name="no_hp" class="form-control"></div>
                 </div>
                 @error('no_hp')<small style="color :red">{{$message}}</small>@enderror
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>

    </div>
    </form>
    </div>
    @endsection