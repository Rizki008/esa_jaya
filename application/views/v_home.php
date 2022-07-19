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

							<a href="<?= site_url('home/detail_produk/' . $value->id_produk); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
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