<div class="container-fluid" id="contentpage">
	<ol class="breadcrumb" style="padding:15px">
	  <li><a href="#"><i class="fa fa-home"></i></a></li>
	  <li>		<a href="javascript:" onclick="load_tabel()">Event</a></li>
		<li class="active">Tambah Peserta Sudah Ada</li>
		<a href="javascript:" onclick="load_detail(<?php echo $record['id_events'] ?>)"><i class="pull-right fa-2x fa-refresh fa"></i></a>
		<a href="javascript:" onclick="load_tabel()"><i class="pull-right fa-2x fa-arrow-left fa"></i></a>
	</ol>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Input Peserta</h3>
	</div>
	<div class="box-body">
<form enctype="multipart/form-data" class="form-horizontal"  method="post">
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
