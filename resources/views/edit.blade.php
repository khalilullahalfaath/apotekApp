<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            text-align: center;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div class="container mt-5">
    <h1>Edit Obat</h1>
    <form action="{{route('update', $obatId->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input type="text" class="form-control" name="kode" aria-describedby="emailHelp"
                placeholder="Enter email" value="{{$obatId->kode}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="emailHelp" value="{{$obatId->nama}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="emailHelp" value="{{$obatId->deskripsi}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tipe</label>

            <select class="form-select" aria-label="Default select example" name="tipe" value="{{$obatId->tipe}}">
                <option selected>Pilih Tipe</option>
                <option value="tablet">Tablet</option>
                <option value="pil">Pil</option>
                <option value="sirup">Sirup</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" placeholder="emailHelp" value="{{$obatId->jumlah}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga Satuan</label>
            <input type="number" class="form-control" name="harga_satuan" placeholder="emailHelp" value="{{$obatId->harga_satuan}}">
        </div>

        <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col"><button class="btn btn-danger" type="reset">Reset</button></div>
            <div class="col"><button class="btn btn-primary" >Submit</button></div>
            <div class="col">
                <a href="/view" type="button" class="btn btn-warning">Back</a>
            </div>
        </div>
        </div>
    </form>
    </div>
    
    
</body>

</html>