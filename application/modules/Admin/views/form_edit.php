<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li><a href="javascript:" onclick="load_tabel()">Admin</a></li>
		<li class="active">Ubah Admin</li>
		<a href="javascript:" onclick="load_update(<?php echo $record['user_id']; ?>)"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa fa-arrow-left fa-2x"></i></a>
	</ol>
<div class="box box-warning">
	<div class="box-header text-center with-border">
		<h2> Ubah Admin</h2>
	</div>
	<div class="box-body">
<form class="form-horizontal" id="formubah" enctype="multipart/form-data"  method="post">
		<input type="hidden" name="user_id" value="<?php echo $record['user_id']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="user_username" class="col-sm-2 control-label">Username *</label>
				<div class="col-sm-6">
					<input data-validetta="required,maxLength[32]" data-vd-message-maxLength="Maksimum 32 karakter" data-vd-message-required="wajib di isi" type="text" name="user_username" class="form-control" value="<?php echo $record['user_username']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="user_pass" class="col-sm-2 control-label">Password *</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[32]" data-vd-message-maxLength="Maksimum 32 karakter" type="password" name="user_pass" class="form-control" value="" placeholder="Kosongkan Bila Password tidak berubah">
				</div>
			</div>

			<div class="form-group">
				<label for="user_level" class="col-sm-2 control-label">Level *</label>
				<div class="col-sm-6">
					<select  class="form-control" data-validetta="required" data-vd-message-required="wajib di isi" name="user_level">
						<option value="">- Pilih Level user - </option>
						<option value="admin">Admin</option>
						<option value="pengguna">Pengguna</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_nama" class="col-sm-2 control-label">Nama *</label>
				<div class="col-sm-6">
					<input data-validetta="required,maxLength[64]" data-vd-message-maxLength="Maksimum 64 karakter" data-vd-message-required="wajib di isi" type="text" name="user_profil_nama" class="form-control" value="<?php echo $record['user_profil_nama']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_lahir" class="col-sm-2 control-label">Lahir</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[10]" data-vd-message-maxLength="Maksimum 10 karakter" id="datepicker" type="text" name="user_profil_lahir" class="form-control" value="<?php echo $record['user_profil_lahir']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_notelp" class="col-sm-2 control-label">No. Telp</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[12],minLength[12],number" data-vd-message-number="Hanya Boleh di isi angka" data-vd-message-maxLength="Di isi 12 Digit Angka" data-vd-message-minLength="Di isi 12 Digit Angka" type="text" name="user_profil_notelp" class="form-control" value="<?php echo $record['user_profil_notelp']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_email" class="col-sm-2 control-label">Email *</label>
				<div class="col-sm-6">
					<input data-validetta="email,required" data-vd-message-required="wajib di isi" data-vd-message-email="format email salah" type="email" name="user_profil_email" class="form-control" value="<?php echo $record['user_profil_email'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[100]" data-vd-message-maxLength="Maksimum 100 karakter" type="text" name="user_profil_pekerjaan" class="form-control" value="<?php echo $record['user_profil_pekerjaan'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_instansi" class="col-sm-2 control-label">Instansi</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[100]" data-vd-message-maxLength="Maksimum 100 karakter" type="text" name="user_profil_instansi" class="form-control" value="<?php echo $record['user_profil_instansi'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-6">
					<input data-validetta="maxLength[200]" data-vd-message-maxLength="Maksimum 200 karakter" type="text" name="user_profil_alamat" class="form-control" value="<?php echo $record['user_profil_alamat'] ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_foto" class="col-sm-2 control-label">Foto</label>
				<div class="row">
					<div class="col-xs-3">
						<input type="file" name="user_profil_foto" class="form-control">
					</div>
					<div class="col-xs-4">
						<img src="<?php echo base_url(); ?>foto_user/<?php echo $record['user_profil_foto']; ?>" width="50%">
					</div>
				</div>
			</div>

			<input type="hidden" name="user_profil_foto_lama" value="<?php echo $record['user_profil_foto']; ?>">

			<div class="form-group">
				<label for="user_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-6">
					<select class="form-control" name="user_status">
						<option value="pasif">pasif</option>
						<option value="aktif">Aktif</option>
					</select>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-orange pull-right" onclick="update(<?php echo $record['user_id']; ?>)" name="submit"> Simpan </button>
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
function load_tabel(){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>admin/view').fadeIn(200);
}
function load_update(id){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>admin/edit/'+id).fadeIn(200);
}
function update(id){
$('#formubah').validetta({
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
        url: "<?php echo base_url();?>admin/edit/"+id,
        type: "POST",
        data: new FormData(this.form),
        processData: false,
        contentType : false,
        success : function(){
          swal({
						title : "Data Berhasil Disimpan",
						text : "Silahkan Tekan Tombol OK",
						type :  "success",
						allowOutsideClick: false
					}).then(function(){
            load_tabel();
          });
        },
        error : function(){
            swal({
							title : "Data Gagal Disimpan",
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
}
</script>
