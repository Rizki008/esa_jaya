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
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Cover</th>
                        <th>Jumlah Gambar</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Cover</th>
                        <th>Jumlah Gambar</th>
                        <th>Setting</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($gambar as $key => $value) { ?>
                        <tr>
                            <td><?= $value->nama_produk ?></td>
                            <td><img src="<?= base_url('uploads/produk/' . $value->gambar) ?>" alt="" width="100px"></td>
                            <td><?= $value->total_gambar ?></td>
                            <td>
                                <a href="<?= base_url('master_produk/add_gambar/' . $value->id_produk) ?>" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>