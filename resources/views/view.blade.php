<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1 {
  text-align: center;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Obat</title>
    
</head>
<body>

<div class="container mt-5">
<h1>Data Obat</h1>
<div class="d-flex justify-content-end mb-3">
<a href="{{route('create')}}" type="button" class="mx-3 my-2 btn btn-primary ">Tambah Obat</a>
</div>

    <table class="table">
        <tr>

            <th>Kode</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
        <!-- diambil dari controller bagian compact -->
        @foreach ($obats as $obat) 
        <tr>

            <th scope="row">{{$obat->kode}}</th>
            <td>{{$obat->nama}}</td>
            <td>{{$obat->deskripsi}}</td>
            <td>{{$obat->tipe}}</td>
            <td>{{$obat->jumlah}}</td>
            <td>{{$obat->harga_satuan}}</td>
            <td><a href="{{route('edit', $obat->id)}}" type="button" class="btn btn-primary">Ubah</a></td>
            <td><a href="{{route('delete', $obat->id)}}" type="button" class="btn btn-danger">Hapus</a></td>
        </tr>  
        @endforeach


    </table>
</div>
    
    
</body>
</html>