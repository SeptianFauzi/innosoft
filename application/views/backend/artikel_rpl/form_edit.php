<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Artikel RPL</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('artikel_rpl/edit','class="form-horizontal"');
		?>
		<div class="box-body">
			<input type="hidden" name="artikel_id" value="<?php echo $record['artikel_id']; ?>">
			<input type="hidden" name="artikel_katagori" value="<?php echo $record['artikel_katagori']; ?>">

			<div class="form-group">
				<label for="artikel_judul" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<input type="text" name="artikel_judul" class="form-control" required value="<?php echo $record['artikel_judul']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_slug" class="col-sm-2 control-label">Slug</label>
				<div class="col-sm-6">
					<input type="text" name="artikel_slug" class="form-control" placeholder="untuk url ex. judul-artikel-rpl" required value="<?php echo $record['artikel_slug']; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_isi_ringkas" class="col-sm-2 control-label">Isi Ringkas</label>
				<div class="col-sm-6">
					<textarea type="text" name="artikel_isi_ringkas" class="form-control" required><?php echo $record['artikel_isi_ringkas']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_isi" class="col-sm-2 control-label">Isi </label>
				<div class="col-sm-6">
					<textarea type="text" name="artikel_isi" class="form-control" required><?php echo $record['artikel_isi']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_terbit" class="col-sm-2 control-label">Tanggal Terbit</label>
				<div class="col-sm-6">
					<input type="date" name="artikel_terbit" class="form-control" value="<?php echo $record['artikel_terbit']; ?>" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-6">
					<?php
						$status = array('- Pilih status','aktif' => 'aktif', 'pasif' => 'pasif');
					echo form_dropdown('artikel_status',$status,$record['artikel_status'],'class="form-control"'); 
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_gambar" class="col-sm-2 control-label">Gambar</label>
				<div class="col-sm-6">
					<input type="file" name="artikel_gambar" class="form-control">
					<img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['artikel_gambar']; ?>" width="50%">
				</div>
			</div>
			
			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Penulis</label>
				<div class="col-sm-6">
					<select class="form-control" name="user_id">
						<option value="<?php echo $record['user_id']; ?>"><?php echo $record['user_profil_nama']; ?></option>
						<option>- Pilih Penulis -</option>
						<?php
						foreach ($user_profil_nama as $upn) {
							echo "<option value='$upn->user_id'>$upn->user_profil_nama</option>";
						}?>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_semat" class="col-sm-2 control-label">artikel_semat</label>
				<div class="col-sm-6">
					<?php
						$status = array('- Pilih status','ya' => 'ya', 'tidak' => 'tidak');
					echo form_dropdown('artikel_semat',$status,$record['artikel_semat'],'class="form-control"'); 
					?>
				</div>
			</div>
			

		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right" name="submit">Simpan</button>
		</div>
	</form>
</div>
</div>