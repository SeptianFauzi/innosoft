<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Pemateri</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('pemateri/edit','class="form-horizontal"');
		?>
		<input type="hidden" name="id_pemateri" value="<?php echo $record['id_pemateri']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="nama_pemateri" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" name="nama_pemateri" class="form-control" value="<?php echo $record['nama_pemateri']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="telp_pemateri" class="col-sm-2 control-label">Telepon</label>
				<div class="col-sm-6">
					<input type="text" name="telp_pemateri" class="form-control" value="<?php echo $record['telp_pemateri'];?>">
				</div>
			</div>

			<div class="form-group">
				<label for="email_pemateri" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input type="email" name="email_pemateri" class="form-control" value="<?php echo $record['email_pemateri'];?>">
				</div>
			</div>

			<div class="form-group">
				<label for="profil_pemateri" class="col-sm-2 control-label">Profil</label>
				<div class="col-sm-6">
					<textarea type="text" name="profil_pemateri" class="form-control" required><?php echo $record['profil_pemateri'];?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="img_pemateri" class="col-sm-2 control-label">Foto</label>
				<div class="col-sm-6">
					<input type="file" name="img_pemateri" class="form-control">
					<img src="<?php echo base_url(); ?>foto_user/<?php echo $record['img_pemateri']; ?>" width="50%">
				</div>
			</div>

		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
		</div>
	</form>
</div>
</div>