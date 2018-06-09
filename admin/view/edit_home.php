<?php 
	include_once 'header.php';
	include_once '../controller/get_home_content.php';
	if(isset($_SESSION['user_details']['user_type'])){
        if ($_SESSION['user_details']['user_type'] != 'admin') 
        {
            header('location:../../view/home.php?status=access_denied');
        }
    }
    $main_content = get_home_content();
    // echo "<pre>";
    // print_r($main_content[0]['page_content']);
    // echo "</pre>";
 ?>
 <?php if (!isset($main_content[0]['page_content'])=='empty') {?>
 	 <form action="../controller/add_home_content.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Add content</h1>
			<div class="form-group">
				<label>Add content</label>
				 <input type="text" class="form-control" name="page_content" placeholder="content">
			</div>
			<button type="submit" class="btn btn-primary">Add content</button>
		</div>
	</form>
<?php } ?>
<?php if (isset($main_content[0]['page_content'])=='empty') {?>
	<div class="home_content">
		<table class="table table-hover">
			<thead>
			  <tr>
			    <th>Id</th>
			    <th>contnent</th>
			    <th>Options</th>
			  </tr>
			</thead>
			<tbody>
			<?php 
                            if ($main_content[0]['page_content'] == 'empty') {
                                    echo "<tr><td>please add some content</td></tr>";
                                 } 
                            else{
                            echo "<tr>";
                            echo "<td>".$main_content[0]['id']."</td>";
                            echo "<td>".$main_content[0]['page_content']."</td>";
                            echo "<td><a class='btn btn-danger' href='../controller/delete_content.php?del=".$main_content[0]['id']."'>Delete</a> 	";
                            echo "<a class='btn btn-success' href='update_home_content.php?upd=".$main_content[0]['id']."'>update</a>";                          
                            echo "</tr>";
                        }
                         ?>
				
			</tbody>
		</table>	
</div>
<?php } ?>
<hr>
 <?php include_once 'footer.php'; ?>