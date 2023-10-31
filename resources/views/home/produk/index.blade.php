<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Index produk</title>
  </head>
  <body>
    <br>
    <a href="/home/produk/create">Tambah Data</a>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
            <th scope="col" style="text-align: center;width: 6%">No</th>
            <th scope="col">Nama Produk&nbsp;</th>
            <th scope="col">Harga&nbsp;</th>
            <th scope="col" style="width: 25%;text-align: center">Aksi&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomor = 1; ?>
        @foreach ($produk as $no => $produk)
          <tr>
            <td scope="row" style="text-align: center">{{$nomor++}}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>{{ $produk->harga }}</td>
            <td class="text-center">
              <a href="{{ route('home.produk.edit', $produk->id) }}" class="btn btn-sm btn-primary">edit
                <i class="fa fa-pencil-alt"></i>
              </a>
              <a href="/home/produk/index/delete/{{ $produk->id }}" class="btn btn-sm btn-danger">hapus
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>