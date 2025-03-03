<?php 

    include 'koneksi.php';
    include 'function.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>B'Cakap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
  <link rel="shortcut icon"  href="assets/icon/favicon.ico">


	<link href="https://fonts.googleapis.com/css?family=Abel|Baloo|Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Antic&display=swap" rel="stylesheet">

</head>
<body id="myBody">
<div class="container-fluid fixed-top" id="header">
<div class="row" style="height: 10px;">
  	<div class="col-md-8" style="background: #FED700">
  		
  	</div>
  	<div class="col-md-2" style="background: #003399;">
  		
  	</div>
  	<div class="col-md-2" style="background: #FF0000">
  		
  	</div>
</div>	
</div>	
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top" id="navbar" style="margin-top: 10px;">
<div class="container">	
  <a href="index.php" class="navbar-brand">
    <img src="img/logo.png" class="w-25">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: #fff"></span>
  </button>	
  <div class="collapse navbar-collapse" id="myNavbar">

  	<ul class="navbar-nav ml-auto">
  	<li class="nav-item"><a href="index.php" class="nav-link" id="li-home">Home</a></li>
    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="news.php" class="nav-link">News</a></li>
  	<li class="nav-item"><a href="team.php" class="nav-link">Team</a></li>
  	<li class="nav-item"><a href="galeri.php" class="nav-link">Galeri </a></li>
    <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
  	<li class="nav-item"><a href="contact.php" class="nav-link">Contact </a></li>
    <li class="nav-item"><a href="about.php" class="nav-link">About </a></li>
    <form class="form-inline"></form>
  	<!-- <li class="nav-item"><a href="" class="btn btn-default" id="btn-search" data-toggle="modal" data-target="#search" ><i class="fa fa-search fa-lg"></i></a></li> -->
  	<a href="" class="navbar-brand"></a>
  </ul>
  </div>
</div>  
</nav>
<div class="modal fade" role="dialog" id="search">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" id="mySearch" name="" placeholder="Search...">
      </div>
    </div>
  </div>
</div>