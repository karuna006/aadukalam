<?php 
session_start();
include_once '../admin/model/db.php';
if(isset($_REQUEST['page_type'])){
    // echo $_REQUEST['page_type'];
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_SESSION['user_details']);
    $raw_data = $_POST;
    unset($raw_data['page_type']);
    unset($raw_data['referred_by']);
    // print_r($raw_data);
    $wallet = $_SESSION['user_details']['wallet'];
    $message = "";
    if (isset($raw_data['use_wallet'])) {
        if ($raw_data['use_wallet'] == 'true') {
            if($_POST['total_price'] >= $_SESSION['user_details']['wallet']){
            $new_price = $_POST['total_price'] - $_SESSION['user_details']['wallet'];
            $def =0;
            $condition = "`wallet` = '".$def."'";
            // update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['Referral_id'].'"',db_connect());
            $_SESSION['user_details']['wallet'] = 0;
        }else{
            $new_price = $_SESSION['user_details']['wallet'] - $_POST['total_price'];
            print_r($new_price);
            $val = $new_price;
            $new_price = 0;
            $condition = "`wallet` ='".$val."'";
            update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['Referral_id'].'"',db_connect());
            $_SESSION['user_details']['wallet'] = $val;            
        }
        }
    }
    $result = insert('purchase_details',$raw_data,db_connect());
    $order = $_REQUEST['product_name'].'-'.$_REQUEST['product_quantity'].'-'.$_REQUEST['total_price'];
         $to = "aadukalam4u@gmail.com";
        // $to = "karunakaran.cse.26@gmail.com";
         $subject = "Hey you got an order - Aadukalam";        
         $message .= "Hi Team,<br><br>";
         $message .=    "<div style='margin-left:50px'>"     
                        .$raw_data['user_name']." from " .$raw_data['location']." wanted these products<p style='margin-left:50px'>
                        1." .$raw_data['product_name'] ." ". $raw_data['product_quantity']. " - " .$raw_data['total_price']. "</p>";
        if (isset($raw_data['use_wallet'])) {
        if ($raw_data['use_wallet'] == 'true') {
            $message .="<p style='margin-left:50px'>Wallet amount :- .$wallet<br><br>remining amount :- .$val<br><br>packagetype :- ".$_POST['package_type']; 
        $message .="<P style='margin-left:20px'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p><p style='margin-left:65px'>
                            Total                - " .$new_price.
                        "</p>contact him:- " .$raw_data['phone_no']. "</div><div style='margin-left:25px'>
                        Regards,
                        Greefi Technologies</div>";         
        }
        }else{
                $message .="<p style='margin-left:50px'>packagetype :- ".$_POST['package_type'];
                $message .= "</p>
                        <P style='margin-left:20px'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </p><p style='margin-left:65px'>
                            Total                - " .$raw_data['total_price'].
                        "</p>contact him:- " .$raw_data['phone_no']. "</div><div style='margin-left:25px'>
                        Regards,
                        Greefi Technologies</div>";
        }
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
}else{
    if(isset($_SESSION['user_details'])){
        pop_last_3_elements($_REQUEST);
        $splited_products = split_products($_REQUEST);
        add_to_cart($splited_products, $_SESSION['user_details']);
        header("Location:../view/check_out.php");
    }else{
        header("Location:../view/login.php");
    }
}
if ($_SESSION['user_details']['Referral_id']!="") {
    $get = select('*','`users`','Referral_id="'.$_SESSION['user_details']['referred_by'].'"',db_connect());
        $points = $raw_data['total_price'] / 100;
    $new_value = $get[0]['wallet'] + $points;
    $condition = "`wallet` = '".$new_value."'";
    update($condition,'`users`','Referral_id="'.$_SESSION['user_details']['referred_by'].'"',db_connect());
    }
if (!isset($_SESSION['user_details'])) {
if ($_POST['referred_by']!="") {
    $get = select('*','`users`','Referral_id="'.$_POST['referred_by'].'"',db_connect());
        $points = $raw_data['total_price'] / 100;
    $new_value = $get[0]['wallet'] + $points;
    $condition = "`wallet` = '".$new_value."'";
    update($condition,'`users`','Referral_id="'.$_POST['referred_by'].'"',db_connect());
    }    
}
function pop_last_3_elements(&$array){
    for($i = 0; $i<3; $i++){
        array_pop($array);
    }
}

function split_products($total_products){
    $final_products = array_chunk($total_products,3);
    return $final_products;
}

function add_to_cart($splited_products, $user_details){
    foreach ($splited_products as $key => $product_details) {
        $product_total_price = $product_details[0]*$product_details[2];
        $quantity = $product_details[0];
        $product_name = $product_details[1];
        $user_id = $user_details['id'];
        $sql = "INSERT INTO `in_cart` (`user_id`, `product_name`, `product_quantity`, `total_price`) VALUES('".$user_id."','".$product_name."','".$quantity."','".$product_total_price."')";
        execute_query($sql);
    }
}
