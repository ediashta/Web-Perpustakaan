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
                                        <h1 class="h1 text-gray-900 mb-4 font-weight-bold">Daftar Buku</h1>
                                        <p>Anda sedang meminjam buku x, harap kembalikan terlebih dahulu sebelum meminjam buku lain</p>
                                    </div>
                                    <br>
                                    <div class="container">
                                        <table class="table">
                                            <tr class="font-weight-bold bg-dark text-light">
                                                <th>No </th>
                                                <th>Judul </th>
                                                <th>Kategori </th>
                                                <th>Pengarang</th>
                                                <th>Stok</th>
                                                <th colspan="2">&nbsp</th>
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
                                                    <td>
                                                        <a class="btn btn-success" href=#>+</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger" href=#>-</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </table>
                                    </div>
                                    </d>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

</body>

</html>