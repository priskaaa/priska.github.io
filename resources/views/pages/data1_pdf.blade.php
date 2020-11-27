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
h3{
    text-align: center;
    margin-left: 300px;
    font-size: 15px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-top: 60px;
}
h2{
    font-size: 15px;
    margin-left:450px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
p{
  text-align: center;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

</style>
</head>
<p>LAPORAN KELUAR ALAT TULIS KANTOR TRIWULAN<br>
KANTOR PT.PLN (Persero) UNIT INDUK WILAYAH SULSEL,SULTRA DAN SULBAR<br>
JL. LETJEND HERTASNING BLOK B MAKASSAR<br><br></p>
<table class="table table-bordered">
    <thead class="table-primary">
      <tr>
              <th>Tanggal</th>
              <th>Name</th>
              <th>Volume</th>
              <th>Satuan Barang</th>
              <th>Bidang</th>
              <th>Keterangan</th>
        
      </tr>
    </thead>
<body>
<h3>Yang Mengeluarkan Barang<br><br><br><br><hr width="50%"></h3>
<h2>Makassar,</h2>

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

</body>

</html>
