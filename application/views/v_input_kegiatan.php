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
        <form action="<?= base_url('kegiatan/insert_kegiatan'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label for="aktivitas">Aktivitas</label>
            <input type="text" name="aktivitas" id="aktivitas">
            <br>
            <label for="kuantitas_output">Kuantitas Output</label>
            <input type="text" name="kuantitas_output" id="kuantitas_output">
            <br>
            <label for="tanggal">Tanggal</label>
            <input type="text" name="tanggal" id="tanggal" value="<?= date('Y-m-d'); ?>" readonly>
            <br>
            <label for="waktu">Waktu</label>
            <input type="time" name="waktu" id="waktu" >
            <br>
            <button type="submit">Simpan</button>
        </form>
    </div>
    
</body>
</html>