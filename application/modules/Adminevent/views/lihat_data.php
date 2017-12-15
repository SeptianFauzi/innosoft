<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li class="active">Event</li>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa-2x fa-refresh fa"></i></a>
	</ol>
<div class="box box-info">
	<div class="box-header with-border text-center ">
    <h2>Manajemen Event</h>
		<p style="text-align:left">
		<a  href="javascript:" class="btn btn-green" onclick="load_Add()">Tambah Event</i></a>
		<p>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="event" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Status</th>
						<th>Judul</th>
						<th>Katagori Kegiatan</th>
						<th>Waktu</th>
						<th>Kuota</th>
						<th>Maksimal Kuota</th>
						<th>Grade</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>

<?php  $no = 1; foreach ($record->result() as $r): ?>
<tr>
  <td><?php echo $no ?></td>
  <td><?php echo $r->id_status ?></td>
  <td><?php echo $r->judul_events?></td>
  <td><?php echo $r->desc_kategori_kegiatan ?></td>
  <td><?php echo $r->waktu_events?></td>
  <td><?php echo $r->kuota_events?></td>
  <td><?php echo $r->kuota_max_events?></td>
  <td><?php echo $r->grade_events?></td>
  <td>
    <a href="javascript:" class="btn btn-aqua"  onclick="load_detail(<?php echo $r->id_events ?>)"><i style="color:black" class="fa fa-eye"></i></a>
    <a href="javascript:" class="btn btn-orange" onclick="load_update(<?php echo $r->id_events ?>)"><i style="color:black" class="fa fa-edit"></i></a>
    <a href="javascript:" class="btn btn-red" onclick="hapus(<?php echo $r->id_events ?>,'<?php echo $r->judul_events ?>')"><i style="color:black" class="fa fa-trash"></i></a>
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
	$('#event').DataTable();
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
	url: "<?php echo base_url();?>Adminevent/hapus/"+id,
	type: "POST",
	success : function(){
		swal({
			title : "Event Berhasil Dihapus",
			text : "Silahkan Tekan Tombol OK",
			type : "success",
			allowOutsideClick : false})
		.then(function(){
			load_tabel();
		});
	},
	error : function(){
			swal({
				title : "Event Gagal Dihapus",
				text : "Silahkan Tekan Tombol OK",
				type : "error",
				allowOutsideClick : false});
	}
});
});
}
	function load_Add(){
      $('#contentpage').fadeOut(200);
      $('#contentpage').load('<?php echo base_url(); ?>Adminevent/post').fadeIn(200);
	}
	function load_tabel(){
			$('#contentpage').fadeOut(200);
			$('#contentpage').load('<?php echo base_url(); ?>Adminevent/view').fadeIn(200);
	}
function load_detail(id){
	$('#contentpage').fadeOut(200);
	$('#contentpage').load('<?php echo base_url(); ?>Adminevent/lihat_data_detil/'+id).fadeIn(200);
}
function load_update(id){
		$('#contentpage').fadeOut(200);
		$('#contentpage').load('<?php echo base_url(); ?>Adminevent/edit/'+id).fadeIn(200);
}
</script>
