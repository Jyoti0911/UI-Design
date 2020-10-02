
<?php
 include "include/link.php";
?>

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/service.css">
    
  <!--  <link rel="stylesheet" href="css/price.css">-->
  </head>
</body>

<header>
  <?php
    include "include/nav.php";
  ?>
</header>
 <!--contact section start-->
 <div class=" contacts-section">
      <div class="contacts-info">
        <h1>Lorem Ipsum is simply dummy text</h1>
        <img src="image/contact.jpg">
        <div class="informa">
        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of</p>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of</p>
        </div>
        <h1>Our Location</h1>
        <div><i class="fas fa-map-marker-alt"></i>Location</div>
        <div><i class="fas fa-envelope"></i>contact@gmail.com</div>
        <div><i class="fas fa-phone"></i>+910000000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
     
      <div class="contacts-form">
        <div class="how-can">
        
        <h2>How can we help?</h2>
        </div>
        <p>Reach out Us to directly</p>
        <button class="contact-btn1"><a href="#">Book an Appointment<i class="fas fa-calendar"></i></a></button>
        <button class="contact-btn1"><a href="#">Let's Talk<i class="fas fa-phone"></i></a></button>
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <input type="number" name="phone" class="text-box" placeholder="Your Phone" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
   </div>

    <div class="container-fluid">
   <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-dark approach"> 
        <h1 class="card-title text-center text-light pt-4">Our Approach</h1>
        <p class="card-text text-center text-light pd-4">Everything made simple, transparent & easy!</p>   
        <div class="se" >  <a href="#" class="btn btn-primary con">More AboutUs</a></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card ">
      <div class="card-body bg-success approach">
        <h1 class="card-title text-center pt-4">Our Services</h1>
        <p class="card-text text-center pd-4">Everything you need to grow your business, free!</p>
     <div class="se" > <a href="services.php" class="btn btn-primary con">Our services</a></div>
      </div>
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



<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script>$(document).ready(function() {
     
     $(".search").click(function() {
        $(".search-box").toggle();
        $("input[type='text']").focus();
      });
   
    });</script>
</body>
</html>            