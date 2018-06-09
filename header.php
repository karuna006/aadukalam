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
							<li class="head-dpdn">
								<?php if(isset($_SESSION['user_details'])){ echo "Welcome ".$_SESSION['user_details']['username']; }else { ?><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login/SignUp </a> <?php } ?>
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
							<div class="col-sm-8">
							<br><br>
								<h1><a href="home.php" style="font-family:Fiolex_Mephisto">Aadukalam<span><l style="color:red">Best</l> <l style="color:green">Food</l> <l style="color:white">Collection</l></span></a></h1>
							</div> 
							</div>
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php?location">Home</a></li>
								<li><a href="products.php">Red</a></li>
								<li><a href="#">Organic(Coming Soon)</a></li> 
								<li><a href="#">Dairy(Coming Soon)</a></li> 
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
					</nav>
				</div>
			</div>
		</div>
		