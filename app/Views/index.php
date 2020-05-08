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
                                        <h1 class="h1 text-gray-900 mb-4 font-weight-bold">Selamat Datang</h1>
                                    </div>
                                    <div class="container">
                                        <p>Username</p>
                                        <p>Role</p>
                                    </div>
                                    <div class="container">
                                        <a class="menu" href="<?= base_url('listt') ?>">Daftar Buku<a>
                                    </div>
                                    <div class="container">
                                        <a class="menu" href=<?= base_url('detailpeminjaman') ?>>Detail Peminjaman<a>
                                    </div>
                                    <div class="container">
                                        <a class="menu text-danger" href="index.php">Logout<a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

</body>

</html>