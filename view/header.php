<?php 
	include_once '../admin/model/db.php';
	session_start();
	$_SESSION['location'] = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location'];
	// print_r($_SESSION['location'] = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location']);
	if (isset($_SESSION['user_details'])) {
		$update = select('*','`users`','email_id="'.$_SESSION['user_details']['email_id'].'"',db_connect());
		$_SESSION['user_details'] = $update[0];
		}
 ?>
<html lang="en">
<head>
<title>Aadukalam.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="../css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="../css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->

<script src="../js/jquery-2.2.3.min.js"></script>  
<!-- <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">  -->
<link href="https://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
</head>
<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script async type='text/javascript' src='https://cdn.fancybar.net/ac/fancybar.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>
<style type='text/css'>  .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_fh5co-team{color:#000;font-style:italic;}</style>
<script>

    $(function() {
      $('.adsense_btn_close').click(function() {
        $(this).closest('.adsense_fixed').css('display', 'none');
      });

      $('.adsense_btn_info').click(function() {
        if ($('.adsense_info_content').is(':visible')) {
          $('.adsense_info_content').css('display', 'none');
        } else {
          $('.adsense_info_content').css('display', 'block');
        }
      });

    });

  </script>
<body>
<?php 
	    include_once '../controller/get_location.php';
	    $raw_data =display_location();
		?>
		<script type="text/javascript">
	jQuery.noConflict();
jQuery(document).ready(function($) {

	$('#mask').fadeIn(300);
	$('.model').delay(10).animate({
    	top: ($(window).height() - $('.model').outerHeight())/5
  	}, 400);

	// Popup
	$('#mask, .close').click(function() {
		document.getElementById('popup_head').innerHTML="<span style='color:red'>Please Choose Your Location</span>";
	});
	$(window).resize(function(){
	   $('.model').css({
	     left: ($(window).width() - $('.model').outerWidth())/2
	   });
	});
	$(window).resize();

});
</script>
<style type="text/css">
	#mask {
  display:none;
  position:fixed;
  z-index:100;
  background:rgba(0, 0, 0, 0.8);
  width:100%;
  height:100%;
}

.model {
  position:fixed; 
  top:-350px;
  z-index:101;
  width:900px;
  padding:0px;
  color:#404040;
  text-align:left;
}

.model .constraint {
  background:#fff;
  padding:50px;
}


/* Styles for the Codepen */
.wrap {
  margin:0 auto;
	padding:0 auto;
  padding:100px 0 0 0;
  width:300px;
  text-align:center;
}
@font-face {
  font-family: "Fiolex_Mephisto";
  src: url(Fiolex_Mephisto.ttf);
}
.box_new {
  width: 60%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}
.overlay_new {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 100;
  background: rgba(0, 0, 0, 0.9);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay_new:target {
  visibility: visible;
  opacity: 1;
}

.popup_new {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 80%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup_new {
  margin-top: 70;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup_new .close_new {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup_new .close_new:hover {
  color:black;
}
.popup_new .content_new {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box_new{
    width: 70%;
  }
  .popup_new{
    width: 70%;
  }
}
.social {
  width: 200px;
  height: 220px;
  position: fixed;
  margin-top: 300px;
  perspective: 1000px;
}

.social li a {
  display: block;
  height: 20px;
  width: 40px;
  background: #222;
  border-bottom: 1px solid #333;
  font: normal normal normal 16px/20px  'FontAwesome', 'Source Sans Pro', Helvetica, Arial, sans-serif;
  color: #fff;
  -webkit-font-smoothing: antialiased;
  padding: 10px;
  text-decoration: none;
  text-align: center;
  transition: background 0.5s ease 0.3ms;
}

.social li:first-child a:hover {
  background: #3b5998;
}

.social li:nth-child(2) a:hover {
  background: #00acee;
}

.social li:nth-child(3) a:hover {
  background: #ea4c89;
}

.social li:nth-child(4) a:hover {
  background: #dd4b39;
}

.social li:first-child a {
  border-radius: 0 5px 0 0;
}

.social li:last-child a {
  border-radius: 0 0 5px 0;
}

.social li a span {
  width: 100px;
  float: left;
  text-align: center;
  background: #222;
  color: #fff;
  margin: -29px 50px;
  padding: 8px;
  transform-origin: 0;
  visibility: hidden;
  opacity: 0;
  z-index: 1;
  transform: rotateY(45deg);
  border-radius: 5px;
  transition: all 0.5s ease 0.3ms;
}

.social li span:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  left: -25px;
  top: 7px;
  border-left: 10px solid transparent;
  border-right: 10px solid #222;
  border-bottom: 10px solid transparent;
  border-top: 10px solid transparent;
}

.social li a:hover span {
  visibility: visible;
  opacity: 1;
  transform: rotateY(0);
}
</style>

<?php 
	if (!isset($_SESSION['location'])){ 
?>
		<div id="mask"></div> <!-- The transperent background overlay -->
<div class="model"> <!-- The popup -->
  <div class="constraint"> <!-- Popup content -->
				<h2 id="popup_head">Choose Your Location*</h2>
				<div class="agileits_search">
					<form action="#" method="post">
						<!-- <input name="Search" type="text" placeholder="Enter Your Area Name" required=""> -->
						<select id="agileinfo_search" class="location_search" name="agileinfo_search" required="">
							<option value="">Popular Cities</option>
							<?php 
                            if ($raw_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($raw_data as $value) {
                            echo "<li><option value=".$raw_data[$i]['location'].">".$raw_data[$i]['location']."</option></li>";                   	
                            $i++;
                            }
                        }
                         ?>
						</select>
						<input type="submit" id="search" value="Search">
					</form>
				</div> 
  </div> <!-- /Popup content -->
  
</div>
<?php } ?>
<ul class='social' style='z-index: 99 !important;'>
  <li>
    <a class="fa fa-facebook" style="height:17%" href="https://www.facebook.com/aadukalam4u" target="_blank">    
      <span>Facebook</span>
    </a> 
  </li>
  
  <li>
    <a class="fa fa-twitter" style="height:17%" href="#">
      <span>Twitter</span>
    </a>
  </li>
  
  <li>
    <a class="fa fa-instagram" style="height:17%" href="#">
      <span>Dribbble</span>
    </a>
  </li>
  
  <li>
    <a class="fa fa-google-plus" style="height:17%" href="#">
    <span>Google Plus</span>
    </a> 
  </li>
  
</ul>
<div class='adsense_fixed'>
<div class='adsense_content'> <span class='adsense_btn_close' title='Hide Ads'>x</span>
  <div class='adsense_info_content'>
    <h3 id='adsense_h3'>Why Ads?</h3>
    <p class='adsense_p'>We hope you'll understand us why we display Ads here at w3layouts. We use Ads in order for us to continue working and provide you new template every day. As we all know domain, hosting servers and designers is not free and
      for us to pay it we have to display Ads. Thank you for Supporting Us.</p>
    <p class='adsense_p'>Love,
      <br><span class='adsense_fh5co-team'>w3layouts Team</span></p>
  </div><span class='adsense_btn_info' title='Why Ads'>i</span>


  </div>
  </div>
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-right">
						<ul>							
							<li class="w3ls-header-dpdn">
								<?php if(isset($_SESSION['user_details'])){echo "wallet :- ₹" .$_SESSION['user_details']['wallet'];}?>
								</li>
							<li class="w3ls-header-dpdn">
								<?php if(isset($_SESSION['user_details'])){echo "Referral id :- " .$_SESSION['user_details']['Referral_id'];}?>
								</li>	
							<?php if (isset($_SESSION['location'])) {?>
								<li class="w3ls-header-right">
									<a href="#popup1"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $_SESSION['location']; ?> <b class="caret"></b></a>
								</li>
							<?php }?>
							<li class="head-dpdn">
								<?php if(isset($_SESSION['user_details'])){ echo "Welcome ".$_SESSION['user_details']['username']; }else { ?><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login / <i class="fa fa-user-plus"></i> SignUp </a> <?php } ?>
							</li> 
							<?php if (isset($_SESSION['user_details'])) { ?>
								<li class="w3ls-header-right">
									<a href="../admin/controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
								</li>
								<?php } ?>												
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- <script type="text/javascript">
				$(document).ready(function(){
					$(".navbar-toggle1").click(function(){
						$("#bs-megadropdown-tabs").toggle();
					});
				});
			</script> -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<div class="row">
							<div class="col-sm-4">
								<img src="../images/logo.png" class="img-responsive"  alt="Aadukalam" width="150px" height="140px">
							</div>
							<div class="col-sm-8" style="
    margin-left: inherit;
    left: -33px;
">
							<br><br>
								<h1><a href="home.php" style="font-family:Fiolex_Mephisto">Aadukalam<span style="margin-top: -6px;margin-left: 120px;"><l style="color:green">Green</l> <l style="color:darkred">Meats</l> <l style="color:white">Dairy</l></span></a></h1>
							</div> 
							</div>
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
						</div> <br>
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php?location=<?php echo $_SESSION['location'];?>">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="products.php">Red(Meat)</a></li>
								<li><a href="milk.php">White(Dairy)</a></li> 
								<li><a href="#">Green(Crops)</a></li>
                <li><a href="farm.php">Farm</a></li>
							<!-- <li><a href="contact.php">Contact Us</a></li> -->
							</ul>
						</div>
						<?php if ((isset($_SESSION['location']))) {?>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div>
						<?php } ?> 
						<div id="popup1" class="overlay_new">
	<div class="popup_new">
		<a class="close_new" href="#">&times;</a>
		<div class="content_new">
			<h1 style="text-align: left;">Choose Your Location*</h1>
				<div class="agileits_search">
					<form action="#" method="post">
						<!-- <input name="Search" type="text" placeholder="Enter Your Area Name" required=""> -->
						<select id="agileinfo_search" class="location_search" name="agileinfo_search" required="">
							<option value="">Popular Cities</option>
							<?php 
                            if ($raw_data == 'empty') {
                                    echo "";
                                 } 
                            else{
                                $i=0;
                            foreach ($raw_data as $value) {
                            echo "<li><option value=".$raw_data[$i]['location'].">".$raw_data[$i]['location']."</option></li>";                   	
                            $i++;
                            }
                        }
                         ?>
						</select>
						<input type="submit" id="search" value="Search">
					</form>
				</div> 
		</div>
	</div>	
</div><div class="container">
						<?php
	  if(isset($_GET['status'])){
	    $status = $_GET['status'];
	  }else{
	    $status = "";
	  }
	  switch ($status) {
	    case 'login_error':
	      echo '<div class="alert alert-warning"><strong>Sorry! </strong> Something went wrong - try again.</div>';
	    break;
	    case 'order_not_placed':
	      echo '<div class="alert alert-warning"><strong>Sorry! </strong> your order doesn`t placed - try again </div>';
	    break;
	    case 'order_placed':
	      echo '<div class="alert alert-success"><strong>Thank you!  -</strong> your order is placed. we will get back to you soon . . . !</div>';
	    break;
	    case 'access_denied':
	      echo '<div class="alert alert-warning"><strong><i style="color:red" class="fa fa-exclamation-triangle" aria-hidden="true">  </i> </strong>   Access denied..! </div>';
	    case 'signup_error':
	      echo '<div class="alert alert-warning"><strong></strong>Something went wrong - try again..! </div>';
	    break;
	    case 'register':
	      echo '<div class="alert alert-success"><strong></strong>Thank you - for register..! </div>';
	    break;
	    case 'num_exits':
	      echo '<div class="alert alert-warning"><strong>Sorry </strong>Mobile number already exist - try new number..! </div>';
	    break;
	    case 'email_exits':
	      echo '<div class="alert alert-warning"><strong>Sorry </strong>Email id already exits - try new mail id..! </div>';
	    break;
	    default:
	      echo "";
	    break;
	  }
?></div>
					</nav>
				</div>
			</div>
		</div>
		