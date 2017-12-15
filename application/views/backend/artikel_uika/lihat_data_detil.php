<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lihat Artikel UIKA</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('artikel_uika/lihat_data_detil','class="form-horizontal"');
		?>
		<input type="hidden" name="artikel_id" value="<?php echo $record['artikel_id']; ?>">
		<div class="box-body">
			<div class="form-group">
				<label for="artikel_judul" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['artikel_judul']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_slug" class="col-sm-2 control-label">Slug</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['artikel_slug']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_isi_ringkas" class="col-sm-2 control-label">Isi Ringkas</label>
				<div class="col-sm-6">
					<textarea class="form-control" ><?php echo $record['artikel_isi_ringkas']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_isi" class="col-sm-2 control-label">Isi </label>
				<div class="col-sm-6">
					<textarea class="form-control" ><?php echo $record['artikel_isi']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_terbit" class="col-sm-2 control-label">Tanggal Terbit</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['artikel_terbit']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['artikel_status']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_gambar" class="col-sm-2 control-label">Gambar</label>
				<div class="col-sm-6">
					<img src="<?php echo base_url(); ?>foto_artikel/<?php echo $record['artikel_gambar']; ?>" width="50%">
				</div>
			</div>
			
			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Penulis</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['user_profil_nama']; ?></label>
				</div>
			</div>
			
			<div class="form-group">
				<label for="artikel_semat" class="col-sm-2 control-label">artikel_semat</label>
				<div class="col-sm-6">
					<label class="form-control" ><?php echo $record['artikel_semat']; ?></label>
				</div>
			</div>

		</div>
		<div class="box-footer">
			<?php
			$ids = $this->uri->segment(3);
			echo "
			".anchor('artikel_uika/edit/'.$ids,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			".anchor('artikel_uika/lihat_data_detil/'.$ids,'<i> </i>', array('title' => 'Edit','class' => 'btn bg-white pull-right'))."
			".anchor('artikel_uika/','<i>Kembali</i>', array('title' => 'Edit','class' => 'btn bg-aqua pull-right'))."
			"
			?>
		</div>
	</form>
</div>
</div>