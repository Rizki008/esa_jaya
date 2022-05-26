<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Home</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('admin') ?>"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item"><?= $title ?></li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Table</div>
            <a href="<?= base_url('master_produk/add_produk') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus">Tambah Produk</i></a>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Promo</th>
                        <th>Berat</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Promo</th>
                        <th>Berat</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Setting</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($produk as $key => $value) { ?>
                        <tr>
                            <td><?= $value->nama_produk ?></td>
                            <td><?= $value->nama_kategori ?></td>
                            <td>Rp. <?= number_format($value->harga, 0) ?></td>
                            <td><?= number_format($value->stock, 0) ?></td>
                            <td>Rp.- <?= $value->promo ?></td>
                            <td><?= $value->berat ?> Kg</td>
                            <td><img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="" width="100px"></td>
                            <td><?= $value->deskripsi ?></td>
                            <td>
                                <a href="<?= base_url('master_produk/edit_produk/' . $value->id_produk) ?>" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                                <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- /.modal Delete -->
        <?php foreach ($produk as $key => $value) { ?>
            <div class="modal fade" id="delete<?= $value->id_produk ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete <?= $value->nama_produk ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Apakah Anda Yakin Akan Hapus <?= $value->nama_produk ?>?</h5>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="<?= base_url('master_produk/delete_produk/' . $value->id_produk) ?> " class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>