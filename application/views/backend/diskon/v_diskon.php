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
        <div class="col-xl-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Gray head</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Nama Diskon</th>
                                <th>Diskon</th>
                                <th>Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($diskon as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->nama_produk ?></td>
                                    <td><?= $value->nama_diskon ?></td>
                                    <td><?= $value->diskon ?></td>
                                    <td>
                                        <button class="btn btn-default btn-xs m-r-5" data-toggle="modal" data-target="#edit<?= $value->id_diskon ?>" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#delete<?= $value->id_diskon ?>" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.modal Edit -->
<?php foreach ($diskon as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value->id_diskon ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit diskon</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    echo form_open('master_produk/edit_diskon/' . $value->id_diskon);
                    ?>
                    <div class="form-group">
                        <label>Nama diskon</label>
                        <input type="text" name="nama_diskon" value="<?= $value->nama_diskon ?>" class="form-control" placeholder="Nama Diskon" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah diskon</label>
                        <input type="text" name="diskon" value="<?= $value->diskon ?>" class="form-control" placeholder="Jumlah Diskon" required>
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
<?php foreach ($diskon as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_diskon ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->nama_diskon ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin Akan Hapus <?= $value->nama_diskon ?>?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('master_produk/delete_diskon/' . $value->id_diskon) ?> " class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>