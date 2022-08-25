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
		<div class="col-md-12">
			<div class="ibox">
				<div class="ibox-head">
					<div class="ibox-title">Contextual classes</div>
				</div>
				<div class="ibox-body">
					<table class="table table-hover">
						<caption>Optional table caption.</caption>
						<thead>
							<tr>
								<th>Nama Pelanggan</th>
								<th>No Order</th>
								<th>Tanggal Order</th>
								<th>Ongkir</th>
								<th>Total Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesanan as $key => $value) { ?>
								<tr>
									<td><?= $value->nama ?></td>
									<td>
										<?= $value->no_order ?></a>
									</td>
									<td><?= $value->tgl_order ?></td>
									<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
									<td>
										<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>

										<?php if ($value->status_bayar == 0) { ?>
											<span class="badge badge-warning">Belum bayar</span>
										<?php } else { ?>
											<span class="badge badge-success">Sudah bayar</span><br>
											<span class="badge badge-primary">Menunggu Verifikasi</span>
										<?php } ?>
									</td>
									<td>
										<?php if ($value->status_bayar == 1) { ?>
											<button class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#cek<?= $value->id_transaksi ?>">Bukti Bayar</button>
											<a href=" <?= base_url('admin/proses/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Verifikasi</a>
										<?php } ?>

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

<!--Model-->
<?php foreach ($pesanan as $key => $value) { ?>
	<div class="modal fade" id="cek<?= $value->id_transaksi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><?= $value->no_order ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open('admin/batal/' . $value->id_transaksi) ?>
					<table class="table">
						<tr>
							<th>Atas Nama</th>
							<th>:</th>
							<td><?= $value->atas_nama ?></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<th>:</th>
							<td><?= $value->alamat ?></td>
						</tr>
						<tr>
							<th>Nama Bank</th>
							<th>:</th>
							<td><?= $value->nama_bank ?></td>
						</tr>
						<tr>
							<th>No Rekening</th>
							<th>:</th>
							<td><?= $value->no_rek ?></td>
						</tr>
						<tr>
							<th>Total Bayar</th>
							<th>:</th>
							<td>
								<!-- $value->harga - ($value->diskon / 100 * $value->harga) -->
								<?php if ($value->total_bayar >= 1000000) { ?>
									<p>Potongan 10%</p>
									Rp. <?= number_format($value->total_bayar - (10 / 100 * $value->total_bayar), 0) ?>
								<?php } else { ?>
									Rp. <?= number_format($value->total_bayar, 0) ?>
								<?php } ?>

								<!-- <?= number_format($value->total_bayar, 0) ?> -->
							</td>
						</tr>
						<tr>
							<th>Catatan</th>
							<th>:</th>
							<td><input name="catatan" class="form-control" placeholder="Catatan" required></td>
						</tr>
					</table>
					<img class="img-fluid pad" src="<?= base_url('uploads/bukti_bayar/' . $value->bukti_bayar) ?>" alt="">
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Batalkan</button>
				</div>
				<?php echo form_close() ?>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>