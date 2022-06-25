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

<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
<div class="breadcumb_area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ol class="breadcrumb d-flex align-items-center">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Dresses</a></li>
					<li class="breadcrumb-item active">Long Dress</li>
				</ol>
				<!-- btn -->
				<a href="<?= base_url() ?>" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a>
			</div>
		</div>
	</div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
<section class="single_product_details_area section_padding_0_100">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6">
				<div class="single_product_thumb">
					<div id="product_details_slider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?= base_url('uploads/produk/' . $produk->gambar) ?>);">
							</li>
							<?php foreach ($gambar as $key => $value) { ?>
								<li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?= base_url('uploads/gambar/' . $value->img) ?>);">
								</li>
							<?php } ?>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<a class="gallery_img" href="<?= base_url('uploads/produk/' . $produk->gambar) ?>">
									<img class="d-block w-100" src="<?= base_url('uploads/produk/' . $produk->gambar) ?>" alt="First slide">
								</a>
							</div>
							<?php foreach ($gambar as $key => $value) { ?>
								<div class="carousel-item">
									<a class="gallery_img" href="<?= base_url('uploads/gambar/' . $value->img) ?>">
										<img class="d-block w-100" src="<?= base_url('uploads/gambar/' . $value->img) ?>" alt="Second slide">
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6">
				<?php echo form_open('belanja/add');
				echo form_hidden('id', $produk->id_produk);
				echo form_hidden('qty', '1');
				echo form_hidden('price', $produk->harga - $produk->diskon);
				echo form_hidden('name', $produk->nama_produk);
				echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
				?>
				<div class="single_product_desc">
					<h4 class="title"><a href="#"><?= $produk->nama_produk ?></a></h4>
					<h4 class="price">Rp. <?= number_format($produk->harga - $produk->diskon, 0) ?></h4>
					<p class="available">Available: <span class="text-muted">In Stock</span></p>
					<div class="single_product_ratings mb-15">
					</div>
					<div class="widget size mb-50">
					</div>
					<!-- Add to Cart Form -->
					<form class="cart clearfix mb-50 d-flex" method="post">
						<div class="quantity">
							<input type="number" class="qty-text" id="qty" step="1" min="1" max="<?= $produk->stock ?>" name="stock" value="1">
						</div>
						<button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>
					</form>
					<div id="accordion" role="tablist">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<p><?= $produk->deskripsi ?></p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" role="tab" id="headingTwo">
								<h6 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
								</h6>
							</div>
							<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos nemo, nulla quaerat. Quibusdam non, eos, voluptatem reprehenderit hic nam! Laboriosam, sapiente! Praesentium.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magnam laborum eaque.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" role="tab" id="headingThree">
								<h6 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
								</h6>
							</div>
							<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</section>
<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

<!-- ****** Quick View Modal Area Start ****** -->
<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body">
				<div class="quickview_body">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-5">
								<div class="quickview_pro_img">
									<img src="img/product-img/product-1.jpg" alt="">
								</div>
							</div>
							<div class="col-12 col-lg-7">
								<div class="quickview_pro_des">
									<h4 class="title">Boutique Silk Dress</h4>
									<div class="top_seller_product_rating mb-15">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<h5 class="price">$120.99 <span>$130</span></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
									<a href="#">View Full Product Details</a>
								</div>
								<!-- Add to Cart Form -->
								<form class="cart" method="post">
									<div class="quantity">
										<input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">
									</div>
									<button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
									<!-- Wishlist -->
									<div class="modal_pro_wishlist">
										<a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
									</div>
									<!-- Compare -->
									<div class="modal_pro_compare">
										<a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
									</div>
								</form>

								<div class="share_wf mt-30">
									<p>Share With Friend</p>
									<div class="_icon">
										<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ****** Quick View Modal Area End ****** -->

<section class="you_may_like_area clearfix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section_heading text-center">
					<h2>related Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="you_make_like_slider owl-carousel">

					<!-- Single gallery Item -->
					<div class="single_gallery_item">
						<!-- Product Image -->
						<div class="product-img">
							<img src="img/product-img/product-1.jpg" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">$39.90</h4>
							<p>Jeans midi cocktail dress</p>
							<!-- Add to Cart -->
							<a href="#" class="add-to-cart-btn">ADD TO CART</a>
						</div>
					</div>

					<!-- Single gallery Item -->
					<div class="single_gallery_item">
						<!-- Product Image -->
						<div class="product-img">
							<img src="img/product-img/product-2.jpg" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">$39.90</h4>
							<p>Jeans midi cocktail dress</p>
							<!-- Add to Cart -->
							<a href="#" class="add-to-cart-btn">ADD TO CART</a>
						</div>
					</div>

					<!-- Single gallery Item -->
					<div class="single_gallery_item">
						<!-- Product Image -->
						<div class="product-img">
							<img src="img/product-img/product-3.jpg" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">$39.90</h4>
							<p>Jeans midi cocktail dress</p>
							<!-- Add to Cart -->
							<a href="#" class="add-to-cart-btn">ADD TO CART</a>
						</div>
					</div>

					<!-- Single gallery Item -->
					<div class="single_gallery_item">
						<!-- Product Image -->
						<div class="product-img">
							<img src="img/product-img/product-4.jpg" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">$39.90</h4>
							<p>Jeans midi cocktail dress</p>
							<!-- Add to Cart -->
							<a href="#" class="add-to-cart-btn">ADD TO CART</a>
						</div>
					</div>

					<!-- Single gallery Item -->
					<div class="single_gallery_item">
						<!-- Product Image -->
						<div class="product-img">
							<img src="img/product-img/product-5.jpg" alt="">
							<div class="product-quicview">
								<a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
							</div>
						</div>
						<!-- Product Description -->
						<div class="product-description">
							<h4 class="product-price">$39.90</h4>
							<p>Jeans midi cocktail dress</p>
							<!-- Add to Cart -->
							<a href="#" class="add-to-cart-btn">ADD TO CART</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
