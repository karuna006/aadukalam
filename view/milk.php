<?php 
	include_once 'header.php';
 ?>

 </div>
 <script type="text/javascript">
    	$(document).ready(function() {
    		$('#A1').hide();
    		$('#A2').hide();   	
    		$('#goat_page').hide();   		    			
    		$('#1').click(function(e){
    			$('#def').hide();
    			$('#A2').hide();
    			$('#goat_page').hide();
    			$('#A1').show();
    		});
    		$('#2').click(function(e){
    			$('#def').hide();
    			$('#A1').hide();
    			$('#goat_page').hide();
    			$('#A2').show();
    		});
    		$('#3').click(function(e){
    			$('#def').hide();
    			$('#A1').hide();
    			$('#A2').hide();
    			$('#goat_page').show();
    		});

    	});
   </script>
<link rel="stylesheet" href="../css/milk.css">	
<br>
	<div class="clearfix" style="position:initial;">
    <div class="row">
        <div class="col-sm-4 agile-product-text">
            <a href="#" style="width: 100%;color: white" id="1" class="product_search"><h4>A1 MILK</h4></a>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h4><a href="#" style="width: 100%;color: white" id="2" class="product_search">A2 MILK</a></h4>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h4><a href="#" style="width: 100%;color: white" id="3" class="product_search">GOAT MILK</a></h4>
        </div>
    </div>
    </div>
    <div id="def">    	
    	<img src="../images/milk/bottels.jpg" style="width:100%">
    </div>
    <div id="goat_page">
    	<img src="../images/milk/goat.jpg" style="width: 100%">
    </div>
    <div id="A1">
    	<img src="../images/milk/2.jpg" style="width: 100%">
    </div>
    <div id="A2">
    	<img src="../images/milk/3.jpg" style="width: 100%">
    </div>
    <div class="container">
<div class="section-head">
    <br/><h1>FAQs</h1>
  </div><br/>
   <div class="al" style="margin-left: 31px; margin-right: 20px;">
   	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">   		
		<div class="question"><h4>About us</h4></div>
		<div class="answer">
			Now you can enjoy AADUkalam’s creamy fresh farm milk in glass bottles, like the good old days. This milk comes from hygienic , healthy farm cows, that graze on natural feed. We bring fresh milk to your doorsteps every day directly from our beloved farmers.
		</div>
	</div>
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>How much does the milk cost?</h4></div>
		<div class="answer">
			<ul>
			<li>0.5L cow’s milk costs Rs.21</li>
			<li>1L cow’s milk cost Rs.42</li>
			</ul>
		</div>
	</div>
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>How do I Pay</h4></div>
		<div class="answer">
			You can pay by online after logging in to your account or by cash to the delivery executive. All payments are collected in advance. The billing cycle is from 15th of this month to the 14th of next month. You can start your subscription on any date of the month. <br/>
			NEFT/ IMPS/ RTGS & cheque payments are not accepted any longer.  <br/>
			2% handling charges are added to all payments.
		</div>
	</div>
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>Delivery Time</h4></div>
		<div class="answer">
			We deliver every morning from 6am to 8am and 5 pm to 7pm in the evenings. <br> Our delivery executive will place your milk bottle at your doorstep, so that you can boil it and refrigerate it within an hour or two.
		</div>
	</div>
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>Is the milk fresh?</h4></div>
		<div class="answer">
			Yes, absolutely. Milked in the morning and evening, reaches your hand in just a few hours,. It is the freshest milk you can get in Coimbatore, if you don’t have your own cow.
		</div>
	</div>
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>Quality of your milk ?</h4></div>
		<div class="answer">
			AADUkalam gets the milk directly from farmers and check its quality using milk testing meters. We assure that the fresh milk that reaches you immediately from the farms will be pure, fresh and thick without any addition of water. We will be happy to provide you the Milk test results at the end of every moth if you wish to 
		</div>
	</div>
	
	<div class="questionwrapper">
		<img alt="arrow" class="arrow" src="../images/milk/right.png" style="display: none;">
		<div class="question"><h4>How long does the milk last?</h4></div>
		<div class="answer">
			It lasts for 7 days, raw, in the fridge if kept at 2 degrees Celsius. But, we request you to always boil it on the same day you receive it. When you boil it, you are eliminating the bacteria that makes milk go bad. So, it makes the milk last longer. 
		</div>
	</div>
  </div></div>
  </section>
<script src="../js/milk.js"></script> 
<!-- FAQ -->
<script type="text/javascript">
	$(document).ready( function() {
			
			$("#alert-box").toggle("slow");
			
			$("#alert-box i").on("click",function(){
				$("#alert-box").toggle("slow");
			});
		
			$(".feel_container li").on("click",function(){ 
				var current=this;
				$(".feel_container li").each(function(){
					if(current==this){
						$(this).find("input").attr("checked",true);
						$(this).css("background-color","#e2e0b1");
					}else{
						$(this).find("input").attr("checked",false);
						$(this).css("background-color","#bbb994");
					}
				});
			});
		
			$( ".questionwrapper" ).hover( function(){$(this).children( ".arrow" ).css( "display", "block" );}, 
			function(){if(!$(this).children( ".answer" ).is(':visible')){$(this).children( ".arrow" ).css( "display", "none" );}} );
			$( ".questionwrapper" ).click(function() {
					if(!$(this).children( ".answer" ).is(':visible')){
						$(this).children( ".answer" ).css( "display", "block" );
						$(this).children( ".arrow" ).css( "display", "block" );
						$(this).children( ".arrow" ).attr("src", "../images/milk/down.png");
						$(this).css( "background-color", "#f0f0f0" );
					}
					else{
						$(this).children( ".answer" ).css( "display", "none" );
						$(this).children( ".arrow" ).attr("src", "../images/milk/right.png");
						$(this).css( "background-color", "#ffffff" );
					}
			});	
		});
</script><br><br>	
<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy; 2017 Greefitech. All rights reserved | Design by <a href="http://greefitech.com/">Greefitech</a></p>
		</div>
	</div>
</body>
</html>