 <?php
extract($_POST);
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
if(isset($btn))
 {
$foodname=$_REQUEST['fname'];
$type=$_REQUEST['type'];
$timing=$_REQUEST['timing'];
$foodtype=$_REQUEST['ftype'];
 $quantity=$_REQUEST['quantity'];
$dcription=$_REQUEST['dcription'];
$price=$_REQUEST['price'];
$gst=$_REQUEST['gst'];
 
$tprice=$_REQUEST['tprice'];

 
  $file=$_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];  
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$file);

$sql = "SELECT id FROM add_food order by  id ASC";

$sid=0;
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
  $sid=$row['id'];
  }
  $sid=$sid+1;
  
  $qq="insert into add_food values('$sid','$foodname','$type','$timing','$foodtype','$quantity','$dcription','$price','$gst','$file','0','$tprice','$username')";
  if ($conn->query($qq) === TRUE){
  ?>
  <script language="javascript" type="text/javascript">
  alert("Added SuccessFully");
 window.location.href="restaurant_home.php";
 </script>
 <?php
 }
 else
 {
 ?>
 <script language="javascript" type="text/javascript">
  alert("Failed");
  </script>
  <?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Restaturant Review Classification | Restaurant :  </title>

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
                      <a class="nav-link" href="restaurant_home.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="restaurant_add_food.php">Add Food</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="restaurant_view_booking.php">View Booking</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="restaurant_delivery_details.php">Delivery Details</a>
                  </li>
				  <li class="nav-item active">
                      <a class="nav-link" href="restaurant_payment_details.php">Payment Details</a>
                  </li>
				  <li class="nav-item active">
                      <a class="nav-link" href="restaurant_feedback.php">FeedBack</a>
                  </li>
				  <li class="nav-item active">
                      <a class="nav-link" href="index.php">Logout</a>
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
         
      <h3 class="title-big text-center mb-md-5 mb-4">Add Food </h3>
      <form action="" method="post" enctype="multipart/form-data" name="form1">
        <table width="563" height="339" border="0" align="center">
          <tr>
            <td width="223">Food Name </td>
            <td width="330"><label>
              <input name="fname" type="text" id="fname" placeholder="FoodName" required="">
            </label></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><label>
              <select name="type" id="type">
                <option value="VEG">VEG</option>
                <option value="NON-VEG">NON-VEG</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td>Timing</td>
            <td><label>
              <select name="timing" id="timing">
                <option value="07AM-11AM">07AM-11AM</option>
                <option value="11AM-03PM">11AM-03PM</option>
                <option value="05PM-11PM">05PM-11PM</option>
                <option value="04AM-07AM">04AM-07AM</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td>Food Type </td>
            <td><label>
              <select name="ftype" id="ftype">
                <option value="BreakFast">BreakFast</option>
                <option value="Lunch">Lunch</option>
                <option value="Snacks">Snacks</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td>Quantity</td>
            <td><label>
              <input name="quantity" type="text" id="quantity" placeholder="Quantity" required="">
            </label></td>
          </tr>
          <tr>
            <td>Discription</td>
            <td><label>
              <input name="dcription" type="text" id="dcription" placeholder="Discription" required="">
            </label></td>
          </tr>
          <tr>
            <td>Price</td>
            <td><label>
              <input name="price" type="text" id="price" placeholder="Price" required="">
            </label></td>
          </tr>
          <tr>
            <td>GST</td>
            <td><label>
              <input name="gst" type="number" id="gst" placeholder="GST" required=""  onChange="myFunction()">
            </label></td>
          </tr>
		    <script>
	function myFunction()
	 
	 {
	 
	 var x = document.getElementById("price").value;  
	 var x1= document.getElementById("gst").value;
	 
	 x2=x/100;
	     
	 x3=(x2)*(x1);
	      

	 var z=parseInt(x)+parseInt(x3);
 	 document.getElementById("tprice").value=z;
	 }
	 </script>
          <tr>
            <td>TotalPrice</td>
            <td><label>
              <input name="tprice" type="text" id="tprice" placeholder="TotalPrice"  readonly="">
            </label></td>
          </tr>
          <tr>
            <td>Image</td>
            <td><label>
              <input type="file" name="file" required="">
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="btn" type="submit" id="btn" value="Add">
            </label></td>
          </tr>
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