<div class="box box-info">
	<div class="box-header with-border ">
		<h3 class="box-title">Manajemen Peminjaman</h3>
		<small>
			<?php
			echo anchor('pinjam/post','Tambah Peminjaman','class="btn bg-aqua"');
			?>
		</small>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="user" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Judul</th>
						<th>Jenis Kegiatan</th>
						<th>Waktu Mulai</th>
						<th>Waktu Selesai</th>
						<th>Peminjam</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->pinjam_judul</td>
						<td>$r->pinjam_jenis_kegiatan</td>
						<td>$r->pinjam_waktu_mulai</td>
						<td>$r->pinjam_waktu_selesai</td>
						<td>$r->user_id</td>

						<td>".anchor('pinjam/lihat_data_detil/'.$r->pinjam_id,'<i class="fa fa-eye"></i>', array('title' => 'Lihat  detail', 'class' => 'btn btn-success'))." ".anchor('pinjam/edit/'.$r->pinjam_id,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua'))."  ".anchor('pinjam/hapus/'.$r->pinjam_id,'<i class="fa fa-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."
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
