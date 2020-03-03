<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
    <nav class="nav justify-content-end">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
    </nav>

    <div class="container">
        <div class="row">
            <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-dark" role="alert">
                <strong><?= $this->session->flashdata('info')?></strong>
            </div>
            <?php }; ?>
            <form action="<?= base_url('laporan/insert_laporan'); ?>" method="get">
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="hidden" name="id" value="<?php echo $this->uri->segment(2); ?>">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Laporan</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_laporan as $row){ ?>
                    <tr>
                        <td><?= $row->tahun_laporan,"-",$row->bulan_laporan; ?></td>
                        <td scope="row"><?= $row->status_laporan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="<?= base_url("kegiatan/$row->id_laporan"); ?>" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>