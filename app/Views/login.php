<!DOCTYPE html>
<html lang="en">

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h1 text-gray-900 mb-4"><span class="font-weight-bold"> Project Akhir</span><br>Pemrograman Web</h1>
                    <h1 class="h4 text-gray-900 mb-4">Kelompok 4</h1>
                  </div>
                  <form action="login/login" Method="post" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <input type="hidden" name="status" value="">
                    <button type="submit" class="btn btn-primary btn-user btn-block text-light">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

</html>