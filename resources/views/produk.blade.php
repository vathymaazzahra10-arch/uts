<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    /* Navbar utama */
    .navbar {
      background-color: #f8f9fa;
      padding: 10px 20px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Sidebar (offcanvas Bootstrap) */
    .offcanvas-header {
      border-bottom: 1px solid #ddd;
    }

    .offcanvas-body a {
      display: block;
      color: #212529;
      text-decoration: none;
      padding: 8px 0;
    }

    .offcanvas-body a:hover {
      color: #0d6efd;
      text-decoration: underline;
    }

    /* Header Halaman */
    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 80%;
      margin: 30px auto 10px auto;
    }

    .header-section h1 {
      font-weight: 700;
      font-size: 42px;
      margin: 0;
    }

    /* Table Styling */
    .table-container {
      width: 80%;
      margin: 20px auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #cfe2ff;
    }

    th,
    td {
      border: 1px solid #b6d4fe;
      padding: 10px;
      text-align: center;
      vertical-align: middle;
    }

    th {
      font-weight: 600;
    }

    tr:hover {
      background-color: #b6d4fe;
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
      <a href="/produk" class="fw-semibold">Produk</a>

      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Header -->
  <div class="header-section">
    <h1>Halaman Produk</h1>
    <a href="/produk/tambah" class="btn btn-primary">Tambah Produk</a>
  </div>

  <!-- Table -->
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        @php
          $jumlah = count($produk);
          $i = 0;
        @endphp

        @while ($i < $jumlah)
          <tr>
            <td>{{ $produk[$i]['kode'] }}</td>
            <td>{{ $produk[$i]['nama'] }}</td>
            <td>{{ $produk[$i]['jenis'] }}</td>
            <td>{{ $produk[$i]['harga'] }}</td>
          </tr>
          @php $i++; @endphp
        @endwhile
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>