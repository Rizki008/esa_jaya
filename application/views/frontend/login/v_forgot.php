<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= base_url() ?>template/images/rmh.jpg');">
	<h2 class="ltext-105 cl0 txt-center">
		Login Pelanggan
	</h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
	<div class="container">
		<div class="flex-w flex-tr">
			<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
				<?php

				echo validation_errors('<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

				if ($this->session->flashdata('error')) {
					echo '<div class="alert alert-danger alert-dismissible">
						<h5><i class="icon fa fa-ban"></i> Gagal</h5>';
					echo $this->session->flashdata('error');
					echo '</div>';
				}

				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
						<h5><i class="icon fa fa-check"></i> Sukses</h5>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}
				?>
				<form action="<?= base_url('pelanggan/forgotPassword') ?>" method="post">
					<h4 class="mtext-105 cl2 txt-center p-b-30">
						Login
					</h4>

					<div class="bor8 m-b-20 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" value="<?= set_value('email') ?>" placeholder="Email">
						<img class="how-pos4 pointer-none" src="<?= base_url() ?>template/images/icons/icon-email.png" alt="ICON">
					</div>

					<button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Reset Password
					</button><br>
					<a href="<?= base_url('pelanggan/register') ?>" class="flex-c-m stext-101 cl0 size-121 bg2 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Register
					</a><br>
					<a href="<?= base_url('pelanggan/login') ?>" class="flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
						Login
					</a>
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
	</div>
</section>