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
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title"><?= $title ?></div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item">option 1</a>
                            <a class="dropdown-item">option 2</a> -->
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <?php
                    echo form_open_multipart('') ?>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" type="text" name="keterangan" value="<?= set_value('keterangan') ?>" placeholder="1000">
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Gambar</label>
                            <input type="file" name="img" class="form-control" id="preview_gambar"></input>
                        </div>
                        <div class="form-group col-sm-6">
                            <img src="<?= base_url('uploads/gambar/nopoto.jpg') ?>" id="gambar_load" width="400px">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="<?= base_url('master_produk/gambar') ?>" class="btn btn-warning">Kembali</a>
                    </div>
                    <?php echo form_close() ?>



                    <div class="row">
                        <?php foreach ($gambar as $key => $value) { ?>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="card-columns">
                                        <div class="card" style="width:280px;">
                                            <img class="card-img-top" src="<?= base_url('uploads/gambar/' . $value->img) ?>" />
                                            <div class="card-body">
                                                <h4 class="card-title"><?= $value->keterangan ?></h4>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_gambar ?>" data-original-title="Delete"><i class="fa fa-trash font-14"></i>Delete Images</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($gambar as $key => $value) { ?>
            <div class="modal fade" id="delete<?= $value->id_gambar ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete <?= $value->keterangan ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Apakah Anda Yakin Akan Hapus <?= $value->keterangan ?>?</h5>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="<?= base_url('master_produk/delete_gambar/' . $value->id_produk . '/' . $value->id_gambar) ?> " class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>