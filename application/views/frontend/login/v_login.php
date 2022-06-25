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
		<div class="row">

			<div class="col-12 col-md-6">
				<div class="checkout_details_area mt-50 clearfix">

					<div class="cart-page-heading">
						<h5>Login Pelanggan</h5>
					</div>
					<?php

					echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

					if (
						$this->session->flashdata('pesan')
					) {
						echo '<div class="alert alert-success alert-dismissible"> 
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i>Sukses</h5>';
						echo
						$this->session->flashdata('pesan');
						echo '</div>';
					}
					?>
					<form action="<?= base_url('pelanggan/login') ?>" method="post">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="first_name">Email <span>*</span></label>
								<input type="email" class="form-control" name="email" id="first_name" value="<?= set_value('email') ?>" required>
							</div>
							<div class="col-md-6 mb-3">
								<label for="last_name">Password <span>*</span></label>
								<input type="password" name="password" class="form-control" id="last_name" value="<?= set_value('password') ?>" required>
							</div>
							<div class="order-details-confirmation col-md-6 mb-3">
								<button type="submit" class="btn karl-checkout-btn">Login</button>
							</div>
							<div class="order-details-confirmation col-md-6 mb-3">
								<a href="<?= base_url('pelanggan/register') ?>" class="btn karl-checkout-btn">Registrasi</a>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
			</div>

		</div>
	</div>
</div>
<!-- ****** Checkout Area End ****** -->
