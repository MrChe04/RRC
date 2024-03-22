

<?php
extract($_POST);
session_start();
include("dbconnect.php");
if(isset($_POST['btn']))
{
  $uname=$_REQUEST['username'];
  $password=$_REQUEST['password'];
   
   if($conn->connect_error)
   {
     die("Connection failed: " . $conn->connect_error);
   }
   else
   {
     $qry="select * from admin where username='$uname' and password='$password'";
	 $result = mysqli_query($conn, $qry);
	 
	  if (mysqli_num_rows($result))
	  {
	  ?>
	  <script language="javascript">
	  alert("login Success");
	  window.location.href="admin_home.php";
	  </script>
	  <?php
	  
      }
	
	else
	 {
	 ?>
	 <script language="javascript">
	 alert("Invalid user");
	 </script>
	 <?php
	 
	 }
   }
  $conn->close();
}
  ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Best Food Mapping | Admin :  </title>

    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
          <h1> <a class="navbar-brand" href="#">
                  <span class="fa fa-coffee"></span> Best Food Mapping 
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="admin.php">Admin</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="restaurant.php">Restaurant</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="user.php">User</a>
                  </li>
				  <li class="nav-item active">
                      <a class="nav-link" href="review_page.php">Review</a>
                  </li>
              </ul>

              <!--/search-right-->
              
                  <!-- search popup -->
                   
                  <!-- /search popup -->
             
              <!--//search-right-->
              
          <!-- toggle switch for light and dark theme -->
         
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-4 py-md-3">
          
        </div>
    </div>
</section>
 
 
    <!-- /specification-6-->
     
       
 
<!-- //specification-6-->
<!-- /homeblock2-->
 
<!-- //homeblock2-->
<!-- middle -->
 <!-- //middle -->
<section class="w3l-team section py-5" id="team">
  <div class="container py-lg-5 py-md-4">
         
      <h3 class="title-big text-center mb-md-5 mb-4">Review</h3>
        <form name="form1" method="post" action="">
          <table width="342" height="57" border="2" align="center">
            <tr>
              <td><h4>ID</h4></td>
              <td><h4>UserName</h4></td>
              <td><h4>Hotel</h4></td>
              <td><h4>FeedBack</h4></td>
            </tr>
            <?php
	 $qq="Select * from user_feedback";
	 $result =$conn->query($qq);
	 
	 while($row =$result->fetch_assoc())
	 {
	 ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['username'];?></td>
              <td><?php echo $row['hotel'];?></td>
              <td><?php echo $row['feedback'];?></td>
            </tr>
            <?php
	 }
	 ?>
          </table>
        </form>
    </div>
</section>
<section class="w3l-footer-29-main">
   
  <div class="bottom-copies text-center">
    <div class="container">
      <p class="copy-footer-29"> All rights reserved | Designed by <a
          href="#">Admin</a></p>
    </div>
  </div>

  <!-- move top -->
 >
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- js for portfolio lightbox -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery.chocolat.js "></script>
<!--light-box-files -->
<script type="text/javascript ">
  $(function () {
    $('.w3_agile_portfolio_grid a').Chocolat();
  });
</script>
<!-- /js for portfolio lightbox -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<!-- script for blog slider -->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        992: {
          items: 2,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for blog slider -->

<script src="assets/js/owl.carousel.js"></script>

<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>