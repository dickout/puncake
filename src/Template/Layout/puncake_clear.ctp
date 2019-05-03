<!doctype html>
<html lang="en">
    <head>
        <title>Puncake ::</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="author" content="by Dickout">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <link rel="stylesheet" href="<?=$this->puncake?>/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?=$this->puncake?>/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
        <link rel="stylesheet" href="<?=$this->puncake?>/assets/vendor/chartist/css/chartist.min.css">
        <link rel="stylesheet" href="<?=$this->puncake?>/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
        <link rel="stylesheet" href="<?=$this->puncake?>/assets/vendor/toastr/toastr.min.css">

        <link rel="stylesheet" href="<?=$this->puncake?>/assets/css/main.css">
        <link rel="stylesheet" href="<?=$this->puncake?>/assets/css/color_skins.css">
        <link rel="stylesheet" href="<?=$this->puncake?>/cake/css/main.css">
    </head>

    <body class="theme-purple">

        <div id="wrapper">
            <?= $this->fetch('content') ?>
        </div>

        <!-- Javascript -->
        <script src="<?=$this->puncake?>/assets/bundles/libscripts.bundle.js"></script>
        <script src="<?=$this->puncake?>/assets/bundles/vendorscripts.bundle.js"></script>

        <script src="<?=$this->puncake?>/assets/bundles/chartist.bundle.js"></script>
        <script src="<?=$this->puncake?>/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
        <script src="<?=$this->puncake?>/assets/vendor/toastr/toastr.js"></script>

        <script src="<?=$this->puncake?>/assets/bundles/mainscripts.bundle.js"></script>
        <script src="<?=$this->puncake?>/assets/js/index.js"></script>
    </body>
</html>
