<?php 
    include_once 'header.php'; 
    include_once '../controller/get_purchase_details.php';
    $raw_data = purchase_details();
    if(isset($_SESSION['user_details']['user_type'])){
        if ($_SESSION['user_details']['user_type'] != 'admin') 
        {
            header('location:../../view/home.php?status=access_denied');
        }
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel filterable">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Purchase
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                        <tr>
                            <th>S.no</th>
                            <th>user name</th>
                            <th>phone_no</th>
                            <th>location</th>
                            <th>product</th>
                            <th>product_quanity</th>
                            <th>actual price</th>
                            <th>package type</th>
                            <th>total_price</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($raw_data == 'empty') {
                                    echo "<tr><td>".$raw_data."</td></tr>";
                                 } 
                                 else{
                                    $i=0;
                                    foreach ($raw_data as $value) {
                                        echo "<tr>";
                                        echo "<td>".($i+1)."</td>";
                                        echo "<td>".$raw_data[$i]['user_name']."</td>";
                                        echo "<td>".$raw_data[$i]['phone_no']."</td>";
                                        echo "<td>".$raw_data[$i]['location']."</td>";
                                        echo "<td>".$raw_data[$i]['product_name']."</td>";
                                        echo "<td>".$raw_data[$i]['product_quantity']."</td>";
                                        echo "<td>".$raw_data[$i]['actual_price']."</td>";
                                        echo "<td>".$raw_data[$i]['package_type']."</td>";
                                        echo "<td>".$raw_data[$i]['total_price']."</td>";
                                        echo "</tr>";
                                        $i++;                                        
                                    }
                                 }
                                 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>