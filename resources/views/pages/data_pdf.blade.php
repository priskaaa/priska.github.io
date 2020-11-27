<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
h1{
    font-size: 15px;
    margin-left: 200px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
h3{
    text-align: center;
    margin-top: 40px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
h2{
    margin-left: 300px;
    font-size: 15px;
    margin-top: -90px;
    margin-left: 475px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
.div{
    width: 30%;
    margin-top: -25px;
    margin-left: 130px;

}
h4{
    font-size: 15px;
    margin-left:450px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
</style>
</head>
<p><center>LAPORAN ALAT TULIS KANTOR TRIWULAN<br>
KANTOR PT.PLN (Persero) UNIT INDUK WILAYAH SULSEL,SULTRA DAN SULBAR<br>
JL. LETJEND HERTASNING BLOK B MAKASSAR<br><br></center></p>
<table class="table table-bordered">
    <thead class="table-primary">
      <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Volume </th>
        <th scope="col">Satuan</th>
        <th scope="col">Harga Satuan</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Supplier</th>
        
      </tr>
    </thead>
<body>
    <hr class="div">
    <h2>Manager Sekretariat Umum<br><br><br><br><hr width="99%"></h2>
    <h1>Vendor</h1>
    <h3></h3>
    <h4>Makassar,</h4>
    @foreach ($data as $data)
                  
            <tr>
              <td>{{$data->tanggal}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->quantity}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->total_price}}</td>
              <td>{{$data->jumlah}}</td>
              <td>{{$data->supplier}}</td>
              </tr>
     @endforeach

</body>

</html>
