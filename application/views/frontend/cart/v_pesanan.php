<!-- ****** Top Discount Area Start ****** -->
<section class="top-discount-area d-md-flex align-items-center">
	<!-- Single Discount Area -->
	<div class="single-discount-area">
		<h5>Free Shipping &amp; Returns</h5>
		<h6><a href="#">BUY NOW</a></h6>
	</div>
	<!-- Single Discount Area -->
	<div class="single-discount-area">
		<h5>20% Discount for all dresses</h5>
		<h6>USE CODE: Colorlib</h6>
	</div>
	<!-- Single Discount Area -->
	<div class="single-discount-area">
		<h5>20% Discount for students</h5>
		<h6>USE CODE: Colorlib</h6>
	</div>
</section>
<!-- ****** Top Discount Area End ****** -->

<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_100 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="cart-table clearfix">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>No Order</th>
								<th>Tanggal Order</th>
								<th>Total Harga</th>
								<th>Ongkir</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($belum_bayar as $key => $value) { ?>
								<tr>
									<td><?= $value->no_order ?></td>
									<td><?= $value->tgl_order ?></td>
									<td>Rp. <?= number_format($value->total_bayar, 0) ?>
										<?php if ($value->status_bayar == 0) { ?>
											<span class="badge badge-warning">Belum Bayar</span>
										<?php } elseif ($value->status_bayar == 1) { ?>
											<span class="badge badge-success">Sudah Bayar/Menunggu Konfirmasi</span>
										<?php }  ?>
									</td>
									<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
									<td><?php if ($value->status_bayar == 0) { ?>
											<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-sm karl-checkout-btn">Pembayaran</a>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
							<?php foreach ($diproses as $key => $value) { ?>
								<tr>
									<td><?= $value->no_order ?></td>
									<td><?= $value->tgl_order ?></td>
									<td>Rp. <?= number_format($value->total_bayar, 0) ?>
										<?php if ($value->status_order == 1) { ?>
											<span class="badge badge-success">Sedang Di proses</span>
										<?php } elseif ($value->status_order == 2) { ?>
											<span class="badge badge-success">Sedang Dikirim</span>
										<?php } elseif ($value->status_order == 3) { ?>
											<span class="badge badge-success">Sudah Selesai</span>
										<?php }  ?>
									</td>
									<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
								</tr>
							<?php } ?>
							<?php foreach ($dikirim as $key => $value) { ?>
								<tr>
									<td><?= $value->no_order ?></td>
									<td><?= $value->tgl_order ?></td>
									<td>Rp. <?= number_format($value->total_bayar, 0) ?>
										<?php if ($value->status_order == 1) { ?>
											<span class="badge badge-success">Sedang Di proses</span>
										<?php } elseif ($value->status_order == 2) { ?>
											<span class="badge badge-success">Sedang Dikirim</span>
										<?php } elseif ($value->status_order == 3) { ?>
											<span class="badge badge-success">Sudah Selesai</span>
										<?php }  ?>
									</td>
									<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
									<td><?= $value->status_order == 2 ?><br>
										<button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>">Diterima</button>
									</td>
								</tr>
							<?php } ?>
							<?php foreach ($selesai as $key => $value) { ?>
								<tr>
									<td><a href="<?= base_url('pesanan_saya/detail_selesai/' . $value->no_order) ?>"><?= $value->no_order ?></td>
									<td><?= $value->tgl_order ?></td>
									<td>Rp. <?= number_format($value->total_bayar, 0) ?>
										<?php if ($value->status_order == 1) { ?>
											<span class="badge badge-success">Sedang Di proses</span>
										<?php } elseif ($value->status_order == 2) { ?>
											<span class="badge badge-success">Sedang Dikirim</span>
										<?php } elseif ($value->status_order == 3) { ?>
											<span class="badge badge-success">Sudah Selesai</span>
										<?php }  ?>
									</td>
									<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4">
			</div>
		</div>
	</div>
	<!-- ****** Cart Area End ****** -->

	<?php foreach ($dikirim as $key => $value) { ?>
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
						<a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	<?php } ?>
