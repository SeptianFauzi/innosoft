<div class="box box-info">
	<div class="box-header with-border ">
		<h3 class="box-title">Manajemen Artikel Link</h3>
		<small>
			<?php
			echo anchor('link/post','Tambah Artikel Link','class="btn bg-aqua"');
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
						<th>Isi Ringkas</th>
						<th>Terbit</th>
						<th>Status</th>
						<th>Semat</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->artikel_judul</td>
						<td>$r->artikel_isi_ringkas</td>
						<td>$r->artikel_terbit</td>
						<td>$r->artikel_status</td>
						<td>$r->artikel_semat</td>

						<td>".anchor('link/lihat_data_detil/'.$r->artikel_id,'<i class="fa fa-eye"></i>', array('title' => 'Lihat  detail', 'class' => 'btn btn-success'))." ".anchor('link/edit/'.$r->artikel_id,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua'))."  ".anchor('link/hapus/'.$r->artikel_id,'<i class="fa fa-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."
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
