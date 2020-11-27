@extends('layouts.dashboard')
@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3 align-items-center justify-content-between d-sm-flex">
      <h6 class="m-0 font-weight-bold text-primary">DATA BARANG KELUAR</h6>
      <a href="/cetak" class="btn btn-primary" target="_blank">Cetak PDF</a>
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Name</th>
              <th>Volume</th>
              <th>Satuan Barang</th>
              <th>Bidang</th>
              <th>Keterangan</th>

            </tr>
          </thead>
          
          <tbody>
      @foreach ($outcomes as $outcome)
                  
              
            <tr>
              <td>{{$outcome->tanggal}}</td>
              <td>{{$outcome->nomor}}</td>
              <td>{{$outcome->nama}}</td>
              <td>{{$outcome->quantity}}</td>
              <td>{{$outcome->bidang}}</td>
              <td>{{$outcome->keterangan}}</td>
              
            </tr>
            @endforeach
          </tbody>
          
        </table>
      </div>
    </div>
  </div>
{{-- <!-- Button trigger modal --> --}}
 
@endsection

