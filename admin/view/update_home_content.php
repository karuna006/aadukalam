<?php 
	include_once 'header.php';
	include_once '../controller/get_home_content.php';
    $_SESSION['id'] = $_GET['upd'];
    $main_content = get_home_content($_SESSION['id']);
    if(isset($_SESSION['user_details']['user_type'])){
        if ($_SESSION['user_details']['user_type'] != 'admin') 
        {
            header('location:../../view/home.php?status=access_denied');
        }
    }
    // echo "<pre>";
    // print_r($main_content[0]['page_content']);
    // echo "</pre>";
 ?>
 <form action="../controller/update_home_content.php" method="post" enctype="multipart/form-data">
    <div class="panel-body">
        <h1 style="text-align:center">Add content</h1>
            <div class="form-group">
                <label>Add content</label>
                 <input type="text" class="form-control" value="<?php print_r($main_content[0]['page_content']);?>" name="page_content" placeholder="content">
            </div>
            <button type="submit" class="btn btn-primary">Add content</button>
        </div>
    </form>
<?php 
    include_once 'footer.php';
 ?>