<!-- START PAGE CONTENT-->
<div class="page-heading">
	<h1 class="page-title"><?= $title ?></h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html"><i class="la la-home font-20"></i></a>
		</li>
		<li class="breadcrumb-item"><?= $title ?></li>
	</ol>
</div>
<div class="page-content fade-in-up">
	<div class="row">
		<div class="col-xl-6">
			<div class="ibox">
				<div class="ibox-head">
					<div class="ibox-title">Provinsi</div>
					<button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Provinsi</button>
				</div>
				<div class="ibox-body">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Provinsi.</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($provinsi as $key => $value) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->provinsi ?></td>
									<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_provinsi ?>">Update</button>
										<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_provinsi ?>">Delete</button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="ibox">
				<div class="ibox-head">
					<div class="ibox-title">Kabupaten</div>
					<button type="button" data-toggle="modal" data-target="#kabupaten" class="btn btn-primary">Add Kabupaten</button>
				</div>
				<div class="ibox-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Provinsi.</th>
								<th>Nama Kabupaten.</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($kabupaten as $key => $value) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->provinsi ?></td>
									<td><?= $value->kabupaten ?></td>
									<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updatekabupaten<?= $value->id_kabupaten ?>">Update</button>
										<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletekabupaten<?= $value->id_kabupaten ?>">Delete</button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6">
			<div class="ibox">
				<div class="ibox-head">
					<div class="ibox-title">Kecamatan</div>
					<button data-toggle="modal" data-target="#addkecamatan" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
						Tambah Data Kecamatan</button>
				</div>
				<div class="ibox-body">
					<?php
					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
						echo $this->session->flashdata('pesan');
						echo '</h5></div>';
					}
					?>
					<table class="table">
						<thead class="thead-default">
							<tr>
								<th>No</th>
								<th>Lokasi</th>
								<th>Ongkir</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($lokasi as $key => $value) { ?>
								<tr class="text-center">
									<td><?= $no++; ?></td>
									<td><?= $value->nama_lokasi ?></td>
									<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
									<td>
										<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editkecamatan<?= $value->id_lokasi ?>"><i class="fa fa-edit"></i></button>
										<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletekecamatan<?= $value->id_lokasi ?>"><i class="fa fa-trash"></i></button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.modal Add -->
<div class="modal fade" id="add">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Provisni</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('lokasi/add');
				?>

				<div class="form-group">
					<label>Nama Provinsi</label>
					<input type="text" name="provinsi" class="form-control" placeholder="Nama Provinsi" required>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>


<!-- /.modal Edit -->
<?php foreach ($provinsi as $key => $value) { ?>
	<div class="modal fade" id="update<?= $value->id_provinsi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit provinsi</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('lokasi/update/' . $value->id_provinsi);
					?>

					<div class="form-group">
						<label>Nama provinsi</label>
						<input type="text" name="provinsi" value="<?= $value->provinsi ?>" class="form-control" placeholder="Nama Provinsi" required>
					</div>

				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>


<!-- /.modal Delete -->
<?php foreach ($provinsi as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_provinsi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->nama_provinsi ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('lokasi/delete/' . $value->id_provinsi) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<!-- /.modal Add -->
<div class="modal fade" id="kabupaten">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah kabupaten</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('lokasi/add_kabupaten');
				?>

				<div class="form-group">
					<label>Nama Provinsi</label>
					<select name="id_provinsi" id="id_provinsi" class="form-control" required>
						<option>---Pilih Provinsi---</option>
						<?php foreach ($provinsi as $key => $value) { ?>
							<option value="<?= $value->id_provinsi ?>"><?= $value->provinsi ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama kabupaten</label>
					<input type="text" name="kabupaten" class="form-control" placeholder="Nama kabupaten" required>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>


<!-- /.modal Edit -->
<?php foreach ($kabupaten as $key => $value) { ?>
	<div class="modal fade" id="updatekabupaten<?= $value->id_kabupaten ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit kabupaten</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('lokasi/update_kabupaten/' . $value->id_kabupaten);
					?>

					<div class="form-group">
						<select name="id_provinsi" id="id_provinsi" class="form-control">
							<option value="<?= $value->id_provinsi ?>"><?= $value->provinsi ?></option>
							<?php
							foreach ($provinsi as $key => $item) { ?>
								<option value="<?= $item->id_provinsi ?>"><?= $item->provinsi ?></option>
							<?php }
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama kabupaten</label>
						<input type="text" name="kabupaten" value="<?= $value->kabupaten ?>" class="form-control" placeholder="Nama Kabupaten" required>
					</div>

				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>


<!-- /.modal Delete -->
<?php foreach ($kabupaten as $key => $value) { ?>
	<div class="modal fade" id="deletekabupaten<?= $value->id_kabupaten ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->kabupaten ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('lokasi/delete_kabupaten/' . $value->id_kabupaten) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<!-- //ongkir -->
<!-- /.modal Add -->
<div class="modal fade" id="addkecamatan">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Kecamatan dan ongkir</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				echo form_open('lokasi/add_ongkir');
				?>

				<div class="form-group">
					<label>Nama lokasi</label>
					<input type="text" name="nama_lokasi" class="form-control" placeholder="Nama lokasi" required>
				</div>
				<div class="form-group">
					<label>Ongkir</label>
					<input type="text" name="ongkir" class="form-control" placeholder="Biaya Ongkir" required>
				</div>

			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.modal Edit -->
<?php foreach ($lokasi as $key => $value) { ?>
	<div class="modal fade" id="editkecamatan<?= $value->id_lokasi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit lokasi</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('lokasi/edit/' . $value->id_lokasi);
					?>

					<div class="form-group">
						<label>Nama lokasi</label>
						<input type="text" name="nama_lokasi" value="<?= $value->nama_lokasi ?>" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Biaya Ongkir</label>
						<input type="text" name="ongkir" value="<?= $value->ongkir ?>" class="form-control" placeholder="Ongkir" required>
					</div>

				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>

<!-- /.modal Delete -->
<?php foreach ($lokasi as $key => $value) { ?>
	<div class="modal fade" id="deletekecamatan<?= $value->id_lokasi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->nama_lokasi ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('lokasi/delete/' . $value->id_lokasi) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>
