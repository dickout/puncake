<!doctype html>
<html lang="en">
    <head>
        <title>Puncake :: <?=$this->fetch('title')?></title>
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

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="http://www.wrraptheme.com/templates/lucid/html/assets/images/logo-icon.svg"
                        width="48" height="48" alt="Lucid"></div>
            </div>
        </div>
        <!-- Overlay For Sidebars -->

        <div id="wrapper">

            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>

                    <div class="navbar-brand">
                        <a href="<?=$this->url?>puncake"><img
                                src="http://www.wrraptheme.com/templates/lucid/html/assets/images/logo.svg" alt="Lucid Logo"
                                class="img-responsive logo"></a>
                    </div>
                </div>
            </nav>

            <div id="left-sidebar" class="sidebar">
                <div class="sidebar-scroll">
                    <div class="user-account">
                        <img src="<?=$this->puncake?>/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                        <div class="dropdown">
                            <span>Welcome,</span>
                            <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                data-toggle="dropdown"><strong>Dickout</strong></a>
                            <ul class="dropdown-menu dropdown-menu-right account">
                                <li><a href="<?=$this->url?>users/logout"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content p-l-0 p-r-0">
                        <div class="tab-pane active" id="menu">
                            <nav id="left-sidebar-nav" class="sidebar-nav">
                                <ul id="main-menu" class="metismenu">
                                    <li>
                                        <a href="<?=$this->url?>pages" class="has-arrow">
                                            <i class="icon-puzzle"></i>
                                            <span>Pages</span>
                                        </a>
                                        <ul>
                                            <li><a href="<?=$this->url?>pages">List</a></li>
                                            <li><a href="<?=$this->url?>pages/add">Add</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url?>templates" class="has-arrow">
                                            <i class="icon-layers"></i>
                                            <span>Templates</span>
                                        </a>
                                        <ul>
                                            <li><a href="<?=$this->url?>templates">List</a></li>
                                            <li><a href="<?=$this->url?>templates/add">Add</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url?>options" class="has-arrow">
                                            <i class="icon-grid"></i>
                                            <span>Options</span>
                                        </a>
                                        <ul>
                                            <li><a href="<?=$this->url?>options">List</a></li>
                                            <li><a href="<?=$this->url?>options/add">Add</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url?>images" class="has-arrow">
                                            <i class="icon-picture"></i>
                                            <span>Images</span>
                                        </a>
                                        <ul>
                                            <li><a href="<?=$this->url?>images">List</a></li>
                                            <li><a href="<?=$this->url?>images/add">Add</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div id="main-content">
                <div class="container-fluid">
                    <?= $this->fetch('content') ?>
                </div>
            </div>

        </div>

        <!-- Javascript -->
        <script src="<?=$this->puncake?>/assets/bundles/libscripts.bundle.js"></script>
        <script src="<?=$this->puncake?>/assets/bundles/vendorscripts.bundle.js"></script>

        <script src="<?=$this->puncake?>/assets/bundles/chartist.bundle.js"></script>
        <script src="<?=$this->puncake?>/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
        <script src="<?=$this->puncake?>/assets/vendor/toastr/toastr.js"></script>

        <script src="<?=$this->puncake?>/assets/bundles/mainscripts.bundle.js"></script>
        <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
        <script src="<?=$this->puncake?>/cake/js/ckeditor.js"></script>
    </body>
</html>