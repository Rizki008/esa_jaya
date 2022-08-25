<div class="page-heading">
	<h1 class="page-title">Basic Tables</h1>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html"><i class="la la-home font-20"></i></a>
		</li>
		<li class="breadcrumb-item">Basic Tables</li>
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
								<th>Alamat</th>
								<th>Biaya Pengiriman</th>
								<th>Nama Pengirim</th>
								<th>Total Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesanan_dikirim as $key => $value) { ?>
								<tr>
									<td><?= $value->nama ?></td>
									<td><?= $value->no_order ?></td>
									<td><?= $value->tgl_order ?></td>
									<td><?= $value->alamat ?></td>
									<td><b>Ongkir : Rp. <?= number_format($value->ongkir, 0) ?></b><br>
									</td>
									<td><?= $value->nama_pengirim ?></td>
									<td>
										<b>
											<?php if ($value->total_bayar >= 1000000) { ?>
												<p>Potongan 10%</p>
												Rp. <?= number_format($value->total_bayar - (10 / 100 * $value->total_bayar), 0) ?>
											<?php } else { ?>
												Rp. <?= number_format($value->total_bayar, 0) ?>
											<?php } ?>
										</b>
										<!-- <b>Rp. <?= number_format($value->total_bayar, 0) ?></b> -->
										<br>
										<span class="badge badge-success">Dikirim</span>
									</td>
									<td>
										<!-- <?= $value->status_order == 2 ?><br> -->
										<!-- <button class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#cek<?= $value->id_transaksi ?>">Bukti Bayar</button> -->

										<button class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>">Diterima</button>
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

<?php foreach ($pesanan_dikirim as $key => $value) { ?>
	<div class="modal fade" id="diterima<?= $value->id_transaksi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Pesanan Diterima</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Apakah Anda Yakin Pesanan Sudah Diterima?
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('transaksi/diterima/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>