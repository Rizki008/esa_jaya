<body>
	<div class="catagories-side-menu">
		<!-- Close Icon -->
		<div id="sideMenuClose">
			<i class="ti-close"></i>
		</div>
		<!--  Side Nav  -->
		<div class="nav-side-menu">
			<div class="menu-list">
				<h6>Categories</h6>
				<ul id="menu-content" class="menu-content collapse out">
					<!-- Single Item -->
					<?php $kategori = $this->m_home->kategori_produk(); ?>
					<?php foreach ($kategori as $key => $value) { ?>
						<li data-toggle="collapse" data-target="#women" class="collapsed active">
							<a href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?> </a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
