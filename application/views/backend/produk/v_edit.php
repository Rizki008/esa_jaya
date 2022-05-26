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

                    echo form_open_multipart('master_produk/edit_produk/' . $produk->id_produk) ?>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Nama Produk</label>
                            <input class="form-control" type="text" name="nama_produk" value="<?= $produk->nama_produk ?>" placeholder="Besi Baja">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Kategori Produk</label>
                            <select class="form-control input-lg" name="id_kategori">
                                <option value="<?= $produk->id_kategori ?>"><?= $produk->nama_kategori ?></option>
                                <?php foreach ($kategori as $key => $value) { ?>
                                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Harga</label>
                            <input class="form-control" type="text" name="harga" value="<?= $produk->harga ?>" placeholder="100000">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label>Stock</label>
                            <input class="form-control" type="number" name="stock" value="<?= $produk->stock ?>" placeholder="12">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Berat</label>
                            <input class="form-control" type="number" name="berat" value="<?= $produk->berat ?>" placeholder="12">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Promo</label>
                            <input class="form-control" type="text" name="promo" value="<?= $produk->promo ?>" placeholder="1000">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" data-provide="markdown" data-iconlibrary="fa" rows="10"><?= $produk->deskripsi ?></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="preview_gambar"></input>
                        </div>
                        <div class="form-group col-sm-6">
                            <img src="<?= base_url('uploads/produk/' . $produk->gambar) ?>" id="gambar_load" width="400px">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="<?= base_url('master_produk/produk') ?>" class="btn btn-warning">Kembali</a>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>