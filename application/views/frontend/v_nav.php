<div id="wrapper">

	<!-- ****** Header Area Start ****** -->
	<header class="header_area">
		<!-- Top Header Area Start -->
		<div class="top_header_area">
			<div class="container h-100">
				<div class="row h-100 align-items-center justify-content-end">

					<div class="col-12 col-lg-7">
						<div class="top_single_area d-flex align-items-center">
							<!-- Logo Area -->
							<div class="top_logo">
								<a href="#"><img src="<?= base_url('frontend/') ?>img/core-img/logo.png" alt=""></a>
							</div>
							<!-- Cart & Menu Area -->
							<div class="header-cart-menu d-flex align-items-center ml-auto">
								<!-- Cart Area -->
								<?php $keranjang = $this->cart->contents();
								$jml_item = 0;
								foreach ($keranjang as $key => $value) {
									$jml_item = $jml_item + $value['qty'];
								} ?>
								<div class="cart">
									<a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?= $jml_item ?></span> <i class="ti-bag"></i> Your Bag Rp. <?= $this->cart->format_number($this->cart->total()); ?></a>
									<!-- Cart List Area Start -->
									<ul class="cart-list">
										<?php foreach ($keranjang as $key => $value) {
											$produk = $this->m_home->detail_produk($value['id']);
										?>
											<li>
												<a href="#" class="image"><img src="<?= base_url('uploads/produk/' . $produk->gambar) ?>" class="cart-thumb" alt=""></a>
												<div class="cart-item-desc">
													<h6><a href="#"><?= $value['name'] ?></a></h6>
													<p><?= $value['qty'] ?> x - <span class="price">Rp. <?= number_format($value['price'], 0) ?></span></p>
												</div>
												<span class="dropdown-product-remove"><i class="icon-cross"></i></span>
											</li>
										<?php } ?>
										<li class="total">
											<span class="pull-right">Total: Rp. <?= $this->cart->format_number($this->cart->total()); ?></span>
											<a href="<?= base_url('belanja') ?>" class="btn btn-sm btn-cart">Cart</a>
											<a href="<?= base_url('belanja/cekout') ?>" class="btn btn-sm btn-checkout">Checkout</a>
										</li>
									</ul>
								</div>
								<div class="header-right-side-menu ml-15">
									<a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Top Header Area End -->
		<div class="main_header_area">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 d-md-flex justify-content-between">
						<!-- Header Social Area -->
						<div class="header-social-area">
							<a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
						<!-- Menu Area -->
						<div class="main-menu-area">
							<nav class="navbar navbar-expand-lg align-items-start">

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

								<div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
									<ul class="navbar-nav animated" id="nav">
										<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
										<?php if ($this->session->userdata('nama') == "") { ?>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/login') ?>">Login/Register</a></li>
										<?php } else { ?>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('pesanan_saya') ?>">Pesanan</a></li>
											<li class="nav-item"><a class="nav-link" href="#"><?= $this->session->userdata('nama'); ?></a></li>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/logout') ?>">Logout</a></li>
										<?php } ?>
									</ul>
								</div>
							</nav>
						</div>
						<!-- Help Line -->
						<div class="help-line">
							<a href="tel:+62123456789"><i class="ti-headphone-alt"></i> +62 123 4567 890</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- ****** Header Area End ****** -->
