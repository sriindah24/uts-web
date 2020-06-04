@extends('layouts.tes')
@section('content')

<div class="panel">
     <form action="{{(isset($pembeli))?route('pembeli.update',$pembeli->id_pembeli):route('pembeli.store')}}" method="POST">
       @csrf
       @if(isset($pembeli))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input pembeli</h3>

       

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Nama Pembeli</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($pembeli))?$pembeli->nama_pembeli:old('nama_pembeli')}}" name="nama_pembeli" class="form-control"></div>
              @error('nama_pembeli')<small style="color:red">{{$message}}</small>@enderror
         </div>
         
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Alamat</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($pembeli))?$pembeli->alamat:old('alamat')}}" name="alamat" class="form-control"></div>
              @error('alamat')<small style="color:red">{{$message}}</small>@enderror
         </div>
         <div class="form-group">
              <label class="col-sm-2 control-label text-right">No Hp</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($pembeli))?$pembeli->alamat:old('no_hp')}}" name="no_hp" class="form-control"></div>
              @error('no_hp')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>
@endsection

