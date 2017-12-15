<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lihat Data Event</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('manajemen_event/lihat_data_detil','class="form-horizontal"');
		?>
		<input type="hidden" name="id_events" value="<?php echo $record['id_events']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="id_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['id_status']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="judul_events" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['judul_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="id_kategori_kegiatan" class="col-sm-2 control-label">Kegiatan</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['desc_kategori_kegiatan']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="id_kategori_dev" class="col-sm-2 control-label">Dev</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['desc_kategori_dev']; ?></label>
				</div>
			</div>
			
			<!-- <div class="form-group">
				<label for="teknologi" class="col-sm-2 control-label">Teknologi</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['xxx']; ?></label>
				</div>
			</div -->
			
			<div class="form-group">
				<label for="id_pemateri" class="col-sm-2 control-label">Pemateri</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['nama_pemateri']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="waktu_events" class="col-sm-2 control-label">Waktu</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['waktu_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="kuota" class="col-sm-2 control-label">Kuota / Maksimal Kuota</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['kuota_events']; ?> / <?php echo $record['kuota_max_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="lokasi_events" class="col-sm-2 control-label">Lokasi</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['lokasi_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="software_events" class="col-sm-2 control-label">Software</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['software_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="desc_events" class="col-sm-2 control-label">Deskripsi</label>
				<div class="col-sm-6">
					<textarea class="form-control" ><?php echo $record['desc_events']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="grade_events" class="col-sm-2 control-label">Grade</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['grade_events']; ?></label>
				</div>
			</div>

			<div class="form-group">
				<label for="img_poster_events" class="col-sm-2 control-label">Gambar</label>
				<div class="col-sm-6">
					<img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['img_poster_events']; ?>" width="50%">
				</div>
			</div>
			
			<div class="form-group">
				<label for="id_materi_events" class="col-sm-2 control-label">Link Materi</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['id_materi_events']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="peserta" class="col-sm-2 control-label">Peserta</label>
				<div class="col-sm-6">
					<!-- <label class="form-control" > <?php echo $record['jumlah']; ?> (belum keluar jumlahnya)</label> -->
					<label class="form-control"><a href="<?php echo base_url(); ?>manajemen_event/peserta_event_tambah/<?php echo $record['id_events']; ?>"></i> Lihat Peserta</a></label>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<?php
			$ids = $this->uri->segment(3);
			echo "
			".anchor('manajemen_event/edit/'.$ids,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			".anchor('manajemen_event/'.$ids,'<i> </i>', array('title' => 'Edit','class' => 'btn bg-white pull-right'))."
			".anchor('manajemen_event/','<i>Kembali</i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			"
			?>
		</div>
	</form>
</div>
</div>