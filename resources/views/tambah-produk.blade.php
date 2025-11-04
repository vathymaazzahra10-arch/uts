<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background-color: #f8f9fa;
      padding: 10px 20px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Sidebar Offcanvas */
    .offcanvas-header {
      border-bottom: 1px solid #ddd;
    }

    .offcanvas-body a {
      display: block;
      color: #212529;
      text-decoration: none;
      padding: 8px 0;
      font-weight: 500;
    }

    .offcanvas-body a:hover {
      color: #0d6efd;
      text-decoration: underline;
    }

    /* Form Container */
    .container-form {
      width: 80%;
      margin: 40px auto;
    }

    h1 {
      font-weight: 700;
      font-size: 40px;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: 500;
    }

    /* Button */
    .btn-submit {
      background-color: #198754;
      color: white;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 500;
    }

    .btn-submit:hover {
      background-color: #157347;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">UTS Laravel</span>
      <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="sidebar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Sidebar Offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarLabel">UTS Laravel</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="/">Home</a>
      <a href="/produk">Produk</a>

      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Form Tambah Produk -->
  <div class="container-form">
    <h1>Form Tambah Produk</h1>
    <form action="/produk/simpan" method="POST">
      @csrf
      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Kode Produk</label>
          <input type="text" name="kode" class="form-control" placeholder="Input Kode Produk" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Nama Produk</label>
          <input type="text" name="nama" class="form-control" placeholder="Input Nama Produk" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Jenis Produk</label>
          <select name="jenis" class="form-select" required>
            <option value="">Pilih Produk</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Pakaian">Pakaian</option>
            <option value="Makanan">Makanan</option>
            <option value="Alat tulis">Alat tulis</option>
            <option value="Lainnya">Lainnya</option>
          </select>
        </div>
      </div>

      <!-- Harga dan Tombol Simpan sejajar 50%-50% -->
      <div class="row mb-3 align-items-end">
        <div class="col-md-6">
          <label class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Input Harga" required>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn-submit mt-2">Simpan</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>