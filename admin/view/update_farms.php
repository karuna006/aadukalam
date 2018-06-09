<?php 
    include_once 'header.php'; 
    include_once '../controller/get_raw_details.php';
    $raw_data = get_details('farm_content');
    $_SESSION['farm_id'] = $_GET['farm_id'];
    if(isset($_SESSION['user_details']['user_type'])){
        if ($_SESSION['user_details']['user_type'] != 'admin') 
        {
            header('location:../../view/home.php?status=access_denied');
        }
    }
?>
 <form action="../controller/update_farms.php" method="post" enctype="multipart/form-data">
    <div class="panel-body">
        <h1 style="text-align:center">Update Farms Page</h1>
            <div class="form-group">
                <label>Content:-</label>
                <textarea class="form-control" name="farm_about_us" id="content"  rows="8" ><?php print_r($raw_data[0]['farm_about_us']);?></textarea>
                   <label>Menu 1:</label>
                <input type="text" class="form-control" name="menu_1" id="content" value="<?php print_r($raw_data[0]['menu_1']);?>"> 
                <label>Menu 2:</label>
                <input type="text" class="form-control" name="menu_2" id="content" value="<?php print_r($raw_data[0]['menu_2']);?>">  
                <label>Menu 3:</label>
                <input type="text" class="form-control" name="menu_3" id="content" value="<?php print_r($raw_data[0]['menu_3']);?>">  
                <label>Dairy Farm:</label>
                <input type="text" class="form-control" name="dairy_farm" id="content" value="<?php print_r($raw_data[0]['dairy_farm']);?>"> 
                <label>Goat Farm:</label>
                <input type="text" class="form-control" name="goat_farm" id="goat_farm" value="<?php print_r($raw_data[0]['goat_farm']);?>">  
                <label>Superba Farm:</label>
                <input type="text" class="form-control" name="superba_farm" id="superba_farm" value="<?php print_r($raw_data[0]['superba_farm']);?>">  
                            
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
<?php include_once 'footer.php'; ?>