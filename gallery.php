<?php
 include "include/link.php";
?>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/service.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <title>UttamGlowSign</title>
</head>
  <body> 
      <header>
          <?php
           include "include/nav.php";
          ?>
      </header>
</head>
<body>

<div class="container gallery-container">

    <h1>Image Gallery</h1>

   
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic1.jpg">
                    <img src="image/pic1.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic2.jpg">
                    <img src="image/pic2.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="image/pic3.jpg">
                    <img src="image/pic3.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic2.jpg">
                    <img src="image/pic2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic3.jpg">
                    <img src="image/pic3.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic1.jpg">
                    <img src="image/pic1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic2.jpg">
                    <img src="image/pic2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic3.jpg">
                    <img src="image/pic3.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="image/pic1.jpg">
                    <img src="image/pic1.jpg" alt="">
                </a>
            </div>
        </div>
</div>
</div>

<div class="cards">
     <div class="services">
        <div class="content content-4">
          <div class="fa fa-desktop icon"> 
   </div>
   <p>Couldn’t find what you needed?</p>
   <h2>Search Here</h2>
  <form role="form">
  <div class="form-group">
    <input type="text" class="form-control empty" id="iconified" placeholder="&#xF002; Search"/>
  </div>
</form>
      </div>
    <div class="content content-5">
          <div class=" icon">
          <img src="image/need1.png">
    </div>
   <p>Need Help?</p>
   <h2>Lets:</h2>
 <div class="need-help">
        <a href="price.php" type="button" class=" need">Book<i class="fa fa-angle-double-down"></i></a>
        <a href="port.php" type="button" class=" need">Call<i class="fa fa-phone"></i></a>
        <a href="tel:++919852559968" type="button" class=" need">Email<i class="fa fa-envelope"></i></a>
        </div>
        </div>
  </div>
  </div>
<footer>
 <?php
  include "include/footer.php";
 ?>
</footer>
<?php
 include "include/foot_link.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
    baguetteBox.run('.tz-gallery');
</script>
<script>$(document).ready(function() {
     
     $(".search").click(function() {
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });
   
    });</script>
</body>
</html>