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

<!-- ****** Checkout Area Start ****** -->
<div class="checkout_area section_padding_100">
	<div class="container">
		<?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

		echo form_open('belanja/cekout');
		$no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
		<div class="row">

			<div class="col-12 col-md-6">
				<div class="checkout_details_area mt-50 clearfix">
					<div class="cart-page-heading">
						<h5>Pesan Sekarang</h5>
						<p>Data Pelanggan</p>
					</div>
					<form action="#" method="post">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="first_name">Nama <span>*</span></label>
								<input type="text" class="form-control" name="nama_pelanggan" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="last_name">No Telphone <span>*</span></label>
								<input type="number" class="form-control" name="no_tlpn" required>
							</div>
							<div class="col-12 mb-3">
								<label for="country">Kecamatan <span>*</span></label>
								<select class="custom-select d-block w-100" name="id_lokasi" id="ongkir">
									<option value="">---Pilih Lokasi Anda---</option>
									<?php foreach ($lokasi as $key => $value) { ?>
										<option value="<?= $value->id_lokasi ?>" data-ongkir=<?= $value->ongkir ?> data-total=<?= $this->cart->total() +  $value->ongkir ?>><?= $value->nama_lokasi ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-12 mb-3">
								<label for="street_address">Alamat Legkap <span>*</span></label>
								<input type="text" class="form-control mb-3" name="alamat" required>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
				<div class="order-details-confirmation">
					<?php $i = 1; ?>

					<?php $total_berat = 0;
					foreach ($this->cart->contents() as $items) {
						$produk = $this->m_home->detail_produk($items['id']);
						$berat = $items['qty'] * $produk->berat;
						$total_berat =  $total_berat + $berat;
					?>
					<?php } ?>
					<div class="cart-page-heading">
						<h5>Your Order</h5>
						<p>The Details</p>
					</div>
					<ul class="order-details-form mb-4">
						<li><span>Product</span> <span>Total</span></li>
						<li><span>Subtotal</span> <span>Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?></span></li>
						<li><span>Shipping</span>Rp. <span class="ongkir"></span></li>
						<li><span>Shipping</span> <span><?= $total_berat ?> Gr</span></li>
						<li><span>Total</span>Rp. <span class="total"></span></li>
					</ul>
					<!--simpan transaksi-->
					<input name="no_order" value="<?= $no_order ?>" hidden>
					<!-- <input name="estimasi" hidden>-->
					<input name="ongkir" class="ongkir" hidden>
					<!--<input name="berat" value="<?= $total_berat ?>" ><br>-->
					<input name="grand_total" value="<?php echo $this->cart->total() ?>" hidden>
					<input name="total_bayar" class="total" hidden>

					<?php
					$i = 1;
					foreach ($this->cart->contents() as $items) {
						echo form_hidden('qty' . $i++, $items['qty']);
					}
					?>
					<button type="submit" class="btn karl-checkout-btn">Place Order</button>
				</div>
			</div>
		</div>
		<?php
		echo form_close();
		?>
	</div>
</div>
<!-- ****** Checkout Area End ****** -->
