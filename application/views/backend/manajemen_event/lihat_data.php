<div class="box box-info">
	<div class="box-header with-border ">
		<h3 class="box-title">Manajemen Event</h3>
		<small>
			<?php
			echo anchor('manajemen_event/post','Tambah Event','class="btn bg-aqua"');
			?>
		</small>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="event" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Status</th>
						<th>Judul</th>
						<th>Katagori Kegiatan</th>
						<th>Waktu</th>
						<th>Kuota</th>
						<th>Maksimal Kuota</th>
						<th>Grade</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->id_status</td>
						<td>$r->judul_events</td>
						<td>$r->desc_kategori_kegiatan</td>
						<td>$r->waktu_events</td>
						<td>$r->kuota_events</td>
						<td>$r->kuota_max_events</td>
						<td>$r->grade_events</td>

						<td>".anchor('manajemen_event/lihat_data_detil/'.$r->id_events,'<i class="fa fa-eye"></i>', array('title' => 'Lihat  detail', 'class' => 'btn btn-success'))." ".anchor('manajemen_event/edit/'.$r->id_events,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua'))."  ".anchor('manajemen_event/hapus/'.$r->id_events,'<i class="fa fa-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."
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
