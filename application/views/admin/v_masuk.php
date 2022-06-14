<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Masuk Admin</title>

  <style media="screen">
  /* @import url(https://fonts.googleapis.com/css?family=Roboto:300); */

  .login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 20px;
  }
  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #327A6D;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #1E554B;
  }
  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }
  .form .message a {
    color: #4CAF50;
    text-decoration: none;
  }
  .form .register-form {
    display: none;
  }
  /* .container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
  } */
  /* .container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
margin: 50px auto;
text-align: center;
}
.container .info h1 {
margin: 0 0 15px;
padding: 0;
font-size: 36px;
font-weight: 300;
color: #1a1a1a;
}
.container .info span {
color: #4d4d4d;
font-size: 12px;
}
.container .info span a {
color: #000000;
text-decoration: none;
}
.container .info span .fa {
color: #EF3B3A;
} */
body {
  background: #FFFFFF;
  background: -webkit-linear-gradient(right, #FFFFFF, #2A9E89);
  background: -moz-linear-gradient(right, #FFFFFF, #2A9E89);
  background: -o-linear-gradient(right, #FFFFFF, #2A9E89);
  background: linear-gradient(to left, #FFFFFF, #2A9E89);
  font-family: "Roboto", sans-serif;
  /* -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; */
}
.alert-danger{
  color: red;
  margin-bottom: 10px;
}
</style>
</head>
<body>
  <section id="get-started" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="login-page">
        <div class="form">
          <h2>Selamat Datang, Admin!</h2><br>
          <?php echo form_open_multipart(base_url("admin/akun/masuk"),array('class' => 'form-horizontal')); ?>
          <?php echo $this->session->flashdata('error'); ?>
          <input value="123456" type="text" placeholder="NIK" name="nik" required/>
          <?=form_error('nik'); ?>
          <input value="webdesa" type="password" placeholder="Kata Sandi" name="pass" required/>
          <?=form_error('pass'); ?>
          <button name="masuk">masuk</button>
          <label class="message">Pergi Ke Website <a href="<?=base_url("/")?>">Desa Topidi</a></label>
          <?php form_close(); ?>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  // $('.message a').click(function(){
  //   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
  // });
  </script>
</body>
</html>
