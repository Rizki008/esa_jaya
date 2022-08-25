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
					<div class="ibox-title">Simple Bar Chart</div>
				</div>
				<div class="ibox-body">
					<?php
					foreach ($grafik as $key => $value) {
						$nama[] = $value->nama;
						$total[] = $value->total;
					}
					?>
					<canvas id="grafik" height="100"></canvas>
					<script>
						var ctx = document.getElementById('grafik');
						var grafik = new Chart(ctx, {
							type: 'bar',
							data: {
								labels: <?= json_encode($nama) ?>,
								datasets: [{
									label: 'Grafik Penjualan',
									data: <?= json_encode($total) ?>,
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
			</div>
		</div>
	</div>
</div>