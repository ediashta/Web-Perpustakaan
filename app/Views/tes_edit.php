<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Blog Saya</title>
</head>

<body>
    <h1>Edit Artikel</h1>

    <form action="../update_process" method="post">

        <label>judul : <input type="text" name="judul" value="<?= $buku['judul'] ?>"></label> <br>
        <label>penulis : <input type="text" name="penulis" value="<?= $buku['penulis'] ?>"></label> <br>
        <label>kategori : <input type="text" name="kategori" value="<?= $buku['kategori'] ?>"></label> <br>
        <label>stock : <input type="text" name="stock" value="<?= $buku['stock'] ?>"></label> <br>
        <input type="hidden" name="id" value="<?= $buku['id_buku'] ?>">
        <input type="submit" value="Simpan">
    </form>
</body>


</html>