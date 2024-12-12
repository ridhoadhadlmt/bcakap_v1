<?php
include 'header.php';
?>
<div class="background-galeri">
<div class="jumbotron">
  <div class="container">
  	<h1 class="display-4" data-aos="fade-out">GALERI </h1>
  </div>	
 </div>	
</div>

<div class="galeri">
 <div class="container text-center">
  <!-- <h1>GALERI</h1><hr>	 -->
  <div class="row">
   <div class="col-md-3" data-aos="fade-in">
   	<img src="img/galeri/galeri.jpg" class="img-fluid img-responsive img-thumbnail">
   </div>	
   <div class="col-md-3" data-aos="fade-in">
   	<img src="img/galeri/galeri1.jpg" class="img-fluid img-responsive img-thumbnail">
   </div>
   <div class="col-md-3" data-aos="fade-in">
   	<img src="img/galeri/galeri2.jpg" class="img-fluid img-responsive img-thumbnail">
   </div>	
   <div class="col-md-3" data-aos="fade-out">
   	<img src="img/galeri/galeri3.jpg" class="img-fluid img-responsive img-thumbnail">
   </div>
  </div>
  <div class="row">
  	<div class="col-md-4" data-aos="fade-out">
  	 <img src="img/galeri/galeri3.jpg" class="img-fluid img-responsive rounded ">	
  	</div>
  	<div class="col-md-4" data-aos="fade-out">
  	 <img src="img/galeri/galeri2.jpg" class="img-fluid img-responsive rounded ">	
  	</div>
  	<div class="col-md-4" data-aos="fade-out">
  	 <img src="img/galeri/galeri.jpg" class="img-fluid img-responsive rounded ">	
  	</div>
  </div>
  <div class="row">
    <div class="col-md-6" data-aos="fade-out">
      <img src="img/galeri/tni.jpg" class="img-fluid">
    </div>
    <div class="col-md-6" data-aos="fade-out">
    <img src="img/galeri/tni2.jpg" class="img-fluid">
    </div>
  </div>
  <div class="row" class="container">
    <img src="img/galeri/tni3.jpg" class="img-fluid">
  </div>	
 </div>	
</div>


<?php

include 'footer.php';
?>

<style type="text/css">
	body{
    font-family: 'Raleway',sans-serif;
    margin-bottom: 800px;		
	}
	.background-galeri{
	}
	.background-galeri .jumbotron{
		background: #FF0000;
		color: #fff;
	}
	.background-galeri .jumbotron .container .display-4{
		/*font-family: 'Raleway', sans-serif;*/
	}
	.galeri .container .row .col-md-6{
		/*border:1px solid #000;*/
		/*height: 100px;*/
	}
  .galeri .container h1{
    font-family: 'Alegreya Sans SC',sans-serif;
  }
  .galeri .container hr{
    width: 10%;
    border-top: 2px solid #000;
  }
	.galeri .container .row{
		margin-top: 50px;
	}
</style>