<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
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
                        <th>Seksi</th>
                        <th>Kepala Seksi</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_kasi as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_bidang; ?></td>
                        <td><?= $row->nama_seksi; ?></td>
                        <td><?= $row->nama_pengguna; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Kepala Seksi</h1>
            <form action="<?= base_url('seksi/insert_kasi'); ?>" method="post">
            <select name="seksi" id="seksi">
                <?php foreach($data_seksi as $row){ ?>
                <option value="<?php echo $row->id_seksi; ?>"><?=$row->nama_bidang," - ",$row->nama_seksi; ?></option>
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
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Seksi</th>
                        <th>Bidang</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_seksi as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_seksi; ?></td>
                        <td><?= $row->nama_bidang; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Seksi</h1>
            <form action="<?= base_url('seksi/insert_seksi'); ?>" method="post">
            <select name="bidang" id="bidang">
                <?php foreach($data_bidang as $row){ ?>
                <option value="<?php echo $row->id_bidang; ?>"><?=$row->nama_bidang; ?></option>
                <?php } ?>
            </select>
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>