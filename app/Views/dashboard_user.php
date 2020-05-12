<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Hello, <?= session()->get('username') ?>, sebagai user</h1>

    <a href="<?= base_url('/auth/logout') ?>">logout</a>

    <?php foreach ($buku as $item_buku) : ?>
        <h3><?= esc($item_buku['judul']); ?></h3>
    <?php endforeach ?>
</body>

</html>