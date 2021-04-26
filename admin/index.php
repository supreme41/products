<?php
include_once 'home.php';
?>
<script src="js/image-upload.js" ></script>
<div class="container" style="margin-left:15%;">
<div class="row justify-content-center">
          <div class="col-md-12 offset-md-1">
            <span class="anchor" id="formComplex"></span>
            <hr class="my-5">
            <!-- form complex example -->
            <div class="card card-outline-secondary">
              <div class="card-header">
                <h3 class="mb-0">Add Product Details</h3>
              </div>
			  
			  <hr class="my-5">
			  <form action="submit-product.php" method="post" enctype='multipart/form-data'>
              <div class="card-body">
			  
			  
			  
                <div class="row mt-12">
                  <div class="col-sm-3 pb-3">
                    <label for="exampleAccount">Product Id</label> 
										<input class="form-control" id="pid" name="pid" placeholder="id" type="text" required>
                  </div>
                  <div class="col-sm-3 pb-3">
                    <label for="exampleCtrl">Product Name</label> 
										<input class="form-control" id="pname" name="pname" placeholder="Product Name" type="text" required>
                  </div>
                 <div class="col-sm-3 pb-3">
                    <label for="exampleAmount">Product Description</label>
                    <div class="input-group">
                     
											 <textarea class="form-control" id="pdesc" name="pdesc" rows="3" required></textarea> 
											<small class="text-muted">Add Product Description.</small>
                    </div>
                 </div>
				   <div class="col-sm-3 pb-3">
                    <label for="exampleCtrl">Product Category</label> 
										
					<select class="form-control custom-select" id="pcategory" name="pcategory" required>
                      <option class="text-white bg-warning">
                        Pick a Category
                      </option>
                      <option value="solar">
                        Solar Water Heater
                      </option>
                      <option value="geyser">
                        Geyser
                      </option>
                      <option value="purifier">
                        Water Purifier
                      </option>
					  <option value="chimnies">
                       Chimnies
                      </option>
					  </select>
                  </div>
				  
				  </div>
				
				  <hr class="my-5">
				  <div class="card-header">
                <h3 class="mb-0">Add Product Features</h3>
              </div>
				   <hr class="my-5">
				   
				 <div class="row mt-12"> 
                  <div class="col-sm-2 pb-3">
                    <label for="exampleFirst">features 1</label> 
										<input class="form-control" id="features1"  name="features1" type="text" required>
                  </div>
				  <div class="col-sm-2 pb-3">
                    <label for="exampleFirst">features 2</label> 
										<input class="form-control" id="features2"  name="features2" type="text" required>
                  </div>
				  <div class="col-sm-2 pb-3">
                    <label for="exampleFirst">features 3</label> 
										<input class="form-control" id="features3"  name="features3" type="text" required>
                  </div>
				  <div class="col-sm-2 pb-3">
                    <label for="exampleFirst">features 4</label> 
										<input class="form-control" id="features4"  name="features4" type="text" required>
                  </div>
				  <div class="col-sm-2 pb-3">
                    <label for="exampleFirst">features 5</label> 
										<input class="form-control" id="features5"  name="features5" type="text" required>
                  </div> 
                  
                  
                  
                  
                </div>
              
			  
			  
			  
			    <hr class="my-5">
			  
			    <div class="card-header">
                <h3 class="mb-0">Add Product Images</h3>
				
              </div>
			  
			   <hr class="my-5">
			   
			   
			   
	<div class="row mt-12">
                  <div class="col-sm-3 pb-3">
    
     
       <label for="exampleFirst">Product Specification</label> 
	    <textarea class="form-control" id="pspecify" name="pspecify" rows="5" required ></textarea> 
			<small class="text-muted">Add Product Specification.</small>							
    </div>
		   

	<div class="box col-sm-4 pb-3">		   
 
  
    
      <label>
       <label for="exampleFirst"> Note :choose 3 Product Photos </label> 
	   <p> Note : add only ( jpg,png,jpeg,gif )</p>
		<input type="file"  class="image-upload" id="files" name="files[]" multiple="multiple" required>
      </label>
 


   </div>
	
</div>

		   
<div class="card-footer">
                <div class="float-right">
                                    <input class="btn btn-danger" type="reset" value="Cancel"> 
									<input class="btn btn-success btn-lg" type="submit" name="submit" value="ADD Product">
                </div>
              </div>
			  
			  </form>
			  
            </div><!--/card-->
          </div>
        </div><!--/row-->
      
  </div><!--/container-->
</div>


<script>
 /* $(document).ready(function () {
    $('.btn-success').click(function (e) {
      e.preventDefault();
      var pid = $('#pid').val();
      var pname = $('#pname').val();
      var pdesc = $('#pdesc').val();
	  var pcategory = $('#pcategory').val();
	  var features1 = $('#features1').val();
	  var features2 = $('#features2').val();
	  var features3 = $('#features3').val();
	  var features4 = $('#features4').val();
	  var features5 = $('#features5').val();
	  var pspecify = $('#pspecify').val();
	  var files=$('#files').val();
      $.ajax
        ({
          type: "POST",
          url: "form_submit.php",
          data: { "name": name, "email": email, "message": message },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });*/
</script>