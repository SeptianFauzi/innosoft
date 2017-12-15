<div class="container-fluid" id="contentpage"> <!-- contentpage -->
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li><a href="javascript:" onclick="load_tabel()">Event</a></li>
		<li class="active">Edit Event</li>
		<a href="javascript:" onclick="load_update(<?php echo $record['id_events'] ?>)"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa fa-arrow-left fa-2x"></i></a>
	</ol><div class="box box-warning">
		<div class="box-header text-center with-border">
			<h2>Ubah Event</h2>
		</div>
	<div class="box-body">

		<form class="form-horizontal" enctype="multipart/form-data" id="formevent" method="post"> 	<!-- Form Input -->
				<div class="box-body">
					<input type="hidden" name="id_events" value="<?php echo $record['id_events'] ?>">
					<div class="form-group">
						<label for="judul_events" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-6">
							<input type="text" data-validetta="required" data-vd-message-required="wajib di isi" class="form-control" name="judul_events" value="<?php echo $record['judul_events'] ?>" />
						</div>
					</div>

					<div class="form-group">
						<label for="id_status" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-6">
							<select class="form-control" name="id_status" data-validetta="required" data-vd-message-required="wajib di isi">
								<option value="">-Pilih Status Event-</option>
								<option value="Pendaftaran">Pendaftaran</option>
								<option value="Sedang Berlangsung">Sedang Berlangsung</option>
								<option value="Event Selesai">Event Selesai</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="id_kategori_kegiatan" class="col-sm-2 control-label">Kegiatan</label>
							<div class="col-sm-6">
								<select class="form-control" data-validetta="required" data-vd-message-required="wajib di isi" name="id_kategori_kegiatan">
									<option value="">Pilih Kegiatan</option>
									<?php foreach ($desc_kategori_kegiatan as $row): ?>
										<option value="<?php echo $row->id_kategori_kegiatan ?>"><?php echo $row->desc_kategori_kegiatan ?></option>
									<?php endforeach; ?>
								</select>
							</div>
					</div>

					<div class="form-group">
						<label for="id_kategori_dev" class="col-sm-2 control-label">Development</label>
						<div class="col-sm-6">
							<select class="form-control" data-validetta="required" data-vd-message-required="wajib di isi" name="id_kategori_dev">
								<option value="">Pilih Development</option>
								<?php foreach ($desc_kategori_dev as $row): ?>
									<option value="<?php echo $row->id_kategori_dev ?>"><?php echo $row->desc_kategori_dev ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="id_pemateri" class="col-sm-2 control-label">Pemateri</label>
						<div class="col-sm-6">
							<select class="form-control" data-validetta="required" data-vd-message-required="wajib di isi" name="id_pemateri">
								<option value="">Pilih Pemateri</option>
								<?php foreach ($nama_pemateri as $row): ?>
									<option value="<?php echo $row->id_pemateri ?>"><?php echo $row->nama_pemateri ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="waktu_events" class="col-sm-2 control-label">Waktu</label>
						<div class="col-sm-2">
								<input type="text" data-validetta="required" data-vd-message-required="wajib di isi" id="datetimepicker" class="form-control" value="<?php echo $record['waktu_events'] ?>" name="waktu_events"/>
						</div>
					</div>

					<div class="form-group">
						<label for="kuota_events" class="col-sm-2 control-label">Kuota</label>
						<div class="col-sm-1">
							<div class="input-group">
								<input type="text" value="<?php echo $record['kuota_events'] ?>" data-validetta="required,maxLength[4],number" data-vd-message-number="Wajib Di Isi Angka" data-vd-message-maxLength="Maksimum 4 Digit Angka" data-vd-message-required="wajib di isi" class="form-control" name="kuota_events">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="kuota_max_events" class="col-sm-2 control-label">Maksimal Kuota</label>
						<div class="col-sm-1">
							<input type="text" value="<?php echo $record['kuota_max_events'] ?>" data-validetta="required,maxLength[4],number" data-vd-message-number="Wajib Di Isi Angka" data-vd-message-maxLength="Maksimum 4 Digit Angka" data-vd-message-required="wajib di isi" class="form-control" name="kuota_max_events">
						</div>
					</div>

					<div class="form-group">
						<label for="lokasi_events" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-6">
							<textarea type="text" data-validetta="required" data-vd-message-required="wajib di isi" name="lokasi_events" class="form-control"><?php echo $record['lokasi_events'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="software_events" class="col-sm-2 control-label">Software</label>
						<div class="col-sm-6">
							<textarea data-validetta="required" data-vd-message-required="wajib di isi" type="text" class="form-control" name="software_events"><?php echo $record['software_events'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="desc_events" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-6">
							<textarea data-validetta="required" data-vd-message-required="wajib di isi" type="text" class="form-control" cols="80" rows="6" name="desc_events"> <?php echo $record['desc_events'] ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="grade_events" class="col-sm-2 control-label">Grade</label>
						<div class="col-sm-6">
							<select data-validetta="required" data-vd-message-required="wajib di isi" class="form-control" name="grade_events">
								<option value="">-Pilih Level Materi</option>
								<option value="Beginner">Beginner</option>
								<option value="Intermediate">Intermediate</option>
								<option value="Expert">Expert</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="img_poster_events" class="col-sm-2 control-label"> Upload Poster</label>
						<div class="col-sm-4">
							<input type="file" name="img_poster_events" id="poster" class="form-control">
							<input type="hidden" name="foto_poster_lama" value="<?php echo $record['img_poster_events'] ?>">
						</div>
						<div class="col-sm-2">
							<img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['img_poster_events'] ?>" class="img-responsive" alt="">
						</div>
						<small class="form-text text-muted">Maksimum Ukuran Gambar 3 MB</small>
					</div>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-orange pull-right" onclick="update(<?php echo $record['id_events'] ?>)" name="submit">Simpan</button>
				</div>
			</form> <!--  End Form Input -->
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datetimepicker').datetimepicker({
			format:'YYYY-MM-DD HH:mm:00'
		});
	});
	function update(id){
	$('#formevent').validetta({
	  realTime : true,
	  onValid : function(event){
	    var x = 0;
	    $('#poster').change(function(event) {
	      var x = foto.files[0].size/1024/1024;
	    });
	    event.preventDefault();
	    if(x > 3)
	    {
	      swal('Hati-Hati!', 'Ukuran Gambar yang di upload lebih dari 3 MB', 'warning');
	    }
	    else{
	      $.ajax({
	        url: "<?php echo base_url();?>Adminevent/edit/"+id,
	        type: "POST",
	        data: new FormData(this.form),
	        processData: false,
	        contentType : false,
	        success : function(){
	          swal({
							title : "Event Berhasil Disimpan",
							text : "Silahkan Tekan Tombol OK",
							type :  "success",
							allowOutsideClick: false
						}).then(function(){
	            load_tabel();
	          });
	        },
	        error : function(){
	            swal({
								title : "Event Gagal Disimpan",
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
</div>
