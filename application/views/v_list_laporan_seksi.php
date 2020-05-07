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
            <p>Laporan seksi dari Bidang <b><?php echo $bidang->nama_bidang ?></b></p>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Seksi</th>
                        <th>Kasi</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data as $row){ ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>
                        <td><?= $row->nama_seksi; ?></td>
                        <td scope="row"><?= $row->nama_pengguna; ?></td>
                        <td><form action="<?= base_url('laporan/staf'); ?>" method="get">
                        <input name="id_seksi" id="id_seksi" value="<?php echo $row->id_seksi ?>" hidden>
                        <button type="submit">Lihat</></form></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>