<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <script src="<?= base_url()?>assets/js/jquery.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-3">
            <?php $this->load->view('user/login_view'); ?>
        </div>
        <div class="col-sm-9">
            <?php $this->load->view($home_view); ?>
        </div>
    </div>
</div>
</body>
</html>