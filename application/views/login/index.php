<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: rgba(245, 245, 245, 0.8);">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <h1 class="h4 text-gray-900 mb-4 row justify-content-center">Login</h1>
                  <div class="text-center"> 
                    <h1 class="h4 text-gray-900 mb-4">Website Resmi Desa Langensari</h1>
                  </div>
                  
                  <?= $this->session->flashdata('message');?>

                  <form class="user" method="post" action="<?= base_url('login')?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <button type="submit" class="btn btn-info btn-user btn-block">
                      Masuk
                    </button>
                  </form>
                  <form class="user" method="post" action="<?= base_url('desa')?>">
                  <button type="submit" class="btn btn-danger btn-user btn-block">
                      Kembali
                   </button>
                  </form> 
                  <hr>
                  <div class="text-center">
                    <font size=2 color="black">Copyright &copy; Desa Langensari <?= date('Y')?></font>
                  <!--<div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa kata sandi?</a>
                  </div>-->                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
