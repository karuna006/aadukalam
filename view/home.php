<?php 
    include_once 'header.php';
    include_once '../controller/get_location.php';
    $raw_data =display_location();
?>
<style>
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
	  background-color: #717171;
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
	div1 {
		position: absolute;
	    width: 100%;
	    text-align: center;
	    background-color: #f1efef;
	    margin-top:20px;
	}



*, *:before, *:after {
  -webkit-border-sizing: border-box;
  -moz-border-sizing: border-box;
  border-sizing: border-box;
}
ul {
  list-style: none;
  padding: 0;
  margin: 0 0 20px 0;
}


.dropdown2 a2 {
  text-decoration: none;
}
.dropdown2 [data-toggle="dropdown"] {
  position: relative;
  display: block;
  color: black;
  background: white;
  -moz-box-shadow: 0 1px 0 #ffffff inset, 0 -1px 0 #ffffffinset;
  -webkit-box-shadow: 0 1px 0 #ffffff inset, 0 -1px 0 #ffffff inset;
  box-shadow: 0 1px 0 #ffffff inset, 0 -1px 0 #ffffff inset;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
  padding: 10px;
}
.dropdown2 [data-toggle="dropdown"]:hover {
  background: #ffffff;
  border: 1px solid gray;
}
.dropdown2 .icon-arrow2 {
  position: absolute;
  display: block;
  font-size: 0.7em;
  color: black;
  top: 14px;
  right: 10px;
}
.dropdown2 .icon-arrow2.open {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}
.dropdown2 .icon-arrow2.close {
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -moz-transition: -moz-transform 0.6s;
  -o-transition: -o-transform 0.6s;
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
}
.dropdown2 .icon-arrow2:before {
  content: '\25BC';
}
.dropdown2 .dropdown-menu2 {
  max-height: 0;
  overflow: hidden;
  list-style: none;
  padding: 0;
  margin: 0;
}
.dropdown2 .dropdown-menu2 li2 {
  padding: 0;
}
.dropdown2 .dropdown-menu2 li2 a {
  display: block;
  color: #6f6f6f;
  background: rgb(240, 240, 240);;
  -moz-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  -webkit-box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  box-shadow: 0 1px 0 white inset, 0 -1px 0 #d5d5d5 inset;
  text-shadow: 0 -1px 0 rgba(255, 255, 255, 0.3);
  padding: 10px 10px;
}
.dropdown2 .dropdown-menu2 li2 a:hover {
  background: #f6f6f6;
}
.dropdown2 .show, .dropdown2 .hide {
  -moz-transform-origin: 50% 0%;
  -ms-transform-origin: 50% 0%;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
}
.dropdown2 .show {
  display: block;
  max-height: 9999px;
  -moz-transform: scaleY(1);
  -ms-transform: scaleY(1);
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  animation: showAnimation 0.5s ease-in-out;
  -moz-animation: showAnimation 0.5s ease-in-out;
  -webkit-animation: showAnimation 0.5s ease-in-out;
  -moz-transition: max-height 1s ease-in-out;
  -o-transition: max-height 1s ease-in-out;
  -webkit-transition: max-height 1s ease-in-out;
  transition: max-height 1s ease-in-out;
}
.dropdown2 .hide {
  max-height: 0;
  -moz-transform: scaleY(0);
  -ms-transform: scaleY(0);
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  animation: hideAnimation 0.4s ease-out;
  -moz-animation: hideAnimation 0.4s ease-out;
  -webkit-animation: hideAnimation 0.4s ease-out;
  -moz-transition: max-height 0.6s ease-out;
  -o-transition: max-height 0.6s ease-out;
  -webkit-transition: max-height 0.6s ease-out;
  transition: max-height 0.6s ease-out;
}

@keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-moz-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@-webkit-keyframes showAnimation {
  0% {
    -moz-transform: scaleY(0.1);
    -ms-transform: scaleY(0.1);
    -webkit-transform: scaleY(0.1);
    transform: scaleY(0.1);
  }
  40% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.04);
    -ms-transform: scaleY(1.04);
    -webkit-transform: scaleY(1.04);
    transform: scaleY(1.04);
  }
  100% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
}
@keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-moz-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}
@-webkit-keyframes hideAnimation {
  0% {
    -moz-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  60% {
    -moz-transform: scaleY(0.98);
    -ms-transform: scaleY(0.98);
    -webkit-transform: scaleY(0.98);
    transform: scaleY(0.98);
  }
  80% {
    -moz-transform: scaleY(1.02);
    -ms-transform: scaleY(1.02);
    -webkit-transform: scaleY(1.02);
    transform: scaleY(1.02);
  }
  100% {
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
  }
}

</style>
		<div class="banner-text"></div>
	</div>
	<div class="w3agile-spldishes">
		<div class="container">
				<div class="mySlides fade1"><img src="../images/slide/1.jpg" style="width:100%"></div>
				<div class="mySlides fade1"><img src="../images/slide/2.jpg" style="width:100%"></div>
				<div class="mySlides fade1"><img src="../images/slide/3.jpg" style="width:100%"></div>
				<div class="mySlides fade1"><img src="../images/slide/4.jpg" style="width:100%"></div>
				<div class="mySlides fade1"><img src="../images/slide/5.jpg" style="width:100%"></div>
		</div><br>
		<div style="text-align:center">
		    <span class="dot1"></span> 
		    <span class="dot1"></span> 
		    <span class="dot1"></span>
		    <span class="dot1"></span>
		    <span class="dot1"></span> 
		</div>
	</div>
	<div class="w3agile-deals">
		<div class="container">
			<h3 class="w3ls-title">Special Services</h3>
			<div class="dealsrow">
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-birthday-cake" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Party Orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>Team up Scheme</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-6 col-sm-6 deals-grids">
					<div class="deals-left">
						<i class="fa fa-building" aria-hidden="true"></i>
					</div> 
					<div class="deals-right">
						<h4>corporate orders</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
  <div class="add-products">  
    <div class="container">
      <div class="add-products-row">
        <div class="w3ls-add-grids">
          <a href="menu.html"> 
            <h4>Get <span>20%<br>Cashback</span></h4>
            <h5>Ordered in mobile app only </h5>
            <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
          </a>
        </div>
        <div class="w3ls-add-grids w3ls-add-grids-right">
          <a href="menu.html"> 
            <h4>GET Upto<span><br>40% Offer</span></h4>
            <h5>Sunday special discount</h5>
            <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
          </a>
        </div> 
        <div class="clearfix"> </div> 
      </div>     
    </div>
  </div><br>
	<div class="container">
		<ul>
		    <li2 class="dropdown2">
		      <a href="#" data-toggle="dropdown"><h4>Red Revolution</h4><i class="icon-arrow2"></i></a>
		      <ul class="dropdown-menu2">
		        <li2><a>You can pay by online after logging in to your account or by cash to the delivery executive. All payments are collected in advance. The billing cycle is from 15th of this month to the 14th of next month. You can start your subscription on any date of the month. <br/>
      NEFT/ IMPS/ RTGS & cheque payments are not accepted any longer.  <br/>
      2% handling charges are added to all payments.</a></li2>
		      </ul>
		    </li2>
		    <li2 class="dropdown2">
		      <a href="#" data-toggle="dropdown"><h4>Green Revolution</h4><i class="icon-arrow2"></i></a>
		      <ul class="dropdown-menu2">
		        <li2><a>Home</a></li2>
		      </ul>
		    </li2>
		    <li2 class="dropdown2">
		      <a href="#" data-toggle="dropdown"><h4>White Revolution</h4><i class="icon-arrow2"></i></a>
		      <ul class="dropdown-menu2">
		        <li2><a>Home</a></li2>
		      </ul>
		    </li2>
  		</ul>
	</div>	
	<?php include_once 'footer.php'; ?>
	<script type="text/javascript">
	

// Dropdown Menu
var dropdown = document.querySelectorAll('.dropdown2');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
  var button = el.querySelector('a[data-toggle="dropdown"]'),
      menu = el.querySelector('.dropdown-menu2'),
      arrow = button.querySelector('i.icon-arrow2');

  button.onclick = function(event) {
    if(!menu.hasClass('show')) {
      menu.classList.add('show');
      menu.classList.remove('hide');
      arrow.classList.add('open');
      arrow.classList.remove('close');
      event.preventDefault();
    }
    else {
      menu.classList.remove('show');
      menu.classList.add('hide');
      arrow.classList.remove('open');
      arrow.classList.add('close');
      event.preventDefault();
    }
  };
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};		
</script>