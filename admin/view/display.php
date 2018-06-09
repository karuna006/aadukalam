<?php  
    include_once '../controller/display_controller.php';
    $raw_data = display_details();
    if ($raw_data == 'empty') {
                                    echo "<tr><td>".$raw_data."</td></tr>";
                                 } 
                                 else{
                                    $i=0;
                                    foreach ($raw_data as $value) {
                                    	echo "<input type='checkbox' id='myCheckbox1'/>";
                                    	echo "<label for='myCheckbox1'>";
                                    	echo "<img src=".$raw_data[$i]['files']." alt='Mountain View' style='width:304px;height:228px;'><br>";
                                    	echo "</label>";
                                        echo $raw_data[$i]['product_name']."<br>";
                                        echo $raw_data[$i]['price']."<br>";
                                        $i++;
                                    }
                                 }
                                 
?>