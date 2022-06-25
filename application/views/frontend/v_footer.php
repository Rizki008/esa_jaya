<!-- ****** Footer Area Start ****** -->
<footer class="footer_area">
	<div class="container">
		<div class="row">
			<!-- Single Footer Area Start -->
			<div class="col-12 col-md-6 col-lg-3">
				<div class="single_footer_area">
					<div class="footer-logo">
						<img src="img/core-img/logo.png" alt="">
					</div>
					<div class="copywrite_text d-flex align-items-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
			<!-- Single Footer Area Start -->
			<div class="col-12 col-sm-6 col-md-3 col-lg-2">
				<div class="single_footer_area">
					<ul class="footer_widget_menu">
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Faq</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<!-- Single Footer Area Start -->
			<div class="col-12 col-sm-6 col-md-3 col-lg-2">
				<div class="single_footer_area">
					<ul class="footer_widget_menu">
						<li><a href="#">My Account</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Our Policies</a></li>
						<li><a href="#">Afiliates</a></li>
					</ul>
				</div>
			</div>
			<!-- Single Footer Area Start -->
			<div class="col-12 col-lg-5">
				<div class="single_footer_area">
					<div class="footer_heading mb-30">
						<h6>Subscribe to our newsletter</h6>
					</div>
					<div class="subscribtion_form">
						<form action="#" method="post">
							<input type="email" name="mail" class="mail" placeholder="Your email here">
							<button type="submit" class="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="line"></div>

		<!-- Footer Bottom Area Start -->
		<div class="footer_bottom_area">
			<div class="row">
				<div class="col-12">
					<div class="footer_social_area text-center">
						<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ****** Footer Area End ****** -->
</div>
<!-- /.wrapper end -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="<?= base_url() ?>frontend/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?= base_url() ?>frontend/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?= base_url() ?>frontend/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?= base_url() ?>frontend/js/plugins.js"></script>
<!-- Active js -->
<script src="<?= base_url() ?>frontend/js/active.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#provinsi").on('change', (function() {
			var id_provinsi = $(this).val();
			$.ajax({
				method: "POST",
				url: "<?php echo base_url('Pelanggan/kabupaten') ?>",
				data: 'id_provinsi=' + id_provinsi,
				async: true,
				type: 'get',
				dataType: 'json',
				success: function(data_kabupaten) {
					console.log(data_kabupaten);
					$('#kabupaten').append('<option>---Pilih Kabupaten---</option>')
					for (var i = 0; i < data_kabupaten.length; i++) {
						$('#kabupaten').append('<option value=' + data_kabupaten[i].id_kabupaten + '>' + data_kabupaten[i].kabupaten + '</option>');
					}
				}
			});
		}));
	});
</script>

<script>
	console.log = function() {}
	$("#ongkir").on('change', function() {

		$(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
		$(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

		$(".total").html($(this).find(':selected').attr('data-total'));
		$(".total").val($(this).find(':selected').attr('data-total'));

	});
</script>

</body>

</html>
