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
                        <th>Nama</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($data_jabatan as $row){ ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $row->nama_jabatan; ?></td>
                        <td><a name="edit" id="edit" class="btn btn-dark" href="#" role="button">Edit</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h1>Jabatan</h1>
            <form action="<?= base_url('jabatan/insert_jabatan'); ?>" method="post">
            <input type="text" name="nama" id="nama">
            <button type="submit">KIRIM</button>
            </form>        
        </div>
    </div>
    
</body>
</html>