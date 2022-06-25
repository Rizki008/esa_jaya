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
			<?php if (count($produk_lainnya) > 0) : ?>
				<?php foreach ($produk_lainnya as $product) : ?>

					<div class="col-12">
						<div class="you_make_like_slider owl-carousel">

							<!-- Single gallery Item -->
							<div class="single_gallery_item">
								<!-- Product Image -->
								<div class="product-img">
									<img src="<?php echo base_url('uploads/produk/' . $product->gambar); ?>" alt="">
									<div class="product-quicview">
									</div>
								</div>
								<!-- Product Description -->
								<div class="product-description">
									<h4 class="product-price">Rp <?php echo number_format($product->harga); ?></h4>
									<p><?php echo anchor('belanja/add/' . $product->id_produk . '/', $product->nama_produk); ?></p>
									<!-- Add to Cart -->
									<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="add-to-cart-btn">Detail Produk</a>
								</div>
							</div>


						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
