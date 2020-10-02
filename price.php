<?php ob_start(); ?>
<?php
 include "include/link.php";
?>
   <link rel="stylesheet" href="css/price.css">
   <link rel="stylesheet" href="css/service.css">
  </head>
  <body>
  <header>
   <?php
    include "include/nav.php";
   ?> 
   </header>
   <div class="pricing">
   <div class="container">
  <div class="info">
   <h1>The time has come for you to pick up the phone and give us a call.</h1>
   <p>We can be reached at<a href="#"> 000000000.</a> Or, if you're shy, you can email us at <a href="#">info@support.com</a></p>
   </div>
   <section class="main">
   <div class="information">
   <h1>Fill out the form and get Instant Access to Pricing and More</h1>
   <ul>
       <li> See our pricing packages</li>
       <li> See our pricing packages</li>
       <li> See our pricing packages</li>
       <li> See our pricing packages</li>
   </ul>
   </div>

   <div class="container mt-4 mb-4 price">
   <form>
  <div class="form-group">
  <label for="exampleFormControlInput1">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">What style of services are you looking for?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Web Design</option>
      <option>Web Design</option>
      <option>Web Design</option>
      <option>Digital Marketing</option>
      <option>Web Design</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">What is your budget range?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
 <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>-->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<button type="button" class="btn btn-primary p-2 btn-lg btn-block">Submit</button>
   </div>
</div>
   </div>
   </section>
</main>
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

  </body>
</html>