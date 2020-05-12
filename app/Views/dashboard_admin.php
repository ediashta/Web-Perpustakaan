<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Hello, <?= session()->get('username') ?>, sebagai admin</h1>

    <!-- logout -->
    <a href="<?= base_url('/auth/logout') ?>">logout</a>

    <!-- tambah -->
    <a href="<?= base_url('/buku/tambah') ?>">tambah</a>



    <!-- data buku -->
    <?php foreach ($buku as $item_buku) : ?>
        <h3><?= esc($item_buku['judul']); ?></h3>
        <a href="<?= base_url('/buku/delete/'.$item_buku['id_buku']) ?>">hapus</a>
        <a href="<?= base_url('/buku/update/'.$item_buku['id_buku']) ?>">edit</a>
    <?php endforeach ?>

</body>

</html>