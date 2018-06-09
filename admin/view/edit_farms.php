<?php 
    include_once 'header.php'; 
    include_once '../controller/get_raw_details.php';
    $raw_data = get_details('farm_content');
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
                   Farms
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                        <tr>
                            <td>About Us</td>
                            <td>Menu 1</td>
                            <td>Menu 2</td>
                            <td>Menu 3</td>
                            <td>Dairy Farm</td>
                            <td>Goat Farm</td>
                            <td>Superba</td>
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
                            echo "<td>".$raw_data[$i]['farm_about_us']."</td>";
                            echo "<td>".$raw_data[$i]['menu_1']."</td>";
                            echo "<td>".$raw_data[$i]['menu_2']."</td>";
                            echo "<td>".$raw_data[$i]['menu_3']."</td>";
                            echo "<td>".$raw_data[$i]['dairy_farm']."</td>";
                            echo "<td>".$raw_data[$i]['goat_farm']."</td>";
                            echo "<td>".$raw_data[$i]['superba_farm']."</td>";

                            echo "<td><a class='btn btn-success' href='update_farms.php?farm_id=".$raw_data[$i]['id']."'>Edit</a></td>";
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