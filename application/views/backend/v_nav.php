<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
	<div id="sidebar-collapse">
		<div class="admin-block d-flex">
			<div>
				<img src="<?= base_url() ?>backend/dist/assets/img/admin-avatar.png" width="45px" />
			</div>
			<div class="admin-info">
				<div class="font-strong">James Brown</div><small>Administrator</small>
			</div>
		</div>
		<ul class="side-menu metismenu">
			<li>
				<a class="active" href="<?= base_url('admin') ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
					<span class="nav-label">Dashboard</span>
				</a>
			</li>
			<li class="heading">Master Produk</li>
			<li>
				<a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
					<span class="nav-label">Data Produk</span><i class="fa fa-angle-left arrow"></i></a>
				<ul class="nav-2-level collapse">
					<li>
						<a href="<?= base_url('master_produk/kategori') ?>">Kategori</a>
					</li>
					<li>
						<a href="<?= base_url('master_produk/produk') ?>">Produk</a>
					</li>
					<li>
						<a href="<?= base_url('master_produk/diskon') ?>">Diskon Produk</a>
					</li>
					<li>
						<a href="<?= base_url('master_produk/diskon_besar') ?>">Diskon Belanja Besar</a>
					</li>
					<li>
						<a href="<?= base_url('master_produk/gambar') ?>">Gambar</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
					<span class="nav-label">Transaksi Online</span><i class="fa fa-angle-left arrow"></i></a>
				<ul class="nav-2-level collapse">
					<li>
						<a href="<?= base_url('transaksi/pesanan') ?>">Pesanan</a>
					</li>
					<li>
						<a href="<?= base_url('transaksi/proses') ?>">Proses</a>
					</li>
					<li>
						<a href="<?= base_url('transaksi/kirim') ?>">Kirim</a>
					</li>
					<li>
						<a href="<?= base_url('transaksi/selesai') ?>">Selesai</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('transaksi/transaksi_langsung') ?>"><i class="sidebar-item-icon fa fa-money"></i>
					<span class="nav-label">Transaksi Langsung</span>
				</a>
			</li>
			<li>
				<a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
					<span class="nav-label">Analisis</span><i class="fa fa-angle-left arrow"></i></a>
				<ul class="nav-2-level collapse">
					<li>
						<a href="<?= base_url('transaksi/analisis_produk') ?>">Analisis Hasil Transaksi Produk</a>
					</li>
					<li>
						<a href="<?= base_url('transaksi/analisis_pelanggan') ?>">Analisis Profil Pelanggan</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('laporan') ?>"><i class="sidebar-item-icon fa fa-smile-o"></i>
					<span class="nav-label">Laporan</span>
				</a>
			</li>
			<li class="heading">Setting</li>
			<li>
				<a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
					<span class="nav-label">Setting Lokasi Toko</span><i class="fa fa-angle-left arrow"></i></a>
				<ul class="nav-2-level collapse">
					<li>
						<a href="<?= base_url('lokasi') ?>">Lokasi Toko</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('auth/logout') ?>"><i class="sidebar-item-icon fa fa-calendar"></i>
					<span class="nav-label">LogOut</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
<!-- END SIDEBAR-->
<div class="content-wrapper">