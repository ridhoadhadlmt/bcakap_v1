<?php
include 'header.php';

?>
<div class="background-blog">
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4" data-aos="fade-out">BLOG </h1>
  </div>  
 </div>
<div class="container">
 <div class="category">
  <div class="row">
   <div class="col-md-3">
    <a href="blog-kategori.php?kategori=bijak" class="btn btn-outline-primary" style="width: 100%">Bijak</a> 
   </div>
   <div class="col-md-3">
        <a href="blog-kategori.php?kategori=cerdas" class="btn btn-outline-primary" style="width: 100%">Cerdas</a> 
   </div> 
   <div class="col-md-3">
        <a href="blog-kategori.php?kategori=kreatif" class="btn btn-outline-primary" style="width: 100%">Kreatif</a> 
   </div>
   <div class="col-md-3">
        <a href="blog-kategori.php?kategori=produktif" class="btn btn-outline-primary" style="width: 100%">Produktif</a> 
   </div>
  </div> 
  <hr>
 </div> 
 <div class="row" id="content-1">
 <div class="col-md-2">
  <h4>Featured Post</h4>
  
  
  <?php 
      $feature = mysqli_query($koneksi,"SELECT*FROM tb_post LIMIT 3");
   ?> 

   <?php foreach ($feature as $featured): ?>
      <div class="blog_feature">
        <a href="<?= $featured['post_link'] ?>"><img src="<?= "img/blog/".$featured['post_image'] ?>" class="img-fluid"> 
        <h6><?= $featured['post_title'] ?></h6></a>
        <span><?= date('d/m/Y',strtotime($featured['post_date'])) ?></span>
      </div>
   <?php endforeach ?>
 </div> 
 
 <div class="col-md-4">
  <h4>Lastest Post</h4>

    <?php foreach (getLastPost() as $last): ?>
      <div class="blog_feature">
        <a href="<?= $last['post_link'] ?>"><img src="<?= "img/blog/".$last['post_image']; ?>" class="img-fluid"></a>
        <h5><a href="<?= $last['post_link'] ?>"><?= $last['post_title'] ?></a></h5>
        <span><?= date('d/m/Y',strtotime($featured['post_date'])) ?></span>
        <p>
            <?php 
              if ( str_word_count($last['post_content']) > 60 ){
                  echo substr($last['post_content'],0,200); 
              } 
                else{
                  echo $last['post_content'];
              }
             ?>
         </p>
      </div>
    <?php endforeach ?>

 </div>

 <div class="col-md-6 ">
  <h4>New Post</h4>
  
  <?php foreach (newPost() as $new): ?>
    <div class="blog_feature">
      <img src="<?= "img/blog/".$new['post_image']; ?>" class="img-fluid">
      <h5><a href="<?= $new['post_link'] ?>" ><?= $new['post_title'] ?></a></h5>
      <span><?= date('d/m/Y',strtotime($featured['post_date'])) ?></span> 
      <p>
         <?php 
            if ( str_word_count($last['post_content']) > 60 ){
                echo substr($last['post_content'],0,500); 
            } 
              else{
                echo $last['post_content'];
            }
           ?>
      </p>
    </div>
  <?php endforeach ?>


 </div> 
 </div>  
</div>
</div>

<div class="content-blog">
 <div class="container text-center">
 	<div class="content-wrapper">
  
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
	.background-blog .jumbotron{
    background: #FF0000;
    color: #fff;
    
  }
  #content-1 a{
    text-decoration: none;
    color: #000;
  }
  #content-1 h4{
    font-family: 'Antic',sans-serif;
  }
  #content-1 h5{
    font-family: 'Ropa Sans',sans-serif;
  }
  #content-1 h6{
   font-family: 'Ropa Sans',sans-serif; 
  }
  #content-1 span{
   font-family: 'Ropa Sans',sans-serif; 
  }
  .blog_feature{
    margin-bottom: 30px;
  }
</style>