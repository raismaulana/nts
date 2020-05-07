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
            <p>Nama: <?php foreach($data_kegiatan as $row){ echo $row->nama_pengguna; break;} ?></p>
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
                        <td><a name="edit" id="edit" class="btn btn-success" href="<?= base_url("kegiatan/approve/$row->id_kegiatan"); ?>" role="button">Approve</a>
                        <a name="edit" id="edit" class="btn btn-danger" href="<?= base_url("kegiatan/decline/$row->id_kegiatan"); ?>" role="button">Decline</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>