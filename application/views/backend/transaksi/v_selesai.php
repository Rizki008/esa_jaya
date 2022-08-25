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
								<th>Alamat</th>
								<th>Biaya Pengiriman</th>
								<th>Nama Pengirim</th>
								<th>Total Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesanan_selesai as $key => $value) { ?>
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
										<span class="badge badge-success">Diterima</span>
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