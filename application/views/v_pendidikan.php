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
                        <th>Kualifikasi</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_kualifikasi as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_pendidikan," ",$row->nama_jurusan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pendidikan</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_pendidikan as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_pendidikan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jurusan</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_jurusan as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_jurusan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Pendidikan</h1>
            <form action="<?= base_url('pendidikan/insert_pendidikan'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Jurusan</h1>
            <form action="<?= base_url('pendidikan/insert_jurusan'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Kualifikasi</h1>
            <form action="<?= base_url('pendidikan/insert_kualifikasi'); ?>" method="post">
            <select name="pendidikan" id="pendidikan">
                <?php foreach($data_pendidikan as $row){ ?>
                <option value="<?php echo $row->id_pendidikan; ?>"><?=$row->nama_pendidikan; ?></option>
                <?php } ?>
            </select>
            <select name="jurusan" id="jurusan">
                <?php foreach($data_jurusan as $row){ ?>
                <option value="<?php echo $row->id_jurusan; ?>"><?=$row->nama_jurusan; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>