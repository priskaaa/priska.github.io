@extends('layouts.dashboard')
@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3 align-items-center justify-content-between d-sm-flex">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Barang Masuk</h6>
    <a href="/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Nomor Bon</th>
            <th>Nama</th>
            <th>Stock Awal</th>
            <th>Stock Akhir</th>
            <th>Satuan Barang</th>
            <th>Harga Satuan</th>
            <th>Jumlah</th>
            <th>Supplier</th>
          </tr>
        </thead>
    <tbody>
     
        @foreach ($data as $data)
                  
            <tr>
              <td>{{$data->tanggal}}</td>
              <td>{{$data->number}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->volume}}</td>
              <td>{{$data->quantity}}</td>
              <td>{{$data->price}}</td>
              <td>Rp.{{$data->total_price}}</td>
              <td>Rp.{{$data->jumlah}}</td>
              <td>{{$data->supplier}}</td>
              </tr>
     @endforeach
    </tbody>
  </table>


@endsection