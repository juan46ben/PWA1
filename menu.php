<?php



?>
<!DOCTYPE html>
<html>
<?php include "head.php";?>

<body background="logo.png" class="hold-transition skin-green sidebar-mini"> <!--skin-green-->
<div class="wrapper ">

  <header class="main-header ">
    <!-- Logo -->
    <a href="index.php?tabla=Menu Principal" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php print "Volpy SA";?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">
              <img src="logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php print "Pruebas"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="logo.png" class="img-circle" alt="User Image">

                <p>
                 <?php print "Volpy"; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a  href="loguot.php?Clave=<?php "Volpy SA";?>" class="btn btn-default btn-flat">

                    Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section   class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul   class="sidebar-menu" >
        <li class="header">MENU DE NAVEGACION</li>
<li class="treeview <?php if($_REQUEST['modulo']=='clientes') print "active";?>">
          <a href="Calculator.php?modulo=clientes" >
            <!--<i class="fas fa-user-plus"></i>-->
            <span>Calcular</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">+</span>
            </span>
          </a>
          
           
        </li>

       
     



        <li class="header">FIN DEL MENU</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php ;?>
        <small>Sistema de gestion</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?tabla=Tablero"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Modulos</li>
       <!--<li class="active"><?php print $_REQUEST['modulo'];?></li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">