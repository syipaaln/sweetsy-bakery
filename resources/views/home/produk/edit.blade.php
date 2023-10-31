<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Produk</title>
  </head>
  <body>
    <form action="{{ route('home.produk.post') }}"  method ="POST"  enctype="multipart/from-data">
      @csrf
      <input type="hidden" name="id" value="{{$produk->id}}">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Produk</label>
        <input type="text" class="form-control"  value="{{$produk->nama_produk}}" name="nama_produk" aria-describedby="emailHelp" placeholder="Masukan Nama Produk ">
    
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga Produk</label>
        <input type="number" class="form-control"  value="{{$produk->harga}}" name="harga" placeholder="Masukan Harga">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>