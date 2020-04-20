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
                        <th>Pengguna</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_pengguna as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_pengguna; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        
        <div class="row">
            <h1>Pengguna</h1>
            <form action="<?= base_url('pengguna/insert_pengguna'); ?>" method="post">
            <label for="jabatan">Jabatan</label>
            <select name="jabatan" id="jabatan">
                <?php foreach($data_jabatan as $row){ ?>
                <option value="<?php echo $row->id_jabatan; ?>"><?=$row->nama_jabatan; ?></option>
                <?php } ?>
            </select>
            <label for="kualifikasi">Kualifikasi</label>
            <select name="kualifikasi" id="kualifikasi">
                <?php foreach($data_kualifikasi as $row){ ?>
                <option value="<?php echo $row->id_kualifikasi; ?>"><?=$row->nama_pendidikan," ",$row->nama_jurusan; ?></option>
                <?php } ?>
            </select>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
            <label for="bday">tanggal lahir</label>
            <input type="date" name="bday" id="bday">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat">
            <select name="kecamatan" id="kecamatan">
                <?php foreach($data_alamat as $row){ ?>
                <option value="<?php echo $row->id_kecamatan; ?>"><?=$row->nama_kecamatan,", ",$row->nama_kabupaten, ", ",$row->nama_provinsi; ?></option>
                <?php } ?>
            </select>
            <label for="golongan">golongan</label>
            <input type="text" name="golongan" id="golongan">
            <label for="level">level</label>
            <select name="level" id="level">
                    <option value="1">Staf</option>
                    <option value="2">Kasi</option>
                    <option value="3">Kabid</option>
                    <option value="4">Admin</option>
            </select>
            <label for="nik">nik</label>
            <input type="text" name="nik" id="nik">
            <label for="nip">nip</label>
            <input type="text" name="nip" id="nip">
            <label for="telepon">telepon</label>
            <input type="text" name="telepon" id="telepon">
            <button type="submit">KIRIM</button>
            </form>        
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pengguna</th>
                        <th>Jabatan</th>
                        <th>Seksi</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_staf as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_pengguna; ?></td>
                        <td><?= $row->nama_jabatan; ?></td>
                        <td><?= $row->nama_seksi; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="row">
            <h1>Staf</h1>
            <form action="<?= base_url('pengguna/update_staf'); ?>" method="post">
            <select name="staf" id="staf">
                <?php foreach($data_staf as $row){ ?>
                <option value="<?php echo $row->id_staf; ?>"><?=$row->nama_pengguna, " (",$row->nama_pengguna,")"; ?></option>
                <?php } ?>
            </select>
            <select name="seksi" id="seksi">
                <?php foreach($data_seksi as $row){ ?>
                <option value="<?php echo $row->id_seksi; ?>"><?=$row->nama_seksi; ?></option>
                <?php } ?>
            </select>
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>