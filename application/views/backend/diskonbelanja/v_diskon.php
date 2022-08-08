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
    <div class="row">
        <div class="col-xl-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Diskon Belaja Besar</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th>#</th>
                                <th>Besar Diskon</th>
                                <th>Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($diskon_besar as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= number_format($value->besar_diskon) ?>%</td>
                                    <td>
                                        <button class="btn btn-default btn-xs m-r-5" data-toggle="modal" data-target="#edit<?= $value->id_diskon_belanja ?>" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#delete<?= $value->id_diskon_belanja ?>" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Tambah Diskon Belanja Besar</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="<?= base_url('master_produk/diskon_besar') ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Besar Diskon</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="besar_diskon" value="<?= set_value('besar_diskon') ?>" type="number" placeholder="Besar Diskon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.modal Edit -->
<?php foreach ($diskon_besar as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value->id_diskon_belanja ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Diskon Belanja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('master_produk/edit_diskon_besar/' . $value->id_diskon_belanja);
                    ?>
                    <div class="form-group">
                        <label>Besar Diskon</label>
                        <input type="number" name="besar_diskon" value="<?= $value->besar_diskon ?>" class="form-control" placeholder="Diskon Belanja" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
<?php } ?>


<!-- /.modal Delete -->
<?php foreach ($diskon_besar as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_diskon_belanja ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->besar_diskon ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin Akan Hapus <?= $value->besar_diskon ?>?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('master_produk/delete_diskon_besar/' . $value->id_diskon_belanja) ?> " class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>