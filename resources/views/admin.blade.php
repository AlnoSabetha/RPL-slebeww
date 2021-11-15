@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sidebar template</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<SCRIPT src="/js/scrib.js"></SCRIPT> 
</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning"></span>
            </a>
            <li>
            <a href="/surat/admin">
              <i class="fa fa-folder"></i>
              <span>Surat Masuk</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Surat Keluar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Pengajuan Surat</span>
              <span class="badge badge-pill badge-primary"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2 style="text-align:center;"> Surat Menyurat</h2>
      <hr>
      </div>
      <h5>Fitur</h5>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="img/masuk.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
            <div class="card-body text-center">
                <h6 class="card-title">Surat Masuk</h6>
                <a href="/surat/admin" target="_blank" class="btn btn-primary btn-sm">Masuk</a>
            </div>
          </div>          
        </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="img/keluar.jpg" class="card-img-top rounded-0" alt="Angular pro sidebar">
            <div class="card-body text-center">
                <h6 class="card-title">Surat Keluar</h6>
                <a href="#" target="_blank" class="btn btn-success btn-sm">Keluar</a>
            </div>
          </div>          
        </div>
      </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="./script.js"></script>

</body>
</html>
				                            
@endsection


