<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Peminjaman</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('pinjam/edit','class="form-horizontal"');
		?>
		<div class="box-body">
			<input type="text" name="pinjam_id" value="<?php echo $record['pinjam_id']; ?>">
			<div class="form-group">
				<label for="pinjam_judul" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<input type="text" name="pinjam_judul" class="form-control" value="<?php echo $record['pinjam_judul']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pinjam_jenis_kegiatan" class="col-sm-2 control-label">Jenis Kegiatan</label>
				<div class="col-sm-6">
					<input type="text" name="pinjam_jenis_kegiatan" class="form-control" value="<?php echo $record['pinjam_jenis_kegiatan']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="pinjam_deskripsi_kegiatan" class="col-sm-2 control-label">Deksripsi Kegiatan</label>
				<div class="col-sm-6">
					<textarea name="pinjam_deskripsi_kegiatan" class="form-control" required><?php echo $record['pinjam_deskripsi_kegiatan']; ?></textarea>
				</div>
			</div>

			<div class="form-group">
			<label for="tanggal_sewa" class="col-sm-2 control-label">Waktu Mulai</label>
				<div class="col-sm-4">
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" name="pinjam_waktu_mulai" value="<?php echo $record['pinjam_waktu_mulai']; ?>" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>

			<div class="form-group">
			<label for="tanggal_sewa" class="col-sm-2 control-label">Waktu Selesai</label>
				<div class="col-sm-4">
					<div class='input-group date' id='datetimepicker2'>
						<input type='text' class="form-control" name="pinjam_waktu_selesai" value="<?php echo $record['pinjam_waktu_selesai']; ?>" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Peminjam</label>
				<div class="col-sm-6">
					<select class="form-control" name="user_id">
						<option value="<?php echo $record['user_id']; ?>"><?php echo $record['user_profil_nama']; ?></option>
						<option>- Pilih Peminjam -</option>
						<?php
						foreach ($user_profil_nama as $upn) {
							echo "<option value='$upn->user_id'>$upn->user_profil_nama</option>";
						}?>
					</select>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right" name="submit">Simpan Peminjaman</button>
		</div>
	</form>
</div>
</div>
