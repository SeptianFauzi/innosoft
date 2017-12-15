<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li class="active">User</li>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa-2x fa-refresh fa"></i></a>
	</ol>
<div class="box box-info">
	<div class="box-header text-center with-border">
		<h2>Data user</h2>
		<p style="text-align:left">
		<a  href="javascript:" class="btn btn-green" onclick="load_Add()">Tambah User</i></a>
		<p>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="user" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Level</th>
						<th>Username</th>
						<th>Nama lenkap</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($record->result() as $r): ?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $r->user_level ?></td>
							<td><?php echo $r->user_username ?></td>
							<td><?php echo $r->user_profil_nama ?></td>
							<td><?php echo $r->user_profil_email ?></td>
							<td>
								<a href="javascript:" class="btn btn-aqua"  onclick="load_detail(<?php echo $r->user_id ?>)"><i style="color:black" class="fa fa-eye"></i></a>
								<a href="javascript:" class="btn btn-orange" onclick="load_update(<?php echo $r->user_id ?>)"><i style="color:black" class="fa fa-edit"></i></a>
								<a href="javascript:" class="btn btn-red" onclick="hapus(<?php echo $r->user_id ?>,'<?php echo $r->user_profil_nama ?>')"><i style="color:black" class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php $no++; endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#user').DataTable();
});

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
	url: "<?php echo base_url();?>user/verifikasipassword/"+id,
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
	function load_Add(){
      $('#contentpage').fadeOut(200);
      $('#contentpage').load('<?php echo base_url(); ?>user/post').fadeIn(200);
	}
	function load_tabel(){
			$('#contentpage').fadeOut(200);
			$('#contentpage').load('<?php echo base_url(); ?>user/view').fadeIn(200);
	}
function load_detail(id){
	$('#contentpage').fadeOut(200);
	$('#contentpage').load('<?php echo base_url(); ?>user/lihat_data_detil/'+id).fadeIn(200);
}
function load_update(id){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>user/edit/'+id).fadeIn(200);
}
</script>
