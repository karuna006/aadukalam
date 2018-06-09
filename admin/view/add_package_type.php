<?php 
 	include_once 'header.php';
 	include_once '../controller/common_functions.php';
 	include_once '../controller/add_package_controller.php';
 	$raw_data = get_total_package();
 	// print_r($raw_data);
if(isset($_SESSION['user_details']['user_type'])){
 		if ($_SESSION['user_details']['user_type'] != 'admin') 
 		{
 			header('location:../../view/home.php?status=access_denied');
 		}
 	} ?>
 	<?php
	  if(isset($_GET['status'])){
	    $status = $_GET['status'];
	  }else{
	    $status = "";
	  }
	  switch ($status) {
	    case 'updated':
	      echo '<div class="alert alert-success"><strong>Success!</strong> New Package added successfully.</div>';
	    break;
	    case 'not_updated':
	      echo '<div class="alert alert-warning"><strong>Sorry!</strong> Package name already present or Something went wrongly.</div>';
	    break;
	    case 'new_updated':
	      echo '<div class="alert alert-success"><strong>Success!</strong> Package updated successfully.</div>';
	    break;
	    default:
	      echo "";
	    break;
	  }
?>
<form action="../controller/add_package_type.php" method="post" enctype="multipart/form-data">
	<div class="panel-body">
		<h1 style="text-align:center">Add Package</h1>
		<div class="form-group">
			<label>Package Name:-</label>
			 <input type="text" class="form-control" name="package_name"  placeholder="Package Name" required>
			 <label>Package Price:-</label>
			 <input type="number" class="form-control" name="package_price"  placeholder="Package Price" required>
		</div>
		<button type="submit" class="btn btn-primary">Add Package</button>
	</div>
</form>
<div class="home_content">
		<table class="table table-hover">
			<thead>
			  <tr>
			    <th>No</th>
			    <th>Id</th>
			    <th>Package Name</th>
			    <th>Price</th>
			    <th>Options</th>
			  </tr>
			</thead>
			<tbody>
			<?php 
                            if ($raw_data == 'empty') {
                                    echo "<tr><td>please add some catagory</td></tr>";
                                 } 
                            else{
                                $i=0;
                            foreach ($raw_data as $value) {
                            echo "<tr>";
                            echo "<td>".($i+1)."</td>";
                            echo "<td>".$raw_data[$i]['id']."</td>";
                            echo "<td>".$raw_data[$i]['package_name']."</td>";
                            echo "<td>".$raw_data[$i]['package_price']."</td>";
                            echo "<td><a class='btn btn-danger' href='../controller/delete_package.php?del=".$raw_data[$i]['id']."'>Delete</a> 	";
                            echo "<a class='btn btn-success' href='update_package_type.php?upd=".$raw_data[$i]['id']."'>update</a>";                            
                            echo "</tr>";
                            $i++;
                            }
                        }
                         ?>
				
			</tbody>
		</table>	
</div>
<?php include_once 'footer.php'; ?>
