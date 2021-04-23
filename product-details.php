<?php

            include('connection/connection.php');

            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];

                $sql = "SELECT * FROM products WHERE pid = $id";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($prod = mysqli_fetch_assoc($res)) {  ?>

<?php
    $title=$prod['pname'];
    include('top.php');
    include('navigation.php');
?>

<div class="container mt-5 shadow">
    

    <div class="row">

        <div class="col-lg-5 prod-cat-section">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background: none;">
                        <img src="admin/upload_product_images/<?php echo $prod['image1']; ?>" class="d-block w-100" alt="<?php  echo $prod['pname']; ?>">
                    </div>
                    <div class="carousel-item" style="background: none;">
                        <img src="admin/upload_product_images/<?php echo $prod['image2']; ?>" class="d-block w-100" alt="<?php  echo $prod['pname']; ?>">
                    </div>
                    <div class="carousel-item" style="background: none;">
                        <img src="admin/upload_product_images/<?php echo $prod['image3']; ?>" class="d-block w-100" alt="<?php  echo $prod['pname']; ?>">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
	    </div>

        <div class="col-lg-7 prod-details">
            <h2 class="skinny-text">
                <?php echo $prod['pname']  ?>
            </h2>
            <p class="mt-4 text-grey">
                Product Description : <?php echo $prod['pdescription']; ?>
            </p>
            <h3 class="pt-3 skinny-text"> Product Features </h3>
            <ul class="mt-4">
                <li class="mt-2">
                    <?php echo $prod['pfeatures1'] ?>
                </li>
                <li class="mt-2">
                    <?php echo $prod['pfeatures2'] ?>
                </li>
                <li class="mt-2">
                    <?php echo $prod['pfeatures3'] ?>
                </li>
                <li class="mt-2">
                    <?php echo $prod['pfeatures4'] ?>
                </li>
                <li class="mt-2">
                    <?php echo $prod['pfeatures5'] ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- <div class="container mt-5">
    <div class="col-lg-6">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th colspan="2" class="bg-light-gradient">
                        <h3>Specifications</h3>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        Capacity:	
                    </th>
                    <td>
                        220 LPD/Liters
                    </td>
                </tr>
                <tr>
                    <th>
                        Circulation Type:	
                    </th>
                    <td>
                        Thermosyphon
                    </td>
                </tr>
                <tr>
                    <th>
                        Coating	
                    </th>
                    <td>
                        Porcelain Enamel (Glass lined)
                    </td>
                </tr>
                <tr>
                    <th>
                        Maximum Water Hardness		
                    </th>
                    <td>
                        1000 ppm
                    </td>
                </tr>
                <tr>
                    <th>
                        No. Of Tubes		
                    </th>
                    <td>
                        17
                    </td>
                </tr>
                <tr>
                    <th>
                        Pressure		
                    </th>
                    <td>
                        1 bar
                    </td>
                </tr>
                <tr>
                    <th>
                        Product Certification		
                    </th>
                    <td>
                        MNRE Approved ISO 9001:2000
                    </td>
                </tr>
                <tr>
                    <th>
                        Space Required		
                    </th>
                    <td>
                        2*2.5 (W*L)
                    </td>
                </tr>
                <tr>
                    <th>
                        Tank Insulation		
                    </th>
                    <td>
                        PUF- 50 mm(Polyurethane Foam)
                    </td>
                </tr>
                <tr>
                    <th>
                        Tube length		
                    </th>
                    <td>
                        2100 mm
                    </td>
                </tr>
                <tr>
                    <th>
                        Tube Size		
                    </th>
                    <td>
                        58 mm
                    </td>
                </tr>
                <tr>
                    <th>
                        Type :	
                    </th>
                    <td>
                        Evacuated Tube Collector (ETC)
                    </td>
                </tr>
                <tr>
                    <th>
                        Warranty	
                    </th>
                    <td>
                        10 Years
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div> -->

<?php } } } ?>

<div class="p-3"></div>
<?php
    include('footer.php');
?>