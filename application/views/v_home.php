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

<!-- ****** Welcome Slides Area Start ****** -->
<section class="welcome_area">
	<div class="welcome_slides owl-carousel">
		<!-- Single Slide Start -->
		<div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="welcome_slide_text">
							<h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
							<h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
							<a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Single Slide Start -->
		<div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-4.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="welcome_slide_text">
							<h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
							<h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Summer Collection</h2>
							<a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Check Collection</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Single Slide Start -->
		<div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<div class="welcome_slide_text">
							<h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
							<h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women Fashion</h2>
							<a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Check Collection</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Top Catagory Area Start ****** -->
<section class="top_catagory_area d-md-flex clearfix">
	<!-- Single Catagory -->
	<div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
		<div class="catagory-content">
			<h6>On Accesories</h6>
			<h2>Sale 30%</h2>
			<a href="#" class="btn karl-btn">SHOP NOW</a>
		</div>
	</div>
	<!-- Single Catagory -->
	<div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
		<div class="catagory-content">
			<h6>in Bags excepting the new collection</h6>
			<h2>Designer bags</h2>
			<a href="#" class="btn karl-btn">SHOP NOW</a>
		</div>
	</div>
</section>
<!-- ****** Top Catagory Area End ****** -->

<!-- ****** Quick View Modal Area Start ****** -->

<?php foreach ($produk as $value) { ?>
	<div class="modal fade" id="quickview<?= $value->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<?php
				echo form_open('home/modal_produk/' . $value->id_produk);
				?>
				<div class="modal-body">
					<div class="quickview_body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-5">
									<div class="quickview_pro_img">
										<img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="">
									</div>
								</div>
								<div class="col-12 col-lg-7">
									<div class="quickview_pro_des">
										<h4 class="title"><?= $value->nama_produk ?></h4>
										<h5 class="price">Rp. <?= $value->diskon ?> <span>Rp. <?= number_format($value->harga, 0) ?></span></h5>
										<p><?= $value->deskripsi ?></p>
										<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>">View Full Product Details</a>
									</div>
									<!-- Add to Cart Form -->
									<div class="share_wf mt-30">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
	<!-- ****** Quick View Modal Area End ****** -->
<?php } ?>

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_heading text-center">
					<h2>New Produk</h2>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row karl-new-arrivals">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?>
					<!-- Single gallery Item Start -->
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $value->id_produk);
					echo form_hidden('qty', '1');
					echo form_hidden('price', $value->harga - $value->diskon);
					echo form_hidden('name', $value->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
						<!-- Product Image -->
						<div class="product-img">
							<img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview<?= $value->id_produk ?>"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">Rp. <?= number_format($value->harga, 0) ?></h4>
							<p><?= $value->nama_produk ?></p>
							<!-- Add to Cart -->
							<button type="submit" class="add-to-cart-btn btn btn-primary">ADD TO CART</button>
						</div>
					</div>
					<?php echo form_close() ?>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ****** New Arrivals Area End ****** -->

<!-- ****** Offer Area Start ****** -->
<section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?= base_url('uploads/produk/' . $best_produk->gambar) ?>);">
	<div class="container h-100">
		<div class="row h-100 align-items-end justify-content-end">
			<div class="col-12 col-md-8 col-lg-6">
				<div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
					<h2><?= $best_produk->nama_produk ?> <span class="karl-level">Hot</span></h2>
					<p>* <?= $best_produk->nama_diskon ?></p>
					<div class="offer-product-price">
						<h3><span class="regular-price">Rp. <?= number_format($best_produk->harga, 0) ?></span> Rp. <?= number_format($best_produk->diskon, 0) ?></h3>
					</div>
					<a href="<?= site_url('home/detail_produk/' . $best_produk->id_produk); ?>" class="btn karl-btn mt-30">Shop Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ****** Offer Area End ****** -->

<!-- ****** Popular Brands Area Start ****** -->
<section class="karl-testimonials-area section_padding_100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_heading text-center">
					<h2>Testimonials</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<div class="karl-testimonials-slides owl-carousel">

					<!-- Single Testimonial Area -->
					<div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="img/bg-img/tes-1.jpg" alt="">
							</div>
							<div class="testi-data">
								<p>Michelle Williams</p>
								<span>Client, Los Angeles</span>
							</div>
						</div>
					</div>

					<!-- Single Testimonial Area -->
					<div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="img/bg-img/tes-1.jpg" alt="">
							</div>
							<div class="testi-data">
								<p>Michelle Williams</p>
								<span>Client, Los Angeles</span>
							</div>
						</div>
					</div>

					<!-- Single Testimonial Area -->
					<div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="img/bg-img/tes-1.jpg" alt="">
							</div>
							<div class="testi-data">
								<p>Michelle Williams</p>
								<span>Client, Los Angeles</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</section>
<!-- ****** Popular Brands Area End ****** -->
