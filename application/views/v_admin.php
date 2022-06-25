<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
	<div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="ibox bg-success color-white widget-stat">
				<div class="ibox-body">
					<h2 class="m-b-5 font-strong"><?= $total_pesanan ?></h2>
					<div class="m-b-5">TOTAL PESANAN</div><i class="ti-shopping-cart widget-stat-icon"></i>
					<div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="ibox bg-info color-white widget-stat">
				<div class="ibox-body">
					<h2 class="m-b-5 font-strong"><?= $total_produk ?></h2>
					<div class="m-b-5">TOTAL PRODUK</div><i class="ti-bar-chart widget-stat-icon"></i>
					<div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="ibox bg-warning color-white widget-stat">
				<div class="ibox-body">
					<h2 class="m-b-5 font-strong"><?= $total_transaksi ?></h2>
					<div class="m-b-5">TOTAL TRANSAKSI</div><i class="fa fa-money widget-stat-icon"></i>
					<div><i class="fa fa-level-up m-r-5"></i><small>22% higher</small></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="ibox bg-danger color-white widget-stat">
				<div class="ibox-body">
					<h2 class="m-b-5 font-strong"><?= $total_pelanggan ?></h2>
					<div class="m-b-5">TOTAL PELANGGAN</div><i class="ti-user widget-stat-icon"></i>
					<div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div>
				</div>
			</div>
		</div>
	</div>
	<?php
	foreach ($grafik as $key => $value) {
		$nama_produk[] = $value->nama_produk;
		$qty[] = $value->qty;
	}
	?>
	<canvas id="grafik" height="100"></canvas>
	<script>
		var ctx = document.getElementById('grafik');
		var grafik = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?= json_encode($nama_produk) ?>,
				datasets: [{
					label: 'Grafik Penjualan',
					data: <?= json_encode($qty) ?>,
					backgroundColor: [
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 0.80)',
						'rgba(54, 162, 235, 0.80)',
						'rgba(255, 206, 86, 0.80)',
						'rgba(75, 192, 192, 0.80)',
						'rgba(153, 102, 255, 0.80)',
						'rgba(255, 159, 64, 0.80)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)',
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(201, 76, 76, 0.3)',
						'rgba(201, 77, 77, 1)',
						'rgba(0, 140, 162, 1)',
						'rgba(158, 109, 8, 1)',
						'rgba(201, 76, 76, 0.8)',
						'rgba(0, 129, 212, 1)',
						'rgba(201, 77, 201, 1)',
						'rgba(255, 207, 207, 1)',
						'rgba(201, 77, 77, 1)',
						'rgba(128, 98, 98, 1)',
						'rgba(0, 0, 0, 1)',
						'rgba(128, 128, 128, 1)'
					],
					fill: false,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>

</div>
<!-- END PAGE CONTENT-->
