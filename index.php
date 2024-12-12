<?php
include 'header.php';

?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/tni2.jpg" class="d-block w-100" alt="..." width="100%" height="400">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/tni3.jpg" class="d-block w-100" alt="..." width="100%" height="400">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <div class="control-prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span> 
    </div>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <div class="control-next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span> 
    </div>
  </a>
</div>


<div class="container" id="home">
  <div class="row">
  	<div class="col-md-6" data-aos="fade-in">
     
      <img src="img/bela.png" class="img-fluid">
    </div>
    <div class="col-md-6" data-aos="fade-in">
      <h1>APA ITU B'CAKAP ?</h1><hr style="width: 20%;border-top:2px solid #000;">
      <h4>B'CAKAP</h4>
      <div class="caption">
       <p>Melalui website B'CAKAP dan buku, kami tim penyusun mencoba untuk menguraikan perkembangan media sosial di Indonesia dewasa ini serta dampak positif dan negatif media sosial terhadap pribadi, keluarga, masyarakat bangsa dan negara, Diharapkan dengan buku ini kita lebih bijak, cerdas, kreatif dan produktif dalam bermedia sosial.</p>  
      </div>
      <a href="profile.php" class="btn btn-outline-primary">Check Now <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>	
</div>

<div class="blog">
  <div class="container text-center">
    <!-- <h1>BLOG</h1><hr> -->
    <div class="card">
      <div class="card-body">
        <div class="row">          
          <?php 
            $sql = mysqli_query($koneksi,"SELECT*FROM tb_post LIMIT 6");
           ?>
           <?php foreach ($sql as $post): ?>
             
            <div class="col-md-4">
              <div class="card">
                <div class="card-body text-left">
                  <h4 class="card-title"><?= $post['post_title'] ?></h4>
                  <span class="card-text">
                    <?php 
                      if ( str_word_count($post['post_content']) > 60 ){
                          echo substr($post['post_content'],0,200); 
                      } 
                        else{
                          echo $post['post_content'];
                      }
                     ?>
                  </span><br>
                  <a href="<?= $post['post_link'] ?>" class="btn btn-outline-primary">Read More</a>
                </div>
              </div>
            </div>

           <?php endforeach ?>


        </div>
        <a href="blog.php" class="btn btn-outline-primary" id="btn-lihat">Show More <i class="fa fa-arrow-right"></i></a> 
      </div>

    </div>
   
   
</div>
</div>

<!-- <div id="back">
<img src="img/background.jpg" class="img-fluid">
  
</div> -->

<div class="profile">
  <div class="container text-center" id="wrapper">
    <div class="team-penyusun">
      <h1>TEAM PENYUSUN</h1><hr>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/team/abdul.jpg" class="img-fluid">
          <h4>Abdul Kodir, ST</h4>
          <span>Akademi dan Relawan TIK</span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
         <img src="img/team/doni.jpg" class="img-fluid">
          <h4>Muhammad Donni Lesmana Siahaan, S.Kom,M.Kom</h4>
          <span>Dosen Universitas Pancabudi</span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/team/erwin.jpg" class="img-fluid">
          <h4>Mochammad Erwin Radityo SH.,M.Kn.</h4>
          <span>Dosen Universitas Pancabudi</span>
        </div>
      </div>
      <div class="row" id="team2" style="margin-top: 20px;">
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/team/luhut.jpg" class="img-fluid">
          <h4>Luhut Marpaung </h4>
          <span>kolonel inf</span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/team/jalil.jpg" class="img-fluid">
          <h4>M.Jalil Sembiring, A.Md., S.H.</h4>
          <span>Mayor CHK </span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/team/ferry.jpg" class="img-fluid">
          <h4>Ferry Lahe, S.A.P </h4>
          <span>Letkol kav NrP 11980054050974</span>
        </div>
      </div>
    </div>

    <div class="team-designer" style="margin-top: 50px;border-top:1px solid #ddd">
      <h1>TEAM DESIGNER</h1><hr>
      <div class="row">
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/tim-design/ridho1.jpg" class="img-fluid">
          <h4>Ridho Adha Dalimunthe</h4>
          <span>UI/UX </span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
         <img src="img/tim-design/isan.jpg" class="img-fluid">
          <h4>Muhammad Ichsan</h4>
          <span>Web Developer</span>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <img src="img/tim-design/rio.jpg" class="img-fluid">
          <h4>Rio Maulana</h4>
          <span>Design Graphic</span>
        </div>
      </div>
      
    <a href="team.php" class="btn btn-outline-primary">Lihat Semua <i class="fa fa-arrow-right"></i></a>
    </div>
    
  </div>
</div>

<div class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>

