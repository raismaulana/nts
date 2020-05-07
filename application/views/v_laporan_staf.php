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
        <p>Nama: <?php foreach($data_laporan as $row){ echo $row->nama_pengguna; break;} ?></p>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Laporan</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_laporan as $row){ ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>
                        <td><?= $row->tahun_laporan,"-",$row->bulan_laporan; ?></td>
                        <td scope="row"><?php if($row->status_laporan == '0'){echo "On Going";} else if($row->status_kegiatan == '1') {echo "Aprroved";} else {echo "Tertolak";} ?></td>
                        <td><a name="edit" id="edit" class="btn btn-primary" href="<?= base_url("kegiatan/staf/$row->id_laporan"); ?>" role="button">Lihat Kegiatan</a>
                        <a name="edit" id="edit" class="btn btn-success" href="<?= base_url("laporan/approve/$row->id_laporan"); ?>" role="button">Approve</a>
                        <a name="edit" id="edit" class="btn btn-danger" href="<?= base_url("laporan/decline/$row->id_laporan"); ?>" role="button">Decline</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>