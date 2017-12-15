<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lihat Peminjaman</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('pinjam/lihat_data_detil','class="form-horizontal"');
		?>
		<input type="hidden" name="pinjam_id" value="<?php echo $record['pinjam_id']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="pinjam_judul" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['pinjam_judul']; ?></label>
				</div>
			</div>

			<div class="form-group">
				<label for="pinjam_jenis_kegiatan" class="col-sm-2 control-label">Jenis kegiatan</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['pinjam_jenis_kegiatan']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pinjam_deskripsi_kegiatan" class="col-sm-2 control-label">Deskripsi Kegiatan</label>
				<div class="col-sm-6">
					<textarea name="pinjam_deskripsi_kegiatan" class="form-control" required><?php echo $record['pinjam_deskripsi_kegiatan']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pinjam_waktu_mulai" class="col-sm-2 control-label">Waktu Mulai</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['pinjam_waktu_mulai']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pinjam_waktu_selesai" class="col-sm-2 control-label">Waktu Selesai</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['pinjam_waktu_selesai']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Peminjam</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['user_profil_nama']; ?></label>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<?php
			$ids = $this->uri->segment(3);
			echo "
			".anchor('pinjam/edit/'.$ids,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			".anchor('pinjam/'.$ids,'<i> </i>', array('title' => 'Edit','class' => 'btn bg-white pull-right'))."
			".anchor('pinjam/','<i>Kembali</i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			"
			?>
		</div>
	</form>
</div>
</div>