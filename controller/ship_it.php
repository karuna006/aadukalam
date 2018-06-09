<!-- <?php  -->
	 session_start();
	include_once '../controller/show_cart.php';
	include_once '../admin/model/db.php';	
	$wallet = $_SESSION['user_details']['wallet'];
	$cart_details = cart_item($_SESSION['user_details']);
	$mail_content=" ";
	$insert = " ";
	$insert2 = " ";
	$insert3 =" ";
	// echo "<pre>";
	// print_r($_POST);
	$insert_value['location'] = $_POST['location'];
	$insert_value['package_type'] = $_POST['package_price'];
	$insert_value['total_price'] = $_POST['actual_price'];

	$raw_data = $_SESSION['user_details'];
	$message = "";
	$rawdata['use_wallet'] = $_POST['use_wallet'];
	$con = db_connect();
	// echo "<pre>";
	// print_r($cart_details);
	$i = 1;
	$j = 0;
	$final_total = 0;
	$use = 0;
	// $to = "karunakaran.cse.26@gmail.com";
    $to = "aadukalam4u@gmail.com";
	$subject = "Hey you got an order - Aadukalam";
	$message = "Hi Team,<br><br><div style='margin-left:50px'>" .$raw_data['username']." from " .$raw_data['location']." wanted these products ";
	$message .="<p style='margin-left:50px'>";	
	foreach ($cart_details as $value) {
		$message = $message." ".$i." ".$value['product_name'];
		$insert =$value['product_name'].",".$insert;
		$message = $message." ".$value['product_quantity'];
		$insert2 = $value['product_quantity'].",".$insert2;
		$message = $message." - ".$value['total_price']."<br>";
		$insert3 = $value['total_price'].",".$insert3;
		$final_total = $final_total + $cart_details[$j]['total_price'];
		$i++;
		$j++;
	}
	$insert_value['user_id'] =$_SESSION['user_details']['id'];
	$insert_value['phone_no'] = $_SESSION['user_details']['phone_no'];
	$insert_value['user_name'] = $_SESSION['user_details']['username'];	
	$insert_value['product_name'] = $insert; 
	$insert_value['product_quantity'] = $insert2;
	$insert_value['actual_price'] = $insert3;
	// echo "<pre>";
	// print_r($insert_value);
	if (isset($rawdata['use_wallet'])) {
        if ($rawdata['use_wallet'] == 'true') {
        	if($_POST['actual_price'] >= $_SESSION['user_details']['wallet']){
            $new_price = $_POST['actual_price'] - $_SESSION['user_details']['wallet'] + $_POST['type'];
            $def =0;
            $condition = "`wallet` = '".$def."'";
            update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['Referral_id'].'"',db_connect());
            $_SESSION['user_details']['wallet'] = 0;
        }else{
        	$new_price = $_SESSION['user_details']['wallet'] - $_POST['actual_price'];
        	$val = $new_price;
        	$new_price = 0;
        	$condition = "`wallet` ='".$val."'";
        	update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['Referral_id'].'"',db_connect());
            $_SESSION['user_details']['wallet'] = $val;
        }
        }
    }
   	if (isset($rawdata['use_wallet'])) {
	 	if ($rawdata['use_wallet'] == 'true') {
	 		$message .="<p style='margin-left:50px'>Wallet amount :- .$wallet <br><br>packagetype:-".$_POST['package_price']; 
	$message .= "</p>
                        <P style='margin-left:20px'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p><p style='margin-left:65px'>
                            Total                :- " .$new_price." </p>contact him:- " .$raw_data['phone_no']. "</div><div style='margin-left:25px'>
                        Regards,<br>
                        Greefi Technologies</div>";
	 	}
	 	} else{
	 		 $message .="<p style='margin-left:50px'>packagetype:-".$_POST['package_price']; 
	$message .= "</p>
                        <P style='margin-left:20px'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p><p style='margin-left:65px'>
                            Total                :- " .$_POST['actual_price']." </p>contact him:- " .$raw_data['phone_no']. "</div><div style='margin-left:25px'>
                        Regards,<br>
                        Greefi Technologies</div>";
	 	}
		// print_r($message);
		$header = "From:greefitech@gmail.com \r\n";
         // $header .= "Cc:greefitech@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
            header('Location:../view/home.php?status=order_placed');
         }else {
            echo "Message could not be sent...";
            header('Location:../index.php?status=order_not_placed');            
         };
         if ($insert_value['product_name']!="empty") {
		insert('purchase_details',$insert_value ,$con);         	
         }
	$cart_result = select('*','in_cart',array('user_id' => $_SESSION['user_details']['id']),$con);
	// foreach ($cart_result as $value) {
	// 	$value['id'] = '';
	// 	$value['user_name'] = $_SESSION['user_details']['username'];
	// 	$value['phone_no'] = $_SESSION['user_details']['phone_no'];
	// }
	if ($_SESSION['user_details']['Referral_id']!="") {
    $get = select('*','`users`','Referral_id="'.$_SESSION['user_details']['referred_by'].'"',db_connect());
        $points = $_POST['actual_price'] / 100;
    $new_value = $get[0]['wallet'] + $points;
    $condition = "`wallet` = '".$new_value."'";
    update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['referred_by'].'"',db_connect());
    }
	 $sql = "DELETE FROM `in_cart` WHERE `user_id` = ".$_SESSION['user_details']['id'];
	 execute_query($sql,$con);
	// header('Location: ../index.php');
 ?>

