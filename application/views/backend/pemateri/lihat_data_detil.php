<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lihat Pemateri</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('pemateri/lihat_data_detil','class="form-horizontal"');
		?>
		<input type="hidden" name="id_pemateri" value="<?php echo $record['id_pemateri']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="nama_pemateri" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['nama_pemateri']; ?></label>
				</div>
			</div>

			<div class="form-group">
				<label for="telp_pemateri" class="col-sm-2 control-label">Telepon</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['telp_pemateri']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="email_pemateri" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<label class="form-control"><?php echo $record['email_pemateri']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="profil_pemateri" class="col-sm-2 control-label">Profil</label>
				<div class="col-sm-6">
					<textarea type="text" name="profil_pemateri" class="form-control" required><?php echo $record['profil_pemateri'];?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="user_profil_foto" class="col-sm-2 control-label">Foto</label>
				<div class="col-sm-6">
					<img src="<?php echo base_url(); ?>foto_user/<?php echo $record['img_pemateri']; ?>" width="50%">
				</div>
			</div>

		</div>
		<div class="box-footer">
			<?php
			$ids = $this->uri->segment(3);
			echo "
			".anchor('pemateri/edit/'.$ids,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			".anchor('pemateri/'.$ids,'<i> </i>', array('title' => 'Edit','class' => 'btn bg-white pull-right'))."
			".anchor('pemateri/','<i>Kembali</i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			"
			?>
		</div>
	</form>
</div>
</div>