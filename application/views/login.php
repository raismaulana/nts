<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-dark" role="alert">
                <strong><?= $this->session->flashdata('info')?></strong>
            </div>
            <?php }; ?>
            <form action="<?= base_url('auth/login'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="username">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
            </form>
        </div>
    </div>
    
</body>
</html>