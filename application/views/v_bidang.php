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
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Bidang</th>
                        <th>Kepala Bidang</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_kabid as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_bidang; ?></td>
                        <td><?= $row->nama_pengguna; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Kepala Bidang</h1>
            <form action="<?= base_url('bidang/insert_kabid'); ?>" method="post">
            <select name="bidang" id="bidang">
                <?php foreach($data_bidang as $row){ ?>
                <option value="<?php echo $row->id_bidang; ?>"><?=$row->nama_bidang; ?></option>
                <?php } ?>
            </select>
            <select name="pengguna" id="pengguna">
                <?php foreach($data_pengguna as $row){ ?>
                <option value="<?php echo $row->id_pengguna; ?>"><?=$row->nama_pengguna,"(",$row->username_pengguna,")"; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_bidang as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_bidang; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Bidang</h1>
            <form action="<?= base_url('bidang/insert_bidang'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>