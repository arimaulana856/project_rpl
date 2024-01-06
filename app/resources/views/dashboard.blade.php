<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dasboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    @include("partials.navbar")

    <div class="container">

      {{-- card --}}
      <div class="container d-flex justify-content-center mb-5">
        {{-- card register --}}
        <div class="card" style="width: 20rem;">
          <div class="card-body bg-success">
            <h5 class="card-title text-light mb-2">Register</h5>
            <a href="#" class="btn btn-light mt-2">Lihat</a>
          </div>
        </div>
        {{-- card register --}}
  
        {{-- card pelanggan --}}
        <div class="card ms-2 me-2" style="width: 20rem;">
          <div class="card-body bg-danger">
            <h5 class="card-title text-light mb-2">Pelanggan</h5>
            <a href="#" class="btn btn-light mt-2">Lihat</a>
          </div>

        </div>
        {{-- /card pelanggan --}}
  
        {{-- card produk --}}
        <div class="card" style="width: 20rem;">
          <div class="card-body bg-primary">
            <h5 class="card-title text-light mb-2">Produk</h5>
            <a href="#" class="btn btn-light mt-2">Lihat</a>
          </div>
        </div>
        {{-- /card produk --}}
      </div>
      {{-- /card --}}

      <div class="table-section">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Barang</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>