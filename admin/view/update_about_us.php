<?php 
    include_once 'header.php'; 
    include_once '../controller/get_raw_details.php';
    $raw_data = get_details('about_us');
    $_SESSION['about_id'] = $_GET['aid'];
    if(isset($_SESSION['user_details']['user_type'])){
        if ($_SESSION['user_details']['user_type'] != 'admin') 
        {
            header('location:../../view/home.php?status=access_denied');
        }
    }
?>
 <form action="../controller/update_aboutus.php" method="post" enctype="multipart/form-data">
    <div class="panel-body">
        <h1 style="text-align:center">Update About Us</h1>
            <div class="form-group">
                <label>Content:-</label>
                <textarea class="form-control" name="content" id="content"  rows="8" ><?php print_r($raw_data[0]['content']);?></textarea>
                   <label>Fusce tempus:-</label>
                <input type="text" class="form-control" name="menu_1" id="content" value="<?php print_r($raw_data[0]['menu_1']);?>"> 
                <label>Consectetur:-</label>
                <input type="text" class="form-control" name="menu_2" id="content" value="<?php print_r($raw_data[0]['menu_2']);?>">  
                <label>Dolor siet</label>
                <input type="text" class="form-control" name="menu_3" id="content" value="<?php print_r($raw_data[0]['menu_3']);?>">  
                            
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
<?php include_once 'footer.php'; ?>