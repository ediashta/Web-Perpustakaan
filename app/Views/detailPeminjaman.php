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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="container">
                                        <h1 class="h1 text-gray-900 mb-4 font-weight-bold">Detail Peminjaman Buku</h1>
                                    </div>
                                    <div class="container">
                                        <p><?= session()->get('username') ?></p>
                                    </div>
                                    <div class="container">
                                        <table class="table">
                                            <tr class="font-weight-bold bg-dark text-light">
                                                <th>Judul </th>
                                                <th>Kategori </th>
                                                <th>Pengarang</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>&nbsp</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?= $pinjam['username'] ?>
                                                </td>
                                                <td>
                                                    <?= $pinjam['id_buku'] ?>
                                                </td>
                                                <td>
                                                    <?= $buku['penulis'] ?>
                                                </td>
                                                <td>
                                                    <?= $pinjam['tanggalSewa'] ?>
                                                </td>
                                                <td align="middle"><a class="btn btn-success" href=<?= base_url('peminjaman/pinjam_process/') ?>>Kembalikan</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

</body>

</html>