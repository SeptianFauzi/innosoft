<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
      <!-- Vallideta -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vallideta/css/validetta.css">
      <!-- sweetalert2 -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/css/sweetalert2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
      <!-- Jquery js -->
      <script src="<?php echo base_url(); ?>assets/jquery.js"></script>
      <!-- Validetta js -->
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/vallideta/js/validetta.js"></script>
      <!-- sweetalert2 js -->
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/sweetalert/js/sweetalert2.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4" style="margin-top:15%">
            <div class="panel border-blue">
              <div class="panel-heading border-blue" style="background-color:white"><img style="margin:0px 25% 0px 30%" src="<?php echo base_url(); ?>assetsf/img/innodosft.png" alt=""></div>
              <h2 style="padding:5px;margin:5px" class="text-center text-blue">Admin Login</h2>
              <div class="panel-body">
                <form id="formlogin" action="<?php echo base_url() ?>Adminlogin/login" style="padding:0px 30px" class="form-horizontal" method="post">
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon" id="username"><i class="fa fa-user"></i></span>
                        <input data-validetta="required" data-vd-message-required="Wajib Di isi" type="text" name="username" placeholder="Username" aria-describedby="username" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon" id="password"><i class="fa fa-lock"></i></span>
                        <input data-validetta="required" data-vd-message-required="Wajib Di isi" type="password" name="password" placeholder="Password" aria-describedby="password" class="form-control">
                      </div>
                  </div>
              </div>
                  <div style="background-color:white" class="panel-footer border-blue text-right">
                    <div class="form-group" style="margin-right:15px">
                      <button type="submit" name="submit" class="btn text-right btn-blue">Masuk</button>
                    </div>
                  </div>
                </form>
        </div>
          </div>
          <div class="col-lg-4">

          </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function() {
    if ('<?php echo $this->session->flashdata('cek')?>' == 'benar') {
      swal({
          title : 'Oops!',
          text : '<?php echo $this->session->flashdata('error')?>',
          type : 'error'
      });
    }
    else{
      return false;
    }
  });
$('#formlogin').validetta({
  realTime : true,
  onError : function(event){
    swal({
              title : 'Oops!',
              text : "Username atau password Belum di isi " ,
              type : "error",
              allowOutsideClick : false
            });
  }
});
  </script>
</html>
