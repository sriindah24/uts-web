@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($penjual))?route('penjual.update',$penjual->id_penjual):route('penjual.store')}}" method="POST">
       @csrf
       @if(isset($penjual))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Penjual</h3>

       

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Nama Penjual</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjual))?$penjual->nama_penjual:old('nama_penjual')}}" name="nama_penjual" class="form-control"></div>
              @error('nama_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Alamat</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjual))?$penjual->alamat:old('alamat')}}" name="alamat" class="form-control"></div>
              @error('alamat')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">No Hp</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($penjual))?$penjual->alamat:old('no_hp')}}" name="no_hp" class="form-control"></div>
              @error('no_hp')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

