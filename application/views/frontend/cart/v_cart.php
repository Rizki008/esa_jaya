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
		<?php echo form_open('belanja/update'); ?>
		<div class="row">
			<div class="col-12">
				<div class="cart-table clearfix">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php
							$total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_home->detail_produk($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat = $total_berat + $berat;
							?>
								<tr>
									<td class="cart_product_img d-flex align-items-center">
										<a href="#"><img src="<?= base_url('uploads/produk/' . $produk->gambar) ?>" alt="Product"></a>
										<h6><?php echo $items['name'] ?></h6>
									</td>
									<td class="price"><span>Rp. <?= number_format($items['price'], 0) ?></span></td>
									<td class="qty">
										<div class="quantity">
											<?php echo form_input(
												array(
													'name' => $i . '[qty]',
													'value' => $items['qty'],
													'maxlength' => '3',
													'min' => '0',
													'max' => 'stock',
													'size' => '5',
													'type' => 'number',
													'class' => 'form-control'
												)
											); ?>
										</div>
									</td>
									<td class="total_price"><span>Rp. <?= number_format($items['subtotal']); ?></span></td>
								</tr>
								<?php $i++; ?>
							<?php } ?>
						</tbody>
					</table>
				</div>

				<div class="cart-footer d-flex mt-30">
					<div class="back-to-shop w-50">
						<a href="<?= base_url() ?>">Continue shooping</a>
					</div>
					<div class="update-checkout w-50 text-right">
						<a href="<?= base_url('belanja/delete/') . $items['rowid'] ?>">clear cart</a>
						<button type="submit">Update cart</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6 col-lg-4">
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div class="shipping-method-area mt-70">
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="cart-total-area mt-70">
					<div class="cart-page-heading">
						<h5>Cart total</h5>
						<p>Final info</p>
					</div>

					<ul class="cart-total-chart">
						<li><span>Subtotal</span> <span>Rp. <?= number_format($this->cart->total(), 0) ?></span></li>
						<li><span>Berat</span> <span><?= $total_berat ?> Kg</span></li>
						<li><span><strong>Total</strong></span> <span><strong>Rp. <?= number_format($this->cart->total(), 0) ?></strong></span></li>
					</ul>
					<a href="<?= base_url('belanja/cekout') ?>" class="btn karl-checkout-btn">Proceed to checkout</a>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
<!-- ****** Cart Area End ****** -->
