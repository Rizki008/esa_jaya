<div class="page-heading">
	<h1 class="page-title"><?= $title ?></h1>
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
								<th>Biaya Pengiriman</th>
								<th>Total Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesanan_diproses as $key => $value) { ?>
								<tr>
									<td><?= $value->nama_pelanggan ?></td>
									<td><a href="<?= base_url('admin/detail/' . $value->no_order) ?>"><?= $value->no_order ?></a></td>
									<td><?= $value->tgl_order ?></td>
									<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
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

										<span class="badge badge-primary">Dikemas</span>

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