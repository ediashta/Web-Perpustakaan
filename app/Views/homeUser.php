<!DOCTYPE html>
<html lang="en">

<body class="bg-gradient-primary">
    <br><br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-lg-12 ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="col-lg-12">
                            <div class="p-4">
                                <div class="container">
                                    <h1 class="h1 text-gray-900 mb-4 font-weight-bold">Selamat Datang, <?= session()->get('username') ?></h1>
                                </div>
                                <!-- Detail Peminjaman -->

                                <div class="container">
                                    <a class="btn btn-success" href="peminjaman">Detail Peminjaman</a>
                                    <hr><br>
                                </div>

                                <!-- Daftar Buku -->
                                <div class="container">
                                    <h2 class="h3 text-gray-900 mb-4 font-weight-bold">Daftar Buku Tersedia</h2>
                                </div>

                                <div class="container pre-scrollable">
                                    <table class="table">
                                        <tr class="font-weight-bold bg-dark text-light">
                                            <th>No </th>
                                            <th>Judul </th>
                                            <th>Kategori </th>
                                            <th>Pengarang</th>
                                            <th>Stok</th>
                                            <th>&nbsp</th>
                                        </tr>
                                        <?php $no = 1;
                                        foreach ($buku as $item_buku) : ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $no;
                                                    $no++; ?>
                                                </td>
                                                <td>
                                                    <?= esc($item_buku['judul']); ?>
                                                </td>
                                                <td>
                                                    <?= esc($item_buku['kategori']); ?>
                                                </td>
                                                <td>
                                                    <?= esc($item_buku['penulis']); ?>
                                                </td>
                                                <td>
                                                    <?= esc($item_buku['stock']); ?>
                                                </td>
                                                <td align="middle">
                                                    <form action="<?= base_url('peminjaman/pinjam_process/') ?>" method='post'>
                                                        <input type="hidden" name="stock" value="<?= $item_buku['stock']; ?>">
                                                        <input type="hidden" name="id" value="<?= $item_buku['id_buku']; ?>">
                                                        <input type="submit" class="btn btn-primary" value="Pinjam">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

</body>

</html>