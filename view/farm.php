<?php 
	include_once 'header.php';
   include_once '../admin/controller/get_about_details.php';
    $rawdata = get_details('farm_content');
 ?>
 <style type="text/css">
 	.mySlides {display:none}
    .dot1 {
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 100%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    .active {
      background-color: #717171 ;
    }
    .fade1 {
      -webkit-animation-name: fade1;
      -webkit-animation-duration: 1.5s;
      animation-name: fade1;
      animation-duration: 1.5s;
    }
    @-webkit-keyframes fade1 {
      from {opacity: .4}
      to {opacity: 1}
    }
    @keyframes fade1 {
      from {opacity: .4}
      to {opacity: 1}
    }
    @media only screen and (max-width: 300px) {
      .text1 {font-size: 11px}
    }
    #myDIV1 {
        width: 100%;
        padding: 50px 0;
        text-align: center;
        background-color: #f1efef ;
        margin-top:20px;
    }
 </style>
 	</div>
 	<br> 		
    <div class="clearfix" style="position:initial;">
    <div class="row">
        <div class="col-sm-4 agile-product-text">
            <a href="#" style="width: 100%;color: white" id="1" class="product_search"><h4>AADUKALAM DAIRY FARM</h4></a>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h4><a href="#" style="width: 100%;color: white" id="2" class="product_search">AADUKALAM SHEEP AND GOAT FARM</a></h4>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h4><a href="#" style="width: 100%;color: white" id="3" class="product_search">AADUKALAM SUPERBA FARM</a></h4>
        </div>
    </div>
    </div>
    <script type="text/javascript">
    	$(document).ready(function() {
        showSlides();
    		$('#dairy_farm').hide();
    		$('#SHEEP_AND_GOAT_FARM').hide();   	
    		$('#SUPERBA_FARM').hide();   		    			
    		$('#1').click(function(e){
    			$('#about').hide();
    			$('#SHEEP_AND_GOAT_FARM').hide();
    			$('#SUPERBA_FARM').hide();
    			$('#dairy_farm').show();
    		});
    		$('#2').click(function(e){
    			$('#about').hide();
    			$('#dairy_farm').hide();
    			$('#SUPERBA_FARM').hide();
    			$('#SHEEP_AND_GOAT_FARM').show();
    		});
    		$('#3').click(function(e){
    			$('#about').hide();
    			$('#dairy_farm').hide();
    			$('#SHEEP_AND_GOAT_FARM').hide();
    			$('#SUPERBA_FARM').show();
    		});

    	});
    	var slideIndex = 0;
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot1");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex> slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000);
        }
    </script>
    				<!-- about_content -->
    <div class="about" id="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">	
				<p><?php echo $rawdata[0]['farm_about_us']; ?></p> 
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Fusce tempus</h4>
							<p><?php echo $rawdata[0]['menu_1']; ?></p> 
						</div> 
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Consectetur</h4>
							<p><?php echo $rawdata[0]['menu_2']; ?></p> 
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Dolor siet</h4>
							<p><?php echo $rawdata[0]['menu_3']; ?></p> 
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div></div></div>
			<!-- AADUKALAM DAIRY FARM -->
	<div class="about" id="dairy_farm">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">AADUKALAM DAIRY FARM</h3>
			<div class="about-text">	
				<p><?php echo $rawdata[0]['dairy_farm']; ?></p> 
			</div></div></div>
			<!-- AADUKALAM SHEEP AND GOAT FARM -->
	<div class="about" id="SHEEP_AND_GOAT_FARM">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">AADUKALAM SHEEP AND GOAT FARM</h3>
			<div class="about-text">	
				<p><?php echo $rawdata[0]['goat_farm']; ?></p> 				
				</div></div></div>
				<!-- AADUKALAM SUPERBA FARM -->
	<div class="about" id="SUPERBA_FARM">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">AADUKALAM SUPERBA FARM</h3>
			<div class="about-text">	
				<p><?php echo $rawdata[0]['superba_farm']; ?></p> 
				</div></div></div>
                <div class="w3agile-spldishes">
        <div class="container">
                <div class="mySlides fade1"><img src="../images/farm/SHEEP AND GOAT FARM/1.jpg" style="width:100% "></div>
                <div class="mySlides fade1"><img src="../images/farm/SHEEP AND GOAT FARM/2.jpg" style="width:100%"></div>
                <div class="mySlides fade1"><img src="../images/farm/SHEEP AND GOAT FARM/3.jpg" style="width:100%"></div>
                <div class="mySlides fade1"><img src="../images/farm/SHEEP AND GOAT FARM/4.jpg" style="width:100%"></div>
        </div><br>
        <div style="text-align:center">
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>
            <span class="dot1"></span>
        </div>
    </div> 
