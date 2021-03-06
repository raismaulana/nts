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
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <a href="<?= base_url('kegiatan/input_kegiatan/'.$this->uri->segment(2)); ?>" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                        <th>Kuantitas Output</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_kegiatan as $row){ ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td scope="row"><?= $row->tanggal_kegiatan; ?></td>
                        <td scope="row"><?= $row->aktivitas_kegiatan; ?></td>
                        <td scope="row"><?= $row->kuantitas_output_kegiatan; ?></td>
                        <td scope="row"><?= $row->waktu_kegiatan; ?></td>
                        <td scope="row"><?php if($row->status_kegiatan == '0'){echo "Waiting";} else if($row->status_kegiatan == '1') {echo "Aprroved";} else {echo "Tertolak";} ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="<?= base_url("kegiatan/edit_kegiatan/$row->id_kegiatan"); ?>" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>