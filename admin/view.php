<?php
include_once 'home.php';
?>
<!-- External jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<div class="container">
<div class="page-header">
<h2>Products List</h2>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<table  id="example">
<thead>
<tr>
<th scope="col">pid</th>
<th scope="col">Name</th>
<th scope="col">description</th>
<th scope="col">Category</th>
<th scope="col">features</th>
<th scope="col">features</th>
<th scope="col">features</th>
<th scope="col">features</th>
<th scope="col">features</th>
<th scope="col">Specification</th>
<th scope="col">Image</th>
<th scope="col">Image</th>
<th scope="col">Image</th>
</tr>
</thead>
<tbody>
<?php
include_once 'connect.php';
$query="select * from products"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[0];?></th>

<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[7];?></td>
<td><?php echo $array[8];?></td>
<td><?php echo $array[9];?></td>
<td><?php echo $array[10];?></td>
<td><?php echo $array[11];?></td>
<td><?php echo $array[12];?></td>
<td><?php echo $array[13];?></td>
<td><img src="upload_product_images/<?php echo $array[14];?>" alt="<?php echo $array[1];?>" id="myImg" style="width:100%;max-width:300px" /></td>

<td><img src='<?php echo "upload_product_images/" .$array[15];?>' alt="<?php echo $array[1];?>" id="myImg" style="width:100%;max-width:300px" /></td>
<td><img src='<?php echo "upload_product_images/" .$array[16];?>'  alt="<?php echo $array[1];?>" id="myImg" style="width:100%;max-width:300px" /></td>

</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
</table>
</div>

</div>        
</div>
    
	<!-- <script type="text/javascript" src="./js/jquery-1.12.3.min.js"></script> -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>	
<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable( {
        
    } );
} );
</script>
	
<style>

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 40px;
			margin-bottom: 40px;
			
		}
		table, th, td {
		   border: 1px solid #bbb;
		   text-align: left;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		th {
			background-color: #ddd;
		}
		th,td {
			padding: 15px;
		}
		button {
			cursor: pointer;
		}
		/*Initial style sort*/
		.tablemanager th.sorterHeader {
			cursor: pointer;
		}
		.tablemanager th.sorterHeader:after {
			content: " \f0dc";
			font-family: "FontAwesome";
		}
		/*Style sort desc*/
		.tablemanager th.sortingDesc:after {
			content: " \f0dd";
			font-family: "FontAwesome";
		}
		/*Style sort asc*/
		.tablemanager th.sortingAsc:after {
			content: " \f0de";
			font-family: "FontAwesome";
		}
		/*Style disabled*/
		.tablemanager th.disableSort {

		}
		#for_numrows {
			padding: 10px;
			float: left;
		}
		#for_filter_by {
			padding: 10px;
			float: right;
		}
		#pagesControllers {
			display: block;
			text-align: center;
		}
	</style>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>