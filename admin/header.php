<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Admin Home Page</title>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <link href="assets/msgbox/jquery.msgbox.css" rel="stylesheet">
    <link href="assets/msgGrowl/css/msgGrowl.css" rel="stylesheet">
    <link href="assets/jquery-ui-1.10.3/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="assets/dropzone/dropzone.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="assets/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <style>
        .ui-autocomplete-loading {
            background: white url('assets/jquery-ui-1.10.3/demos/autocomplete/images/ui-anim_basic_16x16.gif') right center no-repeat;
        }
    </style>
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Bootstrap Full</a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span id="userLoggedIn"></span><i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="php/logoutUser.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="uploadfiles.php">Upload</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>