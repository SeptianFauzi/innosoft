<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li><a href="javascript:" onclick="load_tabel()">User</a></li>
		<li class="active">Tambah User</li>
		<a href="javascript:" onclick="load_Add()"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa fa-arrow-left fa-2x"></i></a>
	</ol>
<div class="box box-success">
	<div class="box-header text-center with-border">
		<h2>Tambah User</h2>
	</div>
	<div class="box-body">
		<form enctype="multipart/form-data" id="formtambah" type="post" class="form-horizontal">
		<div class="box-body">
			<div class="form-group">
				<label for="user_username" class="col-sm-2 control-label">Username *</label>
				<div class="col-sm-6">
					<input data-validetta="required,maxLength[32]" data-vd-message-maxLength="Maksimum 32 karakter" data-vd-message-required="wajib di isi" type="text" name="user_username" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="user_pass" class="col-sm-2 control-label">Password *</label>
				<div class="col-sm-6">
					<input data-validetta="required,maxLength[32]" data-vd-message-maxLength="Maksimum 32 karakter" data-vd-message-required="wajib di isi" type="password" name="user_pass" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="user_level" class="col-sm-2 control-label">Level *</label>
				<div class="col-sm-6">
					<select class="form-control" data-validetta="required" data-vd-message-required="wajib di isi" name="user_level">
						<option value="">- Pilih Level user - </option>
						<option value="admin">Admin</option>
						<option value="pengguna">Pengguna</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_nama" class="col-sm-2 control-label">Nama *</label>
				<div class="col-sm-6">
					<input type="text" name="user_profil_nama" data-validetta="required,maxLength[64]" data-vd-message-maxLength="Maksimum 64 karakter" data-vd-message-required="wajib di isi" class="form-control"  >
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_lahir" class="col-sm-2 control-label">Lahir</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[10]" data-vd-message-maxLength="Maksimum 10 karakter" id="datepicker" type="text" name="user_profil_lahir" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_notelp" class="col-sm-2 control-label">No. Telp</label>
				<div class="col-sm-6">
					<input data-validetta="minLength[12],maxLength[12],number" data-vd-message-number="Hanya Boleh di isi angka" data-vd-message-maxLength="Di isi 12 digit angka" data-vd-message-minLength="Di isi 12 digit angka" type="text" name="user_profil_notelp" class="form-control"  >
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_email" class="col-sm-2 control-label">Email *</label>
				<div class="col-sm-6">
					<input data-validetta="email,required" data-vd-message-required="wajib di isi" data-vd-message-email="format email salah" type="email" name="user_profil_email" class="form-control"  >
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[100]" data-vd-message-maxLength="Maksimum 100 karakter" type="text" name="user_profil_pekerjaan" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_instansi" class="col-sm-2 control-label">Instansi</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[100]" data-vd-message-maxLength="Maksimum 100 karakter" type="text" name="user_profil_instansi" class="form-control"  >
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-6">
					<textarea data-validetta="maxLength[200]" data-vd-message-maxLength="Maksimum 200 karakter" name="user_profil_alamat" rows="8" class="form-control" cols="80"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="user_profil_foto" class="col-sm-2 control-label">Foto * </label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="user_profil_foto" class="form-control"  >
				</div>
				<small class="form-text text-muted">Maksimum Ukuran Gambar 3 MB</small>
			</div>
			<input type="hidden" name="user_status" value="pasif">
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-green pull-right" name="submit">Tambah <i class="fa fa-paper-plane"></i></button>
		</div>
	</form>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
});

function load_Add(){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>user/post').fadeIn(200);
}
function load_tabel(){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>user/view').fadeIn(200);
}

$('#formtambah').validetta({
  realTime : true,
  onValid : function(event){
    var x = 0;
    $('#foto').change(function(event) {
      var x = foto.files[0].size/1024/1024;
    });
    event.preventDefault();
    if(x > 3)
    {
      swal('Hati-Hati!', 'Ukuran Gambar yang di upload lebih dari 3 MB', 'warning');
    }
    else{
      $.ajax({
        url: "<?php echo base_url();?>user/post",
        type: "POST",
        data: new FormData(this.form),
        processData: false,
        contentType : false,
        success : function(){
          swal({
						title : "User Berhasil Disimpan",
						text : "Silahkan Tekan Tombol OK",
						type :  "success",
						allowOutsideClick: false
					}).then(function(){
            load_tabel();
          });
        },
        error : function(){
            swal({
							title : "User Gagal Disimpan",
							text : "Silahkan Tekan Tombol OK",
							type :  "error",
						allowOutsideClick: false
					});
        }
      });
    }
  },
  onError : function(event){
      swal({
				title : "Oops!",
				text : "Salah Pengisian Form, Silahkan Tekan Tombol OK",
				type :  "error"
			});
  }
});
</script>
