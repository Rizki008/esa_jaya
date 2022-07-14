<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			Shoping Cart
		</span>
	</div>
</div>
<!-- Shoping Cart -->
<!-- <?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

		echo form_open('belanja/cekout');
		$no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?> -->
<form class="bg0 p-t-75 p-b-85" action="<?= base_url('belanja/cekout') ?>" method="POST">
	<?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

	$no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-9 col-xl-7 m-lr-auto m-b-52">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Cart Totals
					</h4>

					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Subtotal:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2">
								Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?>
							</span>
						</div>
					</div>

					<div class="flex-w flex-t bor12 p-t-15 p-b-30">
						<div class="size-208 w-full-ssm">
							<span class="stext-110 cl2">
								Atas Nama:
							</span>
						</div>

						<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
							<div class="bor8 bg0 m-b-12">
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="nama_pelanggan" placeholder="Nama Penerima">
							</div>

							<div class="bor8 bg0 m-b-22">
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="no_tlpn" placeholder="No Telephone">
							</div>

							<div class="p-t-15">
								<span class="stext-112 cl8">
									Alamat Pelanggan
								</span>

								<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<select class="js-select2" name="id_lokasi" id="ongkir">
										<option value="">---Pilih Lokasi Anda---</option>
										<?php foreach ($lokasi as $key => $value) { ?>
											<option value="<?= $value->id_lokasi ?>" data-ongkir=<?= $value->ongkir ?> data-total=<?= $this->cart->total() +  $value->ongkir ?>><?= $value->nama_lokasi ?></option>
										<?php } ?>
									</select>
									<div class="dropDownSelect2"></div>
								</div>

								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="alamat" placeholder="Alamat Lengkap">
								</div>

							</div>
						</div>
					</div>
					<?php $i = 1; ?>

					<?php $total_berat = 0;
					foreach ($this->cart->contents() as $items) {
						$produk = $this->m_home->detail_produk($items['id']);
						$berat = $items['qty'] * $produk->berat;
						$total_berat =  $total_berat + $berat;
					?>
					<?php } ?>
					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Total:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								Rp. <span class="total"></span>
							</span>
						</div>
					</div>
					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Shipping:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								Rp. <span class="ongkir"></span>
							</span>
						</div>
					</div>
					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Berat:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								<span><?= $total_berat ?> Gr</span>
							</span>
						</div>
					</div>
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
					<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- <?php
		echo form_close();
		?> -->