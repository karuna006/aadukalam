<?php 
    include_once 'header.php'; 
    include_once '../controller/get_raw_details.php';
    $raw_data = get_details('product_details');
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
                    Products Table
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Price</td>
                            <td>Files</td>
                            <td>Available location</td>
                            <td>catagory</td>
                            <td style="width: 10%">delete</td>
                            <td style="width: 10%">update</td>
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
                            echo "<td>".$raw_data[$i]['product_name']."</td>";
                            echo "<td>".$raw_data[$i]['product_price']."</td>";
                            echo "<td>".$raw_data[$i]['files']."</td>";
                            echo "<td>".$raw_data[$i]['location']."</td>";                        
                            echo "<td>".$raw_data[$i]['catagory']."</td>";
                            echo "<td><a class='btn btn-danger' href='../controller/delete_product.php?del=".$raw_data[$i]['id']."'>Delete</a></td>";
                            echo "<td><a class='btn btn-success' href='update_details.php?upd=".$raw_data[$i]['id']."'>update</a></td>";
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