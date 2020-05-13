<!DOCTYPE html>
<html lang="en">

<body class="bg-gradient-primary">
    <br><br>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-lg-8 ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4"><span class="font-weight-bold"> Tambah Buku</h1>
                                        <h3 class="h3 text-gray-900 mb-4"><?= $buku['judul'] ?></h3>
                                    </div>
                                    <form action="../buku/tambah_process" Method="post">
                                        <div class="form-group">
                                            <label> Judul :</label> <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>" placeholder="Judul">
                                            <label> Penulis :</label> <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>" placeholder="penulis">
                                            <label> Kategori : </label><input type="text" class="form-control" id="kategori" name="kategori" value="<?= $buku['kategori'] ?>" placeholder="kategori">
                                            <label> Stock :</label> <input type="text" class="form-control" id="stock" name="stock" value="<?= $buku['stock'] ?>" placeholder="stok">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block text-light">
                                            Submit
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

</body>

</html>

<div class="container">

</div>