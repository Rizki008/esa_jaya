<footer class="page-footer">
	<div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
	<a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
	<div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>
</div>
</div>
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
	<div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->

<!-- CORE PLUGINS-->
<script src="<?= base_url() ?>backend/dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="<?= base_url() ?>backend/dist/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="<?= base_url() ?>backend/dist/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="<?= base_url() ?>backend/dist/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>backend/dist//assets/js/scripts/charts_flot_demo.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="<?= base_url() ?>backend/cart/dist/Chart.min.js"></script>
<script src="<?= base_url() ?>backend/cart/samples/utils.js"></script>
<script type="text/javascript">
	$(function() {
		$('#example-table').DataTable({
			pageLength: 10,
			//"ajax": './assets/demo/data/table_data.json',
			/*"columns": [
			    { "data": "name" },
			    { "data": "office" },
			    { "data": "extn" },
			    { "data": "start_date" },
			    { "data": "salary" }
			]*/
		});
	})
</script>

<!-- summernote -->
<script type="text/javascript">
	$(function() {
		$('#summernote').summernote();
		$('#summernote_air').summernote({
			airMode: true
		});
	});
</script>
<script>
	function kembalian() {
		let total = $("#total_harga").html(),
			Jumlah_bayar = $('[name="Jumlah_bayar"').val();
		// diskon = $('[name="diskon"]').val();
		$(".kembalian").html(Jumlah_bayar - total);
		checkUang()
	}
</script>
<script>
	console.log = function() {}
	$("#pesan_produk").on('change', function() {

		$(".name").html($(this).find(':selected').attr('data-name'));
		$(".name").val($(this).find(':selected').attr('data-name'));

		$(".price").html($(this).find(':selected').attr('data-price'));
		$(".price").val($(this).find(':selected').attr('data-price'));
	});
</script>
<!-- load gambar -->
<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#preview_gambar').change(function() {
		bacaGambar(this);
	});
</script>
</body>

</html>