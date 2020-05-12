<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>

    <form action="<?= base_url('/buku/tambah_process') ?>" method="post">
        <label>judul : <input type="text" name="judul"></label> <br>
        <label>penulis : <input type="text" name="penulis"></label> <br>
        <label>kategori : <input type="text" name="kategori"></label> <br>
        <label>stock : <input type="text" name="stock"></label> <br>
        <input type="submit" value="Simpan">
    </form>
</body>


</html>