<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<span class="mtext-103 cl2">
				Keranjang Anda
			</span>

			<<<<<<< HEAD <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
				=======
				<div class="col-12 col-lg-7">
					<div class="top_single_area d-flex align-items-center">
						<!-- Logo Area -->
						<div class="top_logo">
							<a href="#"><img src="<?= base_url('frontend/') ?>img/core-img/esa-jaya.png" alt=""></a>
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
		>>>>>>> 6481ab2012bd31d971ad7d758c87450cab64279b
	</div>
</div>

<div class="header-cart-content flex-w js-pscroll">
	<ul class="header-cart-wrapitem w-full">
		<?php foreach ($keranjang as $key => $value) {
			$produk = $this->m_home->detail_produk($value['id']);
		?>
			<li class="header-cart-item flex-w flex-t m-b-12">
				<div class="header-cart-item-img">
					<img src="<?= base_url('uploads/produk/' . $produk->gambar) ?>" alt="IMG">
				</div>

				<div class="header-cart-item-txt p-t-8">
					<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
						<?= $value['name'] ?>
					</a>

					<span class="header-cart-item-info">
						<?= $value['qty'] ?> x Rp. <?= number_format($value['price'], 0) ?>
					</span>
				</div>
			</li>
		<?php } ?>
	</ul>

	<div class="w-full">
		<div class="header-cart-total w-full p-tb-40">
			Total: Rp. <?= $this->cart->format_number($this->cart->total()); ?>
		</div>

		<div class="header-cart-buttons flex-w w-full">
			<a href="<?= base_url('belanja') ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
				View Cart
			</a>

			<a href="<?= base_url('belanja/cekout') ?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
				Check Out
			</a>
		</div>
	</div>
</div>
</div>
</div>
<br>
<br>
<br>