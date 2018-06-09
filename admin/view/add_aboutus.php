<?php 
    include_once 'header.php'; 
    include_once '../controller/get_raw_details.php';
    $raw_data = get_details('about_us');
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
                   About us
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                        <tr>
                            <td>Content</td>
                            <td>Fusce tempus</td>
                            <td>Consectetur</td>
                            <td>Dolor siet</td>
                            
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
                            echo "<td>".$raw_data[$i]['content']."</td>";
                            echo "<td>".$raw_data[$i]['menu_1']."</td>";
                            echo "<td>".$raw_data[$i]['menu_2']."</td>";
                            echo "<td>".$raw_data[$i]['menu_3']."</td>";

                            echo "<td><a class='btn btn-success' href='update_about_us.php?aid=".$raw_data[$i]['id']."'>Edit</a></td>";
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