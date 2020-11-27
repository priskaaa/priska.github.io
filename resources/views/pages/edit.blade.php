{{-- @extends('layouts.dashboard')
@section('content')

<div class="card-shadow">
    <div class="card-body">
        <form action="{{ route('income.ubah', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
            <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{  $item->tanggal }}">
            </div>
            <div class="form-group">
            <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $item->name }}">
            </div>
  
            <div class="form-group">
            <label for="volume">Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="Volume" value="{{ $item->quantity }}">
            </div>
            <div class="form-group">
            <label for="price">Satuan</label>
                <input type="text" class="form-control" name="price" placeholder="Satuan" value="{{ $item->price }}">
            </div>
            <div class="form-group">
            <label for="total_price">Harga Satuan</label>
                <input type="text" class="form-control" name="total_price" placeholder="Harga Satuan" value="{{ $item->total_price }}">
            </div>
            <div class="form-group">
            <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="{{ $item->jumlah }}">
            </div>
            <div class="form-group">
            <label for="supllier">Supplier</label>
                <input type="text" class="form-control" name="supplier" placeholder="Supplier" value="{{ $item->supplier }}">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">
                Ubah
            </button>
        </form>
    </div>
  </div>
  
  </div>


@endsection --}}