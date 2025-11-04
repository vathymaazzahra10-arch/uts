<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Form Tambah Produk</h2>
    <form>
      <div class="mb-3">
        <label for="kode" class="form-label">Kode Produk</label>
        <input type="text" id="kode" class="form-control" placeholder="Masukkan kode produk">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" id="nama" class="form-control" placeholder="Masukkan nama produk">
      </div>
      <div class="mb-3">
        <label for="jenis" class="form-label">Jenis Produk</label>
        <input type="text" id="jenis" class="form-control" placeholder="Masukkan jenis produk">
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" id="harga" class="form-control" placeholder="Masukkan harga">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="/produk" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>

</html>