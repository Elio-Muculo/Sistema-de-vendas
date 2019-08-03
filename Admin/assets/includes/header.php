<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/Bv4/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- LIBRARY CHART JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">
    </script>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapperr">
      <nav class="navbar navbar-light bg-dark py-4 mt-0"  style="margin-top: 0 auto;">
        <a class="navbar-brand px-5" style="color:#fff; font-size: 24px;">TECH - MOZ</a>
        <form class="form-inline">
            <a href="../php_action/log.php" class="px-5" style="color:#fff; font-size: 24px;">LOGOUT</a>
        </form>
      </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav flex-column" id="main-menu">
                    <li class="nav-item py-3  px-2">
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                    <li  class="nav-item py-3  px-2">
                        <a href="static.php"><i class="fa fa-bar-chart-o "></i>Estatística<span class="badge"></span></a>
                    </li>
                    <li  class="nav-item py-3  px-2">
                        <a href="vendas.php"><i class="fa fa-barcode "></i>Vendas <span class="badge"></span></a>
                    </li>
                    <li  class="nav-item py-3 px-2">
                        <a href="ui.php"><i class="fa fa-cog "></i>Definições<span class="badge"></span></a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
