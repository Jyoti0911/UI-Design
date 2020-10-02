<?php
 include "include/link.php";
?>
    <link rel="stylesheet" href="css/service.css">
   
    <title>UttamGlowSign</title>
</head>
  <body> 
      <header>
          <?php
           include "include/nav.php";
          ?>
      </header>

        <!--  ======================== Services Area ==============================  -->
 
      <div class="cards">
      <h1>Our Services</h1>
     <div class="services">
        <div class="content content-1">
          <div class="fa fa-users icon">
   </div>
   <h2>Web Design</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?</p>
   <ul>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   </ul>
   <a href="#">Read More</a>
        </div>
          <div class="content content-2">
          <div class="fa fa-industry icon">
   </div>
   <h2>Web Design</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?</p>
    <ul>
    <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   </ul>
    <a href="#">Read More</a>
        </div>
    <div class="content content-3">
          <div class="fa fa-desktop icon">
    </div>
   <h2>Web Design</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?</p>
   <ul>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   <p><i class="fas fa-bar-chart serv" aria-hidden="true"></i> ipsum dolor sit amet,</p>
   </ul>
   <a href="#">Read More</a>
        </div>
  </div>
  </div>
   <!--  ======================== end services Area ==============================  -->
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
<script src="js/app.js"></script>
<script>$(document).ready(function() {
     
     $(".search").click(function() {
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });
   
    });</script>
  </body>
</html>        