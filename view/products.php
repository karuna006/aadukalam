<?php 
    if (isset($_GET['location'])) {
        $_SESSION['location'] = $_GET['location'];
    }
    include_once 'header.php';
    include_once '../controller/display_controller.php';
?>
<style type="text/css">
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
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
			</div>
		</div>
	</div>

 </div>
 <br>
    <div class="clearfix" style="position:initial;">
    <div class="row">
        <div class="col-sm-4 agile-product-text">
            <a href="#" style="width: 100%;color: white" class="product_search"  value="chicken"><h3>Chicken</h3></a>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h3><a href="#" style="width: 100%;color: white" class="product_search"  value="mutton">Mutton</a></h3>
        </div>
        <div class="col-sm-4 agile-product-text">
            <h3><a href="#" style="width: 100%;color: white" class="product_search" value="fish">Fish</a></h3>
        </div>
    </div>
    </div>
	<div class="products">	 
		<div class="container">
			<div class="col-md-13"> 
				<div class="products-row" id="content_product">
                    <?php
                        $i = 1;
                        $total_content = "";
                        $main_content = "";

                       if (isset($_GET['category']) && isset($_GET['location']) ) {
                            $raw_data =display_category_details($_GET['category'],$_GET['location']);
                            if ($raw_data == 'empty') {
                                echo "<tr><td>".$raw_data."</td></tr>";
                            }
                            else{
                                echo '<div class="product-top"><h4>';
                                echo $_GET['category'];
                                echo '</h4><div class="clearfix"> </div></div>';
               
                                $value_check = $raw_data[0]['sub_category'];
                                foreach ($raw_data as $value) { 
                                    // if($i == 1){
                                    //     echo "";
                                    // }
                                    // if($i <= 3){
                                        echo generate_content($value);
                                        $i++;
                                    // }
                                    // if($i > 3){
                                    //     echo "";
                                    //     $i = 1;
                                    // }
                                }  
                            } 
                        }else
                        if(isset($_GET['location']) || isset($_SESSION['location'])){
                            $_SESSION['location'] = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location'];
                            $data = isset($_GET['location']) ? $_GET['location'] : $_SESSION['location'];
                            echo "<script type='text/javascript'>localStorage.setItem('location','";
                            echo $data;
                            echo "');</script>";
                            $raw_data =display_details($data);
                            if ($raw_data == 'empty') {
                                echo "<tr><td>".$raw_data."</td></tr>";
                            }
                            else{
                                $value_check = $raw_data[0]['sub_category'];
                                foreach ($raw_data as $value) { 
                                    if($i == 1){
                                        echo "";
                                    }
                                    if($i <= 3){
                                        echo generate_content($value);
                                        $i++;
                                    }
                                    if($i > 3){
                                        echo "";
                                        $i = 1;
                                    }
                                }  
                            }  
                    }else{
                        echo "<script type='text/javascript'>location.replace('home.php');</script>";
                        }

                        function generate_content($value){
                            return "<div class='col-xs-6 col-sm-4 product-grids'>
                            <div class='flip-container'>
                            <div class='flipper agile-products'>
                            <div class='front'> 
                            <img style='width:100%;height:80%;' src='../images/red/".$value['files']."' class='img-responsive' alt='img'>
                            <div class='agile-product-text'>              
                            <h5>".$value['product_name']."</h5> <br>
                            <h5>&#8377;".$value['product_price']."</h5> 
                            </div>
                            </div>
                            <div class='back'>
                            <h4>".$value['product_name']."</h4>
                            <h6>".$value['product_price']."<sup>&#8377;</sup></h6>
                            <form action='#' method='post'>
                            <input type='hidden' name='cmd' value='_cart'>
                            <input type='hidden' name='add' value='1'> 
                            <input type='hidden' name='w3ls_item' value='".$value['product_name']."'> 
                            <input type='hidden' name='amount' value='".$value['product_price']."'> 
                            <button type='submit' class='w3ls-cart pw3ls-cart'><i class='fa fa-cart-plus' aria-hidden='true'></i> Add to cart</button>
                            <span class='w3-agile-line'> </span>
                            <a href='../view/show_product.php?product_name=".$value['product_name']."&product_price=".$value['product_price']."'><i class='fa fa-shopping-basket' aria-hidden='true'></i>Buy now</a>
                            </form>
                            </div>
                            </div>
                            </div><br><br><br>
                            </div>";
                        } 
                    ?>
				</div>                                           
			</div>
		</div>
	</div>
    <br/><br/>
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
<script type="text/javascript">
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
<?php include_once 'footer.php'; ?>