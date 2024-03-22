
<?php
include("dbconnect.php"); 
extract($_POST);
session_start();
 $username= $_SESSION['uname'];
$id=$_REQUEST['id'];
 

  $qrys1="select * from  add_food where id=$id";
$result = $conn->query($qrys1);
while($row = $result->fetch_assoc())
{
 $foodname=$row['foodname']; 
 $type=$row['type'];  
$timing=$row['timing'];   
$foodtype=$row['foodtype'];
$price=$row['price'];   
$gst=$row['gst'];   
$tax=$row['tax'];   
$report=$row['report'];        
  $hotel=$row['hotel'];      
  }
   if(isset($btn))
{
$quantity=$_REQUEST['quantity'];
$tprice=$_REQUEST['tprice'];
$hname=$_REQUEST['hname'];
$cvv=$_REQUEST['contact'];
$accno=$_REQUEST['accno'];
$cvv=$_REQUEST['cvv'];
$delivery=$_REQUEST['delivery'];
$pincode=$_REQUEST['pincode'];
$city=$_REQUEST['city'];


$sql = "SELECT id FROM user_booking order by id ASC";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
 echo $qrys1="insert into user_booking values($sid,'$foodname','$type','$timing','$foodtype','$price','$gst','$report','$quantity','$tprice','$hname','$contact','$accno','$cvv','$delivery','$pincode','$city','0','$username','$hotel')";
  if ($conn->query($qrys1) === TRUE) {
  ?>
<script language="javascript" type="text/javascript">
alert("Buying Successfully");
window.location.href="user_home.php";
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

    <title>Restaturant Review Classification | User :  </title>

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
                      <a class="nav-link" href="user_home.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="user_search_food.php">Search Food</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="user_booked_food.php">Booked Food</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="user_feedback.php">FeedBack</a>
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
         
      <h3 class="title-big text-center mb-md-5 mb-4">Search Food </h3>
      <form name="form1" method="post" action=""> 
        <table width="478" height="494" border="0" align="center">
          <tr>
            <td>ID</td>
            <td><?php echo $id;?>&nbsp;</td>
          </tr>
          <tr>
            <td>Restaurant</td>
            <td><?php echo $hotel;?></td>
          </tr>
          <tr>
            <td>FoodName</td>
            <td><?php echo $foodname;?>&nbsp;</td>
          </tr>
          <tr>
            <td>Type</td>
            <td><?php echo $type;?>&nbsp;</td>
          </tr>
          <tr>
            <td>Timing</td>
            <td><?php echo $timing;?>&nbsp;</td>
          </tr>
          <tr>
            <td>FoodType</td>
            <td><?php echo $foodtype;?>&nbsp;</td>
          </tr>
          <tr>
            <td>Price</td>
            <td><?php echo $price;?>&nbsp;</td>
          </tr>
          <tr>
            <td>GST</td>
            <td><?php echo $gst;?>&nbsp;</td>
          </tr>
          <tr>
            <td>TotalPrice</td>
            <td><?php echo $report;?>&nbsp;
              <label>
              <input name="report" type="hidden" id="report" value="<?php echo $report;?>">
            </label></td>
          </tr>
		
          <tr>
            <td>Quantity</td>
            <td><label>
              <input name="quantity" type="number" id="quantity"  onChange="myFunction()"  required="" placeholder="Quantity">
            </label></td>
          </tr>
		      <script>
	function myFunction()
	 
	 {
	
	 var x = document.getElementById("quantity").value;  
	 var x1= document.getElementById("report").value;
	  var z=x*x1;
 
	 document.getElementById("tprice").value=z;
	 }
	 </script>
          <tr>
            <td>TotalPrice</td>
            <td><label>
              <input name="tprice" type="text" id="tprice" readonly=""  required="" placeholder="TotalPrice">
            </label></td>
          </tr>
          <tr>
            <td>HolderName</td>
            <td><label>
              <input name="hname" type="text" id="hname"  required="" placeholder="HolderName">
            </label></td>
          </tr>
          <tr>
            <td>Contact</td>
            <td><label>
              <input name="contact" type="text" id="contact"  required="" placeholder="Contact">
            </label></td>
          </tr>
          <tr>
            <td>Account No. </td>
            <td><label>
              <input name="accno" type="text" id="accno"  required="" placeholder="Account No.">
            </label></td>
          </tr>
          <tr>
            <td>CVV</td>
            <td><label>
              <input name="cvv" type="password" id="cvv"  required="" placeholder="CVV">
            </label></td>
          </tr>
          <tr>
            <td>Delivery Address </td>
            <td><label>
              <input name="delivery" type="text" id="delivery"  required="" placeholder="Delivery Address">
            </label></td>
          </tr>
          <tr>
            <td>Pincode</td>
            <td><label>
              <input name="pincode" type="text" id="pincode"  required="" placeholder="Pincode">
            </label></td>
          </tr>
          <tr>
            <td>City</td>
            <td><label>
              <input name="city" type="text" id="city"  required="" placeholder="City">
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="btn" type="submit" id="btn" value="Buy">
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