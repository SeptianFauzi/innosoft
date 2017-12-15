<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li><a href="javascript:" onclick="load_tabel()">User</a></li>
		<li class="active">Detail User</li>
		<a href="javascript:" onclick="load_detail(<?php echo $record['user_id']; ?>)"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa fa-arrow-left fa-2x"></i></a>
	</ol>
	<div class="row">
<div class="box box-primary">
	<div class="box-header text-center with-border">
		<h2>Detail User</h2>
	</div>
	<div class="box-body">
		<div class="container">
	<div style="padding:10px">
		<div class="col-lg-6 col-md-4 col-sm-6 text-center">
			<img width="50%" height="50%" src="<?php echo base_url(); ?>foto_user/<?php echo $record['user_profil_foto']; ?>" class="img-rounded" alt="Tidak Ada gambar">
			<h2 class="text-blue"><?php echo $record['user_level'] ?> </h2>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h2 class="text-primary"><?php echo $record['user_profil_nama'] ?></h2>
			<p><?php echo $record['user_profil_pekerjaan'] ?></p>
			<hr>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<p>Username</p>
					<p>Alamat</p>
					<p>Email</p>
					<p>No. Telepon</p>
					<p>Instansi</p>
					<p>Status</p>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-4">
					<p><?php echo $record['user_username'] ?></p>
					<p><?php echo $record['user_profil_alamat'] ?></p>
					<p><?php echo $record['user_profil_email'] ?></p>
					<p><?php echo $record['user_profil_notelp'] ?></p>
					<p><?php echo $record['user_profil_instansi'] ?></p>
					<p><?php echo $record['user_status'] ?></p>
				</div>
				<div class="col-lg-10 col-md-10">
					<hr>
					<a href="javascript:" style="display:block" onclick="load_update(<?php echo $record['user_id'] ?>)" class="btn btn-orange"><i class="fa fa-edit"></i> Ubah</a>
					<br>
					<a href="javascript:" style="display:block" onclick="hapus(<?php echo $record['user_id'] ?>,'<?php echo $record['user_profil_nama'] ?>')" class="btn btn-red"><i class="fa fa-trash-o"></i> Hapus</a>
				</div>
			</div>
		</div>
	</div>
		</div>

</div>
<div class="box-footer">
</div>
</div>
</div>
<script type="text/javascript">
function load_update(id){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>user/edit/'+id).fadeIn(200);
}
function hapus(id,nama){
swal({
title : 'Yakin Mau Menghapus?',
text : "Anda Akan Menghapus " + nama,
type : "question",
showCancelButton : true,
confirmButtonText : '<i class="fa fa-trash-o"></i> Hapus',
cancelButtonText : 'Tidak',
confirmButtonColor: '#d33',
allowOutsideClick : false
})
.then(function(){
$.ajax({
	url: "<?php echo base_url();?>user/hapus/"+id,
	type: "POST",
	success : function(){
		swal({
			title : "User Berhasil Dihapus",
			text : "Silahkan Tekan Tombol OK",
			type : "success",
			allowOutsideClick : false})
		.then(function(){
			load_tabel();
		});
	},
	error : function(){
			swal({
				title : "User Gagal Dihapus",
				text : "Silahkan Tekan Tombol OK",
				type : "error",
				allowOutsideClick : false});
	}
});
});
}
</script>
