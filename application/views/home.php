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
            <h1>Bidang</h1>
            <form action="<?= base_url('home/insert_bidang'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Seksi</h1>
            <form action="<?= base_url('home/insert_seksi'); ?>" method="post">
            <select name="bidang" id="bidang">
                <?php foreach($data_bidang as $row){ ?>
                <option value="<?php echo $row->id_bidang; ?>"><?=$row->nama_bidang; ?></option>
                <?php } ?>
            </select>
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Jabatan Staf</h1>
            <form action="<?= base_url('home/insert_jabatan'); ?>" method="post">
            <select name="seksi" id="seksi">
                <?php foreach($data_seksi as $row){ ?>
                <option value="<?php echo $row->id_seksi; ?>"><?=$row->nama_seksi; ?></option>
                <?php } ?>
            </select>
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Pendidikan</h1>
            <form action="<?= base_url('home/insert_pendidikan'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Jurusan</h1>
            <form action="<?= base_url('home/insert_jurusan'); ?>" method="post">
            <select name="jurusan" id="jurusan">
                <?php foreach($data_pendidikan as $row){ ?>
                <option value="<?php echo $row->id_pendidikan; ?>"><?=$row->nama_pendidikan; ?></option>
                <?php } ?>
            </select>
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
        <div class="row">
            <h1>Pengguna</h1>
            <form action="<?= base_url('home/insert_pengguna'); ?>" method="post">
            <select name="jabatan" id="jabatan">
                <?php foreach($data_jabatan as $row){ ?>
                <option value="<?php echo $row->id_jabatan; ?>"><?=$row->nama_jabatan; ?></option>
                <?php } ?>
            </select>
            <select name="jurusan" id="jurusan">
                <?php foreach($data_jurusan as $row){ ?>
                <option value="<?php echo $row->id_jurusan; ?>"><?=$row->nama_jurusan; ?></option>
                <?php } ?>
            </select>
            <input type="text" name="username" id="username">
            <input type="password" name="password" id="password">
            <input type="email" name="email" id="email">
            <input type="text" name="nama" id="nama">
            <input type="date" name="bday" id="bday">
            <input type="text" name="alamat" id="alamat">
            <input type="text" name="golongan" id="golongan">
            <input type="text" name="level" id="level">
            <input type="text" name="nik" id="nik">
            <input type="text" name="nip" id="nip">
            <input type="text" name="telepon" id="telepon">
            <button type="submit">KIRIM</button>
            </form>        
        </div>

        <div class="row">
            <h1>Kabid</h1>
            <form action="<?= base_url('home/insert_kabid'); ?>" method="post">
            <select name="bidang" id="bidang">
                <?php foreach($data_bidang as $row){ ?>
                <option value="<?php echo $row->id_bidang; ?>"><?=$row->nama_bidang; ?></option>
                <?php } ?>
            </select>
            <select name="nama" id="nama">
                <?php foreach($data_pengguna as $row){ ?>
                <option value="<?php echo $row->id_pengguna; ?>"><?=$row->nama_pengguna; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>

        <div class="row">
            <h1>Kasi</h1>
            <form action="<?= base_url('home/insert_kasi'); ?>" method="post">
            <select name="seksi" id="seksi">
                <?php foreach($data_seksi as $row){ ?>
                <option value="<?php echo $row->id_seksi; ?>"><?=$row->nama_seksi; ?></option>
                <?php } ?>
            </select>
            <select name="nama" id="nama">
                <?php foreach($data_pengguna as $row){ ?>
                <option value="<?php echo $row->id_pengguna; ?>"><?=$row->nama_pengguna; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>

        <div class="row">
            <h1>Staf</h1>
            <form action="<?= base_url('home/insert_staf'); ?>" method="post">
            <select name="jabatan" id="jabatan">
                <?php foreach($data_jabatan as $row){ ?>
                <option value="<?php echo $row->id_jabatan; ?>"><?=$row->nama_jabatan; ?></option>
                <?php } ?>
            </select>
            <select name="nama" id="nama">
                <?php foreach($data_pengguna as $row){ ?>
                <option value="<?php echo $row->id_pengguna; ?>"><?=$row->nama_pengguna; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>