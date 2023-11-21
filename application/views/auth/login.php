<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets/') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets/') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('assets/') ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets/') ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form class="user" method="POST" action="<?= base_url('auth'); ?>">
            <h1>Login Form</h1>
            <?= $this->session->flashdata('message'); ?>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('email'); ?>" type="email" name="email"
                placeholder="Masukkan Email Anda" />
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('nama'); ?>" type="password"
                name="password" placeholder="Masukkan Password" />
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <div class="form-check align-items-center">
                <input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me"
                  name="remember-me" checked>
                <label class="form-check-label text-small" for="customControlInline">Ingat
                  Saya</label>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary fs-5">Login</button>
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
            <h1>Create Account</h1>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('nama'); ?>" type="text" name="nama"
                placeholder="Masukkan Nama Anda" />
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('email'); ?>" type="email" name="email"
                placeholder="Masukkan Email Anda" />
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('password1'); ?>" type="password"
                name="password1" placeholder="Masukkan Password" />
              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <input class="form-control form-control-lg" value="<?= set_value('password2'); ?>" type="password"
                name="password2" placeholder="Ulangi Password" />
              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div>
              <button type="submit" class="btn btn-primary fs-5">Submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>