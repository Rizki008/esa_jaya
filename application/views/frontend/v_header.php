<body class="animsition">
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Esa Jaya
					</div>

					<div class="right-top-bar flex-w h-full">
						<?php if ($this->session->userdata('nama') == "") { ?>
							<a href="<?= base_url('pelanggan/login') ?>" class="flex-c-m trans-04 p-lr-25">
								lOGIN/REGISTER
							</a>
						<?php } else { ?>
							<a href="<?= base_url('pesanan_saya') ?>" class="flex-c-m trans-04 p-lr-25">
								PESANAN SAYA
							</a>
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								<?= $this->session->userdata('nama'); ?>
							</a>
							<a href="<?= base_url('pelanggan/logout') ?>" class="flex-c-m trans-04 p-lr-25">
								LOGOUT
							</a>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="<?= base_url() ?>" class="logo">
						<img src="<?= base_url() ?>template/images/icons/esa-jaya.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= base_url() ?>">Home</a>
							</li>

							<li>
								<a href="#">Kategori</a>
								<?php $kategori = $this->m_home->kategori_produk(); ?>
								<?php foreach ($kategori as $key => $value) { ?>
									<ul class="sub-menu">
										<li><a href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
									</ul>
								<?php } ?>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<?php $keranjang = $this->cart->contents();
					$jml_item = 0;
					foreach ($keranjang as $key => $value) {
						$jml_item = $jml_item + $value['qty'];
					} ?>
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?= $jml_item ?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>