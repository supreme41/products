<?php 

// Include the database config file 
include_once 'connect.php'; 
 
if(!empty($_POST["pname"])){ 
    // Fetch state data based on the specific country 
	$pname=$_POST['pname']; 
    $query = "SELECT * FROM products WHERE pname = '$pname'"; 
	//print_r($query);exit();
	//print_r($query);exit();
   $result=mysqli_query($conn,$query);
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
       echo '<option value="">Select Product Id</option>'; 
           $row = mysqli_fetch_assoc($result);
           echo '<option value="'.$row['pid'].'" style="width:100%;">'.$row['pid'].'</option>'; 
		  // echo $row['pid'];
       // } 
    }else{ 
        echo '<option value=""> Product Id not available </option>'; 
    } 	
}
?> 
