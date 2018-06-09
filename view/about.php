<?php 
	include_once 'header.php';
	include_once '../admin/controller/get_about_details.php';
	$rawdata = get_details('about_us');
	// print_r($rawdata);
 ?>
 </div>
 <div class="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">	
				<p><?php echo $rawdata[0]['content']; ?></p> 
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Fusce tempus</h4>
							<p><?php echo $rawdata[0]['menu_1']; ?> </p>
						</div> 
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Consectetur</h4>
							<p><?php echo $rawdata[0]['menu_2']; ?> </p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Dolor siet</h4>
							<p><?php echo $rawdata[0]['menu_3']; ?> </p>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div></div></div><br><br><br><br><br><br><br><br><br>
<?php 
	include_once 'footer.php';
 ?>