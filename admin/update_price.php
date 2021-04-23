<?php
include_once 'home.php';
include_once 'class.user.php';
include_once 'connect.php';
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel = "stylesheet" type = "text/css" href = "https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {	`````````````````	`
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<div class="container">
<hr class="my-5">
<h2>Add Price </h2>
<hr class="my-5">
<form action="submit-product.php" method="post" enctype='multipart/form-data'>
              <div class="card-body">

		  
			  
                <div class="row mt-12">
				<div class="col-sm-3 pb-3">
			
                    <label for="exampleCtrl">Product Name </label> 
		<?php 
    // Include the database config file 
    include_once 'connect.php'; 
     
    // Fetch all the country data 
    $query = "SELECT DISTINCT pname FROM products ORDER BY pname ASC"; 
    $result = $conn->query($query); 
?>									
			
					
 <select id="productname" name="pname" class="form-control custom-select" required>
    <option value="">Select product</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['pname'].'">'.$row['pname'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Product not available</option>'; 
    } 
    ?>
</select>
					 
</div>
				  <div class="col-sm-3 pb-3">
				  <label for="exampleCtrl">Product Id </label> 
	               <select id="productid" class="form-control custom-select" name="productid" required >
                          <option value="">Select Product Id</option>
                      </select>
                   </div>



                  <div class="col-sm-3 pb-3">
                    <label for="exampleAccount">state</label> 
					<?php 
    // Include the database config file 
     
     
    // Fetch all the country data 
    $query = "SELECT * FROM state WHERE status = 1 ORDER BY state_name ASC"; 
    $result = $conn->query($query); 
?>

<!-- Country dropdown -->
<select id="state" class="form-control custom-select" name="state" required>
    <option value="">Select State</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
    ?>
</select>
	</div>				
										
                  
				  
				  
				  
				  
				  
				  
				  
				  
                  <div class="col-sm-3 pb-3">
                    <label for="exampleCtrl">City</label> 
										<select id="city" class="form-control custom-select" name="city" required>
                          <option value="">Select City </option>
                      </select>
                  </div>
				 </div>
				 
				 
				 <div class="row mt-12" style="margin-top:5%;">
                 <div class="col-sm-3 pb-3">
                    <label for="exampleAmount">Actual Price</label>
                    
                     
											 <input class="form-control" id="aprice" name="aprice" placeholder="Enter Actual price" type="text" required>
                    
                 </div>
				   <div class="col-sm-3 pb-3">
                    <label for="exampleAmount">Price</label>
                   
                     
											 <input class="form-control" id="price" name="price" placeholder="Enter price" type="text" required>
                    
                 </div>
				   <div class="d-grid gap-2 col-6 mx-auto">
               
                                    <input class="btn btn-info" type="reset" value="Cancel"> 
									<input class="btn btn-success" type="submit" name="submit" value="ADD Price">
               
              </div>
				  
				  
				  </div>

</div>
</form>


 
</div>
<hr class="my-5">









<div class="container">
<h2>Update Products Price</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th >Product id</th>
    <th >Product Name</th>
	<th >Description</th>
	<th >District</th>
	<th >Pincode</th>
	<th> price</th>
	<th >Actual Price</th>
	<th >Update</th>
  </tr>
  
  
  
<?php 
  $query="select * from products"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query); 
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[0];?></th>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
<td><?php echo $array[5];?></td>
<td><?php echo $array[6];?></td>
<td> <a href="update.php?id=<?php echo $array[0] ?>">Update </a> &nbsp;&nbsp;</td>

</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</table>









<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</div>
</body>
</html> 
<script>
$(document).ready(function(){
    $('#productname').on('change', function(){
        var pname = $(this).val();
        if(pname){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'pname='+pname,
                success:function(html){
                    $('#productid').html(html);
                   
                }
            }); 
        }else{
            $('#productid').html('<option value="">Select product name first</option>');
            
        }
    });
    
  
 $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxgetCity.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                    
                }
            }); 
        }else{
            $('#city').html('<option value="">Select State first</option>');
            
        }
    });
});
</script>
