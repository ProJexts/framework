<?php
/**
 * Backend Default Layout
 */

use Nova\Helpers\Assets;
use Nova\Helpers\Profiler;

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    // Add Controller specific data.
    if (is_array($headerMetaData)) {
        foreach($headerMetaData as $str) {
            echo $str;
        }
    }
    ?>
    <title><?= $title.' - '.SITE_TITLE; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
    Assets::css(array(
        // Bootstrap 3.3.5
        site_url('templates/backend/assets/bootstrap/css/bootstrap.min.css'),
        // Font Awesome
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        // Ionicons
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        // Theme style
        site_url('templates/backend/assets/dist/css/AdminLTE.min.css'),
        // AdminLTE Skins. We have chosen the skin-blue for this starter page. However, you can choose
        // any other skin. Make sure you apply the skin class to the body tag so the changes take effect.
        site_url('templates/backend/assets/dist/css/skins/skin-blue.min.css')
    ));

    //Add Controller specific CSS files.
    Assets::css($headerCSSheets);

    //Add Controller specific JS files.
    Assets::js($headerJScripts);
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php
    Assets::css(array(
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ));
    ?>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>N</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Nova</b>Igniter</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">DEMOS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Backend</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <?= $content; ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <?php if(ENVIRONMENT == 'development') { ?>
      <small><?= Profiler::report(); ?></small>
      <?php } ?>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.simplemvcframework.com/" target="_blank"><b>Nova Framework</b></a></strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<?php
Assets::js(array(
    site_url('templates/backend/assets/plugins/jQuery/jQuery-2.1.4.min.js'),
    site_url('templates/backend/assets/bootstrap/js/bootstrap.min.js'),
    site_url('templates/backend/assets/dist/js/app.min.js'),
));

//Add Controller specific JS files.
Assets::js($footerJScripts);
?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
