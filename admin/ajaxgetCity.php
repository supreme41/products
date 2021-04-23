<?php 
// Include the database config file 
include_once 'connect.php'; 
 
if(!empty($_POST["state_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM city WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
    $result = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select City</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
}
?>