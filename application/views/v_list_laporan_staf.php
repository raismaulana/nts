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
            <p>Laporan staf dari Seksi <b><?php echo $seksi->nama_seksi ?></b></p>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data as $row){ ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>
                        <td><?= $row->nama_pengguna; ?></td>
                        <td scope="row"><?= $row->nama_jabatan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="<?= base_url("laporan/staf/$row->id_pengguna"); ?>" role="button">Lihat Laporan</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>