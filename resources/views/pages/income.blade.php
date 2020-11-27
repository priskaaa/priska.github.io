@extends('layouts.dashboard')
@section('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>

  $(document).ready(function(){
        $('#editEmployeeModal').on('show.bs.modal', function (event){
        var a = $(event.relatedTarget) // Button that triggered the modal
        var id = a.data('id') // Extract info from data-* attributes
        var tanggal = a.data('tanggal') // Extract info from data-* attributes
        var number = a.data('number')
        var name = a.data('name') // Extract info from data-* attributes
        var volume = a.data('volume')
        var quantity = a.data('quantity') // Extract info from data-* attributes
        var price = a.data('price') // Extract info from data-* attributes
        var total_price = a.data('total_price') // Extract info from data-* attributes
        var jumlah = a.data('jumlah') // Extract info from data-* attributes
        var supplier = a.data('supplier') // Extract info from data-* attributes
        var link = a.data('link') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Edit Barang Masuk ' + name)
        modal.find('.modal-body #tanggal').val(tanggal)
        modal.find('.modal-body #number').val(number)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #volume').val(volume)
        modal.find('.modal-body #quantity').val(quantity)
        modal.find('.modal-body #price').val(price)
        modal.find('.modal-body #total_price').val(total_price)
        modal.find('.modal-body #jumlah').val(jumlah)
        modal.find('.modal-body #supplier').val(supplier)
        modal.find('.modal-content form').attr('action', link)
        })
    });
</script>
    
<div class="card shadow mb-4">
    <div class="card-header py-3 align-items-center justify-content-between d-sm-flex">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Barang Masuk</h6>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Barang 
      </button>
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
              <th>Action</th>

            </tr>
          </thead>
          
          <tbody>
              @foreach ($incomes as $income)
                  
              
            <tr>
              <td>{{$income->tanggal}}</td>
              <td>{{$income->number}}</td>
              <td>{{$income->name}}</td>
              <td>{{$income->volume}}</td>
              <td>{{$income->quantity}}</td>
              <td>{{$income->price}}</td>
              <td>Rp.{{$income->total_price}}</td>
              <td>Rp.{{$income->jumlah}}</td>
              <td>{{$income->supplier}}</td>
              <td>    
              <form action="{{route('income.destroy',$income->id)}}" method="post">
                @method('delete')
                @csrf
                <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#editEmployeeModal" data-toggle="modal" class="btn btn-primary"
                  data-id = "{{$income->id}}"
                  data-tanggal = "{{$income->tanggal}}"
                  data-number = "{{$income->number}}"
                  data-name = "{{$income->name}}"
                  data-volume = "{{$income->volume}}"
                  data-quantity = "{{$income->quantity}}"
                  data-price = "{{$income->price}}"
                  data-total_price = "{{$income->total_price}}"
                  data-jumlah = "{{$income->jumlah}}"
                  data-supplier = "{{$income->supplier}}"
                  data-link = "{{route('income.ubah', $income->id)}}"
                  >Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditModal" data-id="{{$income->id}}" data-link="{{route('income.update',$income->id)}}">Keluar</button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

<!-- Modal Barang Masuk -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Barang Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('income.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal">
            </div>
            <div class="form-group">
              <label>Nomor Bon</label>
              <input type="text" class="form-control" name="number">
            </div> 
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label >Volume Barang</label>
                  <input type="number" class="form-control" name="volume">
                </div>
                <div class="form-group">
                  <label >Stock Barang</label>
                  <input type="number" class="form-control" name="quantity">
                </div>
                <div class="form-group">
                    <label>Satuan Barang</label>
                    <input type="text" class="form-control" name="price">
                  </div>
                  <div class="form-group">
                    <label>Harga Satuan</label>
                    <input type="number" class="form-control" name="total_price">
                  </div>
                  <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                  </div>
                  <div class="form-group">
                    <label>Supplier</label>
                    <input type="text" class="form-control" name="supplier">
                  </div>       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">add</button>
        </div>
    </form>
      </div>
    </div>
  </div>



<!-- Modal Edit Barang Masuk -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Edit Barang Masuk</h5>
      </div>
      <div class="modal-body">
      <form action="" method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="form-group">
            <label>Nomor Bon</label>
            <input type="text" class="form-control" id="number" name="number">
          </div> 
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label >Volume Awal</label>
                <input type="number" class="form-control" id="volume" name="volume">
              </div>
              <div class="form-group">
                <label >Volume Akhir</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
              </div>
              <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="number" class="form-control" id="total_price" name="total_price">
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                  <label>Supplier</label>
                  <input type="integer" class="form-control" id="supplier" name="supplier">
                </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
  </form>
    </div>
  </div>
</div>

{{-- Modal Barang Keluar --}}
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Barang Keluar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form action="" method="post">
                        @method('PUT')
                          @csrf
                          <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal">
                          </div>
                              <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama">
                              </div>
                              <div class="form-group">
                                <label >Satuan Barang</label>
                                <input type="text" class="form-control" name="nomor">
                              </div>
                              <div class="form-group">
                                <label >Volume</label>
                                <input type="integer" class="form-control" name="quantity">
                              </div>
                              <div class="form-group">
                                  <label>Bidang</label>
                                  <input type="integer" class="form-control" name="bidang">
                              </div>
                                  <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="integer" class="form-control" name="keterangan">
                                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Out</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection

@push('addon-script')
    <script>
    $ (document).ready(function(){
        $('#EditModal').on('show.bs.modal',function(event) {
            var button = $(event.relatedTarget)
            var incomeid = button.data('id');
            var link = button.data('link');

        
            var modal = $ (this)
            modal.find('.modal-body form').attr('action', link)
        })
    })
    </script>
@endpush