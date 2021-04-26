<?php
    $title="Supreme Kitchen Chimneys";
    include('top.php');
    include('navigation.php');
?>

<div class="container">
    <div class="row">

        <?php
            include('connection/connection.php');

            // if(isset($_REQUEST['id'])){
            //     $category = $_REQUEST['id'];

            $sql = "SELECT * FROM products WHERE pcategory = 'chimnies'";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($prod = mysqli_fetch_assoc($res)) {  ?>

                    <div class="col-lg-3 mt-5">
                        <a href="product-details.php?id=<?php echo $prod['pid'] ?>" class="prod-card">
                            <div class="card px-2 py-3">
                                <img src="admin/upload_product_images/<?php echo $prod['image1']; ?>" alt="" class="w-100">
                                <h5 class="mt-2 ">
                                    <?php echo $prod['pname']; ?>
                                </h5>
                                <p><?php echo $prod['pdescription'];  ?></p>
                        </div> </a>
                    </div>

        <?php
         } }
        else{
            echo"<h3 class='text-danger text-center py-3'> No Products Found </h3>";
        }
        ?>

    </div>
</div> 

<?php
    include('footer.php');
?>
