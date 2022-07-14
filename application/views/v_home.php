<!-- ****** Top Discount Area Start ****** -->
<!-- <section class="top-discount-area d-md-flex align-items-center"> -->
<!-- Single Discount Area -->
<!-- <div class="single-discount-area">
		<h5>Free Shipping &amp; Returns</h5>
		<h6><a href="#">BUY NOW</a></h6>
	</div> -->
<!-- Single Discount Area -->
<!-- <div class="single-discount-area">
		<h5>20% Discount for all dresses</h5>
		<h6>USE CODE: Colorlib</h6>
	</div> -->
<!-- Single Discount Area -->
<!-- <div class="single-discount-area">
		<h5>20% Discount for students</h5>
		<h6>USE CODE: Colorlib</h6>
	</div>
</section> -->
<!-- ****** Top Discount Area End ****** -->

<!-- ****** Welcome Slides Area Start ****** -->
<!-- <section class="welcome_area">
	<div class="welcome_slides owl-carousel">
		<?php foreach ($best_deal_product_transaksi as $key => $value) { ?> -->
<!-- Single Slide Start -->
<!-- <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(<?= base_url('uploads/produk/' . $value->gambar) ?>);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="welcome_slide_text">
								<h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Produk Paling Laris</h6>
								<h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms"><?= $value->nama_produk ?></h2>
								<a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section> -->
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Quick View Modal Area Start ****** -->

<!-- <?php foreach ($produk as $value) { ?>
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
									</div> -->
<!-- Add to Cart Form -->
<!-- <div class="share_wf mt-30">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div> -->
<!-- ****** Quick View Modal Area End ****** -->
<!-- <?php } ?> -->

<!-- ****** New Arrivals Area Start ****** -->
<!-- <section class="new_arrivals_area section_padding_100_0 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_heading text-center">
					<h2>New Produk</h2>
				</div>
			</div>
		</div>
	</div> -->


<!-- <div class="container">
		<div class="row karl-new-arrivals">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?> -->
<!-- Single gallery Item Start -->
<!-- <?php echo form_open('belanja/add');
					echo form_hidden('id', $value->id_produk);
					echo form_hidden('qty', '1');
					echo form_hidden('price', $value->harga - $value->diskon);
					echo form_hidden('name', $value->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
		?>
					<div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s"> -->
<!-- Product Image -->
<!-- <div class="product-img">
							<img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview<?= $value->id_produk ?>"><i class="ti-plus"></i></a>
							</div>
						</div> -->
<!-- Product Description -->
<!-- <div class="product-description">
							<h4 class="product-price">Rp. <?= number_format($value->harga, 0) ?></h4>
							<p><?= $value->nama_produk ?></p> -->
<!-- Add to Cart -->
<!-- <button type="submit" class="add-to-cart-btn btn btn-primary">ADD TO CART</button>
						</div>
					</div>
					<?php echo form_close() ?>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</section> -->
<!-- ****** New Arrivals Area End ****** -->

<!-- ****** Offer Area Start ****** -->
<!-- <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?= base_url('uploads/produk/' . $best_produk->gambar) ?>);">
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
</section> -->
<!-- ****** Offer Area End ****** -->

<!-- ****** Popular Brands Area Start ****** -->
<!-- <section class="karl-testimonials-area section_padding_100">
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
				<div class="karl-testimonials-slides owl-carousel"> -->

<!-- Single Testimonial Area -->
<!-- <div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="<?= base_url() ?>frontend/img/bg-img/tes-1.jpg" alt="">
							</div>
							<div class="testi-data">
								<p>Michelle Williams</p>
								<span>Client, Los Angeles</span>
							</div>
						</div>
					</div> -->

<!-- Single Testimonial Area -->
<!-- <div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="<?= base_url() ?>frontend/img/bg-img/tes-1.jpg" alt="">
							</div>
							<div class="testi-data">
								<p>Michelle Williams</p>
								<span>Client, Los Angeles</span>
							</div>
						</div>
					</div> -->

<!-- Single Testimonial Area -->
<!-- <div class="single-testimonial-area text-center">
						<span class="quote">"</span>
						<h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
						<div class="testimonial-info d-flex align-items-center justify-content-center">
							<div class="tes-thumbnail">
								<img src="<?= base_url() ?>frontend/img/bg-img/tes-1.jpg" alt="">
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
</section> -->
<!-- ****** Popular Brands Area End ****** -->


<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php foreach ($best_deal_product_transaksi as $key => $value) { ?>
				<div class="item-slick1" style="background-image: url(<?= base_url('uploads/produk/' . $value->gambar) ?>);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<?= $value->nama_produk ?>
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Produk Terlaris
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Detail Produk
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>




<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				Product Overview
			</h3>
		</div>

		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					All Products
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
					Produk Baru
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
					Diskon
				</button>
			</div>
		</div>

		<div class="row isotope-grid">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<?php echo form_open('belanja/add');
						echo form_hidden('id', $value->id_produk);
						echo form_hidden('qty', '1');
						echo form_hidden('price', $value->harga - $value->diskon);
						echo form_hidden('name', $value->nama_produk);
						echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
						?>
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="IMG-PRODUCT">

								<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Detail Produk
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?= $value->nama_produk ?>
									</a>

									<span class="stext-105 cl3">
										Rp. <?= number_format($value->harga, 0) ?>
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
								</div>
							</div>
						</div>
						<?php echo form_close() ?>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
			<?php foreach ($diskon as $key => $value) { ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $value->id_produk);
					echo form_hidden('qty', 1);
					echo form_hidden('price', $value->harga - $value->diskon);
					echo form_hidden('name', $value->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="IMG-PRODUCT">

							<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Detail Produk
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $value->nama_produk ?>
								</a>

								<span class="stext-105 cl3">
									Harga Diskon Rp. Rp. <?= number_format($value->diskon, 0) ?> <br>
									Harga Baru Rp. <?= number_format($value->harga, 0) ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<!-- <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a> -->
							</div>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			<?php } ?>
		</div>

		<!-- Load more -->
		<div class="flex-c-m flex-w w-full p-t-45">
			<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Load More
			</a>
		</div>
	</div>

</section>