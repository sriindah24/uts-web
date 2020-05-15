@extends('layouts.tes')
@section('content')


<div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                <div class="container-fluid mimin-wrapper">
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-box"></span>
                      <a href="{{route('barang.index')}}">Barang</a>
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>                      
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa -female"></span> Penjual
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>                      
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-people"></span> Pembeli
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>                      
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-"></span> Supplier  
                    <span class="fa-angle-right fa right-arrow text-right"></span> </a>                      
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-store"></span> Gudang  
                    <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa"></span> Pembelian  
                    <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      
                    </li>
                    <li class="ripple"><a href="calendar.html">
                    <span class="fa fa"></span><a href="{{route('penjualan.index')}}"> Penjualan</a>
                    <span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>          
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-"></span> Detail Pembelian  
                    <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      
                    
                   
                  </ul>
                </div>
            </div>
            
<div class="panel">
       <div class="panel-body">
     <div class=col-lg-12>
     <h2>Daftar Penjualan</h2>

        <table class="table table-borederd">
        <thead>
            <tr><th>No</th><th>Kode Penjualan</th><th>Tanggal Penjualan</th><th>Jenis Pembayaran</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $in=>$val )
                <tr><td>{{($in+1)}}</td><td>{{$val->kode_penjualan}}</td><td>{{$val->tanggal_penjualan}}</td><td>{{$val->jenis_pembayaran}}</td>
                <td>
                    <a href="{{route('penjualan.edit',$val->id_penjualan)}}">update</a>
                    <form action="{{route('penjualan.destroy',$val->id_penjualan)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
        <a href="{{route('penjualan.create')}}">Tambah Data</a>
        </div>
    </div>
</div>
@endsection

