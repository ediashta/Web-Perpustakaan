<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>

<body>
    <?php foreach ($buku as $item_buku) : ?>
        <h3><?= esc($item_buku['judul']); ?></h3>
        <h3><?= esc($item_buku['penulis']); ?></h3>
    <?php endforeach ?>
</body>

</html>