@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($gudang))?route('gudang.update',$gudang->id_gudang):route('gudang.store')}}" method="POST">
       @csrf
       @if(isset($gudang))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input gudang</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">Kode gudang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($gudang))?$gudang->kode_gudang:old('kode_gudang')}}" name="kode_gudang" class="form-control"></div>
               @error('kode_gudang')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Alamat gudang</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($gudang))?$gudang->alamat_gudang:old('alamat_gudang')}}" name="alamat_gudang" class="form-control"></div>
              @error('alamat_gudang')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
        
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

