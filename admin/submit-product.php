<?php 
//Include the database configuration file 
$conn = new mysqli("localhost","root","","supreme_products");
if(isset($_POST['submit'])){  
//$pid=$db -> real_escape_string($_POST['pid']);
$pname=$_POST['pname'];
$pdesc=$_POST['pdesc'];
$pcategory=$_POST['pcategory'];
$pfeatures1=$_POST['features1'];
$pfeatures2=$_POST['features2'];
$pfeatures3=$_POST['features3'];
$pfeatures4=$_POST['features4'];
$pfeatures5=$_POST['features5'];
$pspecification=$_POST['pspecify'];
    // File upload configuration 
    $targetDir = "upload_product_images/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
			$random1 = substr(number_format(time() * rand(),0,'',''),0,10); 
            $fileName = $random1.basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "'".$fileName."',"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
		  
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = "INSERT INTO products (pname,pdescription,pcategory,pfeatures1,pfeatures2,pfeatures3,pfeatures4,pfeatures5,pspecification,updated_info,image1,image2,image3) VALUES 
            ('$pname','$pdesc','$pcategory','$pfeatures1','$pfeatures2','$pfeatures3','$pfeatures4','$pfeatures5','$pspecification',now(),$insertValuesSQL)"; 
			//print_r($insert);exit();
			$result = mysqli_query($conn,$insert) or die(mysqli_connect_errno()."Data cannot inserted");
        		
            if($result){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo '<script>alert(" Product Added Sucessfully")</script>'; 
	header("location:index.php");
} 

?>