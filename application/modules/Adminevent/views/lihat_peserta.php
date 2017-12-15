<div class="box box-info">
	<div class="box-header with-border ">
		<h3 class="box-title">Data Peserta</h3>
	</div>

	 <div class="box-body">
		<?php
		echo form_open_multipart('manajemen_event/peserta_event_tambah','class="form-horizontal"');
		?>
		<div class="box-body">
		<input type="hidden" name="id_events" value="<?php echo $uri; ?>">
			<div class="form-group">
				<label for="user_id" class="col-sm-2 control-label">Nama Peserta</label>
					<div class="col-sm-6">
						<select class="form-control" name="user_id">
							<option>Pilih Peserta</option>
							<?php
							foreach ($record->result() as $ddn) {
								echo "<option value='$ddn->user_id'>$ddn->user_profil_nama</option>";
							}?>
						</select>
					</div>
					<button type="submit" class="btn btn-info" name="submit">Tambah</button>
			</div>
			
		</div>
	</form>
	</div> 
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="event" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama Peserta</th>
						<th>Kehadiran</th>
						<th>Pembayaran</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record2->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->user_profil_nama</td>
						<td>$r->status_kehadiran</td>
						<td>$r->status_pembayaran</td>

						<td>
						".anchor('manajemen_event/peserta_hadir/'.$r->id_events,'kehadiran', array('title' => 'hadir/tidak', 'class' => 'btn btn-sm btn-success'))."
						".anchor('manajemen_event/peserta_bayar/'.$r->id_events,'pembayaran', array('title' => 'sudah/belum','class' => 'btn btn-sm bg-aqua'))."
						".anchor('manajemen_event/peserta_hapus/'.$r->id_events_manifest,'Hapus', array('title' => 'Hapus', 'class' => 'btn btn-sm btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus peserta ini?')"))."
						</td>
					</tr>";
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</div>
