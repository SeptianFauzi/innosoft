<div class="box box-info">
	<div class="box-header with-border ">
		<h3 class="box-title">Manajemen Pemateri</h3>
		<small>
			<?php
			echo anchor('pemateri/post','Tambah Pemateri','class="btn bg-aqua"');
			?>
		</small>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="user" width="100%">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Nama</th>
						<th>Telepon</th>
						<th>Email</th>
						<th>Profil</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($record->result() as $r) {
						echo "<tr>
						<td>$no</td>
						<td>$r->nama_pemateri</td>
						<td>$r->telp_pemateri</td>
						<td>$r->email_pemateri</td>
						<td>$r->profil_pemateri</td>

						<td>".anchor('pemateri/lihat_data_detil/'.$r->id_pemateri,'<i class="fa fa-eye"></i>', array('title' => 'Lihat  detail', 'class' => 'btn btn-success'))." ".anchor('pemateri/edit/'.$r->id_pemateri,'<i class="fa fa-pencil"></i>', array('title' => 'Edit','class' => 'btn bg-aqua'))."  ".anchor('pemateri/hapus/'.$r->id_pemateri,'<i class="fa fa-trash"></i>', array('title' => 'Hapus', 'class' => 'btn btn-danger', 'onclick'=>"return confirm('Apakah anda yakin ingin menghapus data ini?')"))."
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
