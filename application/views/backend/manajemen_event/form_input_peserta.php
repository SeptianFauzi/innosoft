<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Input Peserta</h3>
	</div>
	<div class="box-body">
		<?php
		echo form_open_multipart('manajemen_event/peserta_event_tambah','class="form-horizontal"');
		?>
		<div class="box-body">
			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Nama Peserta</label>
					<div class="col-sm-6">
						<select class="form-control" name="user_id">
							<option value="0">Pilih Peserta</option>
							<?php
							foreach ($user_id as $ddn) {
								echo "<option value='$ddn->user_id'>$ddn->user_profil_nama</option>";
							}?>
						</select>
					</div>
			</div>
			
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right" name="submit">Submit Event</button>
		</div>
	</form>
	</div>
</div>