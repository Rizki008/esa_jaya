<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			Pembayaran
		</span>
	</div>
</div>


<!-- Shoping Cart -->
<?php
//notifikasi form kosong
echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

//notifikasi gagal upload gambar
if (isset($error_upload)) {
	echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
}
echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi); ?>
<form class="bg0 p-t-75 p-b-85">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-9 col-xl-7 m-lr-auto m-b-52">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Total Pembayaran
					</h4>

					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Subtotal:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2">
								Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-
							</span>
						</div>
					</div>

					<div class="flex-w flex-t bor12 p-t-15 p-b-30">
						<div class="size-208 w-full-ssm">
							<span class="stext-110 cl2">
								No Rekening
							</span>
						</div>

						<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
							<?php foreach ($rekening as $key => $value) { ?>
								<p class="stext-111 cl6 p-t-2">
									<?= $value->nama_bank ?>&nbsp;&nbsp;
									<?= $value->no_rek ?>&nbsp;&nbsp;
									<?= $value->atas_nama ?>
								</p>
							<?php } ?>

						</div>
					</div>
					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Data Pembayaran:
							</span>
						</div>
						<div class="p-t-15">
							<div class="bor8 bg0 m-b-12">
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="atas_nama" placeholder="Atas Nama">
							</div>

							<div class="bor8 bg0 m-b-22">
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="nama_bank" placeholder="Nama Bank">
							</div>
							<div class="bor8 bg0 m-b-22">
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="no_rek" placeholder="No Rekening">
							</div>
							<div class="bor8 bg0 m-b-22">
								<!-- <input type="file" name="bukti_bayar" class="custom-file-input" required">
									<label class="custom-file-label" for="exampleInputFile">Pilih File</label> -->
								<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="file" name="bukti_bayar" placeholder="Bukti Bayar">
							</div>
						</div>
					</div>

					<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Bayar
					</button><br>
					<a href="<?= base_url('pesanan_saya') ?>" class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Kembali
					</a>
				</div>
			</div>
		</div>
	</div>
</form>
<?php echo form_close() ?>