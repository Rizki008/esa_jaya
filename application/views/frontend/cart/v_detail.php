<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="<?= base_url() ?>" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Riview Product
        </span>
    </div>
</div>
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">


        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">

                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#reviews" role="tab">Reviews (*)</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">

                    <!-- - -->
                    <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <div class="p-b-30 m-lr-15-sm">
                                    <!-- Review -->

                                    <?php foreach ($pesanan_detail as $key => $value) { ?>

                                        <?php echo form_open_multipart('pesanan_saya/insert_riview') ?>
                                        <div class="flex-w flex-t p-b-68">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                <img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="AVATAR">
                                            </div>

                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                    <span class="mtext-107 cl2 p-r-20">
                                                        <?= $value->nama_produk ?>
                                                    </span>

                                                    <span class="fs-18 cl11">
                                                        <?= $value->tgl_order ?>
                                                    </span>
                                                </div>

                                                <p class="stext-102 cl6">
                                                    <?= $value->deskripsi ?>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Add review -->
                                        <!-- <form class="w-full"> -->
                                        <h5 class="mtext-108 cl2 p-b-7">
                                            Add a review
                                        </h5>

                                        <div class="row p-b-25">
                                            <div class="col-12 p-b-5">
                                                <input name="id_produk" class="form-control" cols="30" rows="10" placeholder="isi Produk" value="<?= $value->id_produk ?>" required hidden></input>
                                                <label class="stext-102 cl3" for="review">Your review</label>
                                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="isi" name="isi"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                            Submit
                                        </button>
                                        <!-- </form> -->
                                        <?php echo form_close() ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>