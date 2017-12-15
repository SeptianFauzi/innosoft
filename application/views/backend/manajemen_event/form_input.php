<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Input Data Event</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('manajemen_event/post','class="form-horizontal"');
		?>
		<div class="box-body">
			<div class="form-group">
				<label for="id_status" class="col-sm-2 control-label">Status</label>
				<div class="col-sm-6">
					<?php
						$status = array('- Pilih status','Pendaftaran' => 'Pendaftaran', 'Sedang Berlangsung' => 'Sedang Berlangsung', 'Event Selesai' => 'Event Selesai');
					echo form_dropdown('id_status',$status,'','class="form-control"'); 
					?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="judul_events" class="col-sm-2 control-label">Judul</label>
				<div class="col-sm-6">
					<input type='text' class="form-control" name="judul_events" />
				</div>
			</div>
			
			<div class="form-group">
				<label for="id_kategori_kegiatan" class="col-sm-2 control-label">Kegiatan</label>
					<div class="col-sm-6">
						<select class="form-control" name="id_kategori_kegiatan">
							<option value="0">Pilih Kegiatan</option>
							<?php
							foreach ($desc_kategori_kegiatan as $ddn) {
								echo "<option value='$ddn->id_kategori_kegiatan'>$ddn->desc_kategori_kegiatan</option>";
							}?>
						</select>
					</div>
			</div>
			
			<div class="form-group">
				<label for="id_kategori_dev" class="col-sm-2 control-label">Development</label>
				<div class="col-sm-6">
					<select class="form-control" name="id_kategori_dev">
						<option value="0">Pilih Development</option>
						<?php
						foreach ($desc_kategori_dev as $ddn) {
							echo "<option value='$ddn->id_kategori_dev'>$ddn->desc_kategori_dev</option>";
						}?>
					</select>
				</div>
			</div>
			
			<!-- <div class="form-group">
				<label for="teknologi" class="col-sm-2 control-label">Teknologi</label>
				<div class="col-sm-6">
					<label class="form-control" ></label>
				</div>
			</div -->
			
			<div class="form-group">
				<label for="id_pemateri" class="col-sm-2 control-label">Pemateri</label>
				<div class="col-sm-6">
					<select class="form-control" name="id_pemateri">
						<option value="0">Pilih Pemateri</option>
							<?php
							foreach ($nama_pemateri as $ddn) {
								echo "<option value='$ddn->id_pemateri'>$ddn->nama_pemateri</option>";
							}?>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="waktu_events" class="col-sm-2 control-label">Waktu</label>
				<div class="col-sm-6">
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" name="waktu_events" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label for="kuota_events" class="col-sm-2 control-label">Kuota</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="kuota_events">
				</div>
			</div>
			
			<div class="form-group">
				<label for="kuota_max_events" class="col-sm-2 control-label">Maksimal Kuota</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="kuota_max_events">
				</div>
			</div>
			
			<div class="form-group">
				<label for="lokasi_events" class="col-sm-2 control-label">Lokasi</label>
				<div class="col-sm-6">
					<textarea type="text" name="lokasi_events" class="form-control" required></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="software_events" class="col-sm-2 control-label">Software</label>
				<div class="col-sm-6">
					<textarea type="text" class="form-control" name="software_events"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="desc_events" class="col-sm-2 control-label">Deskripsi</label>
				<div class="col-sm-6">
					<textarea type="text" class="form-control" name="desc_events"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="grade_events" class="col-sm-2 control-label">Grade</label>
				<div class="col-sm-6">
					<?php
						$status = array('- Pilih Grade','Beginner' => 'Beginner', 'Intermediate' => 'Intermediate', 'Expert' => 'Expert');
					echo form_dropdown('grade_events',$status,'','class="form-control"'); 
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="img_poster_events" class="col-sm-2 control-label"> Upload Gambar</label>
				<div class="col-sm-6">
					<input type="file" name="img_poster_events" class="form-control">
				</div>
			</div>
			
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right" name="submit">Submit Event</button>
		</div>
	</form>
</div>
</div>