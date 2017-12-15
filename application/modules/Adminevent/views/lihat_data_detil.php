<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li>		<a href="javascript:" onclick="load_tabel()">Event</a></li>
		<li class="active">Lihat Event</li>
		<a href="javascript:" onclick="load_detail(<?php echo $record['id_events'] ?>)"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa-2x fa-arrow-left fa"></i></a>
	</ol>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel text-center">
			<div class="panel-body" style="padding:0px;margin:0px">
				<h2>Event Detail</h2>
			</div>
		</div>
	</div>
		<div class="col-lg-5">
			<div class="panel text-center">
			  <div class="panel-body">
						<p><img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['img_poster_events'] ?>" class="img-responsive" alt=""></p>
			  </div>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="panel">
				<div class="panel-body">
						<h2 class="text-center"><?php echo $record['judul_events']; ?></h2>
						<table width="100%" class="text-justify">
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Status</h4></td>
								<td width="65%"><h4>: <?php echo $record['id_status']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Kategori Kegiatan</h4></td>
								<td width="65%"><h4>: <?php echo $record['desc_kategori_kegiatan']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Pemateri</h4></td>
								<td width="65%"><h4>: <?php echo $record['nama_pemateri']; ?> <a class="btn btn-xs btn-aqua">Detail</a></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Waktu Events</h4></td>
								<td width="65%"><h4>: <?php echo $record['waktu_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Development</h4></td>
								<td width="65%"><h4>: <?php echo $record['desc_kategori_dev']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Lokasi</h4></td>
								<td width="65%"><h4>: <?php echo $record['lokasi_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Kuota/Max Kuota</h4></td>
								<td width="65%"><h4>: <?php echo $record['kuota_events']; ?>/<?php echo $record['kuota_max_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Software</h4></td>
								<td width="65%"><h4>: <?php echo $record['software_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Grade</h4></td>
								<td width="65%"><h4>: <?php echo $record['grade_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Deskripsi</h4></td>
								<td width="65%"><h4>: <?php echo $record['desc_events']; ?></h4></td>
							</tr>
							<tr>
								<td style="vertical-align:top" width="35%"><h4>Link Materi</h4></td>
								<td width="65%">: </td>
							</tr>
						</table>
						<a href="javascript:" class="btn btn-orange btn-block" onclick="load_update('<?php echo $record['id_events'] ?>')"><i class="fa fa-edit"></i> Ubah</a>
				</div>
			</div>
		</div>
		<div class="col-lg-12" id="pagetable">
<div class="panel panel-default">
  <div class="panel-body">
		<h2 class="text-center">Daftar Peserta</h2>
		<a style="margin:10px" href="javascript:" onclick="load_peserta()" class="btn btn-green">Tambah Peserta</a>
		<table id="peserta" class="table table-bordered" width="100%">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Status Pembayaran</th>
		<th>Kehadiran</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php $no = 1; foreach ($records as $row): ?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $row['user_profil_nama'] ?></td>
		<td><?php echo $row['user_profil_email'] ?></td>
		<td><?php echo $row['status_pembayaran'] ?></td>
		<td><?php echo $row['status_kehadiran'] ?></td>
		<td>
			<?php if ($row['status_pembayaran'] == 'Belum Lunas'): ?>
				<a class="btn btn-info" href="javascript:" onclick="updatepembayaran(<?php echo $row['id_events_manifest'] ?>,<?php echo $row['id_events'] ?>,'Lunas')">Lunas</a>
			<?php endif; ?>
			<?php if ($row['status_pembayaran'] != 'Belum Lunas'): ?>
				<a class="btn btn-info" href="javascript:" onclick="updatepembayaran(<?php echo $row['id_events_manifest'] ?>,<?php echo $row['id_events'] ?>,'Belum Lunas')">Belum Lunas</a>
			<?php endif; ?>
			<?php if ($row['status_kehadiran'] == 'Tidak Hadir'): ?>
				<a class="btn btn-info" href="javascript:" onclick="updatekehadiran(<?php echo $row['id_events_manifest'] ?>,<?php echo $row['id_events'] ?>,'Hadir')">Hadir</a>
			<?php endif; ?>
			<?php if ($row['status_kehadiran'] != 'Tidak Hadir'): ?>
				<a class="btn btn-aqua" href="javascript:" onclick="updatekehadiran(<?php echo $row['id_events_manifest'] ?>,<?php echo $row['id_events'] ?>,'Tidak Hadir')">Tidak Hadir</a>
			<?php endif; ?>
			<a class="btn btn-red" onclick="hapus_peserta(<?php echo $row['user_id']?>,'<?php echo $row['user_profil_nama'] ?>',<?php echo $row['id_events'] ?>)" href="javascript:">Hapus</a>
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
	$('#peserta').DataTable();
});

function updatepembayaran(id,id_events,status){
	var Lunas = status;
	$.ajax({
		url: "<?php echo base_url();?>Adminevent/peserta_bayar/"+id,
		type: "POST",
		data : { bayar : Lunas },
		success : function(){
			swal({
				title : "Status Pembayaran Berhasil Diubah",
				text : "",
				type :  "success",
				allowOutsideClick: false,
				showConfirmButton : false,
				timer : 1000
			});
				load_page(id_events);
		},
		error : function(){
				swal({
					title : "Status Gagal Dirubah Disimpan",
					text : "",
					type :  "error",
				allowOutsideClick: false,
				showConfirmButton : false,
				timer : 1000
			});
		}
	});
}
function updatekehadiran(id,id_events,status){
	var Hadir = status;
	$.ajax({
		url: "<?php echo base_url();?>Adminevent/peserta_hadir/"+id,
		type: "POST",
		data : { hadir : Hadir },
		success : function(){
			swal({
				title : "Status Kehadiran Berhasil Diubah",
				text : "",
				type :  "success",
				allowOutsideClick: false,
				showConfirmButton : false,
				timer : 1000
			});
				load_page(id_events);
		},
		error : function(){
				swal({
					title : "Status Kehadiran Gagal Dirubah",
					text : "",
					type :  "error",
					allowOutsideClick: false,
					showConfirmButton : false,
					timer : 1000
			});
		}
	});
}
function load_page(id){
	$('#contentpage').fadeOut(10);
	$('#contentpage').load('<?php echo base_url(); ?>Adminevent/lihat_data_detil/'+id).fadeIn(10);
}
function load_peserta(){
	swal({
		title : " ",
		text : " ",
		showConfirmButton : false,
		html : '<a href="javascript:" onclick="load_peserta_baru()" class="btn btn-success btn-lg">Baru</a>' + '  &nbsp;    ' +  '<a href="javascript:" onclick="load_peserta_sudahda()" class="btn btn-default btn-lg">Sudah Ada</a>'
	});
}
function load_peserta_sudahda(){

}
function hapus_peserta(id,nama,id_events){
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
	url: "<?php echo base_url();?>Adminevent/peserta_hapus/"+id,
	type: "POST",
	success : function(){
		swal({
			title : "Peserta Berhasil Dihapus",
			text : "Silahkan Tekan Tombol OK",
			type : "success",
			allowOutsideClick : false})
		.then(function(){
			load_page(id_events);
		});
	},
	error : function(){
			swal({
				title : "Peserta Gagal Dihapus",
				text : "Silahkan Tekan Tombol OK",
				type : "error",
				allowOutsideClick : false});
	}
});
});
}
</script>
</div>
