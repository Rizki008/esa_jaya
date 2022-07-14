<!-- ****** Checkout Area Start ****** -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= base_url() ?>template/images/bg-01.jpg');">
	<h2 class="ltext-105 cl0 txt-center">
		Contact
	</h2>
</section>

<section class="bg0 p-t-104 p-b-116">
	<div class="container">
		<div class="flex-w flex-tr">
			<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">

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
				<form action="<?= base_url('pelanggan/register') ?>" method="post">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="first_name">Nama Lengkap <span>*</span></label>
							<input type="text" class="form-control" name="nama" id="first_name" value="<?= set_value('nama') ?>" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="first_name">Email <span>*</span></label>
							<input type="email" class="form-control" name="email" id="first_name" value="<?= set_value('email') ?>" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="last_name">Password <span>*</span></label>
							<input type="password" name="password" class="form-control" id="last_name" value="<?= set_value('password') ?>" required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="first_name">No Telphon <span>*</span></label>
							<input type="number" class="form-control" name="no_tlpn" id="first_name" value="<?= set_value('no_tlpn') ?>" required>
						</div>
						<div class="form-group">
							<label for="first_name">Provinsi <span>*</span></label>
							<select name="provinsi" id="provinsi" class="form-control" required>
								<option value="">---Pilih Provinsi---</option>
								<?php foreach ($provinsi as $key => $value) { ?>
									<option value="<?= $value->id_provinsi ?>" data-provinsi="<?= $value->provinsi ?>" name="provinsi"><?= $value->provinsi ?></option>
								<?php } ?>
							</select>
						</div>&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="form-group">
							<label for="first_name">Kabupaten <span>*</span></label>
							<select name="kabupaten" id="kabupaten" class="form-control" required></select>
						</div>
						<div class="col-md-12 mb-3">
							<label for="first_name">Alamat Lengkap <span>*</span></label>
							<input type="alamat" class="form-control" name="alamat" id="first_name" value="<?= set_value('alamat') ?>" required>
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Register
						</button><br><br>
						<a href="<?= base_url('pelanggan/login') ?>" class="flex-c-m stext-101 cl0 size-121 bg2 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Login
						</a>
					</div>
				</form>
			</div>

			<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-map-marker"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Alamat Esa Jaya
						</span>

						<p class="stext-115 cl6 size-213 p-t-18">
							Ciniru Kab.Kuningan kode post 12564
						</p>
					</div>
				</div>

				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-phone-handset"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Kontak Tlpn:
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							+62 893-2817-2819
						</p>
					</div>
				</div>

				<div class="flex-w w-full">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-envelope"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Email
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							esa-jaya@jaya.com
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
		</div>
	</div>
	<!-- ****** Checkout Area End ****** -->

</section>