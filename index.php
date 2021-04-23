<?php
    $title = "Supreme Products";
    include('top.php');
    include('navigation.php');
?>

<!-- <div class="container-fluid section-parallax no-gutter">
    <div class="overlay" style="width: 100%; height: 100%; background: rgb(0, 0, 0, 0.6)">
        <div class="container">
            <div class="col-lg-6 text-white v-center py-5 mt-5" >
                <h1 class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores voluptatem assumenda fugiat a, rem consequuntur.
                </h1>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Corrupti esse unde aperiam tempore?
                </p>
                <a href="#" class="btn btn-md mt-4 btn-info text-white">View All Products</a>
            </div>
        </div>
    </div>
</div> -->
 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container py-5">
          <div class="row">
              <div class="col-lg-7 py-5">
                <h1 class="light-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Recusandae odit quisquam harum fugit impedit dolore.
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate error doloribus et.
                </p>
                <a href="#" class="btn btn-lg bg-custom text-white">View Products</a>
              </div>
              <div class="col-lg-5 mob-none">
                  <img src="images/solar.png" alt="" class="w-100">
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container py-5">
          <div class="row">
              <div class="col-lg-5 mob-none">
                  <img src="images/chimney.png" alt="" class="w-100">
              </div>
              <div class="col-lg-7 py-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate error doloribus et.
                </p>
                <h1 class="light-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Recusandae
                </h1>
                
                <a href="#" class="btn btn-lg bg-custom text-white">View Products</a>
              </div>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container py-5">
          <div class="row">
              <div class="col-lg-7 py-5">
                <h1 class="light-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Recusandae odit quisquam harum fugit impedit dolore.
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate error doloribus et.
                </p>
                <a href="#" class="btn btn-lg bg-custom text-white">View Products</a>
              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-3 mob-none">
                  <img src="images/geyser.png" alt="" class="w-100">
              </div>
          </div>
      </div>
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

<!-- <div class="container">
    <h1 class="skinny-text py-4">Featured Products</h1>
    <div class="row g-5">
        <div class="col-lg-6 shadow f-prod">
            <img src="images/featured-1.png" alt="" class="w-100">
        </div>
        <div class="col-lg-6">
            <div class="row g-2">
                <div class="col-lg-6 f-prod col-6 shadow">
                    <img src="images/featured-2.png" alt="" class="w-100">
                </div>
                <div class="col-lg-6 f-prod col-6 shadow">
                    <img src="images/featured-3.png" alt="" class="w-100">
                </div>
                <div class="col-lg-6 f-prod col-6 shadow">
                    <img src="images/featured-4.png" alt="" class="w-100">
                </div>
                <div class="col-lg-6 f-prod col-6 shadow">
                    <img src="images/featured-5.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="prod-cat-section mt-5">
    <div class="container py-5 text-center">
        <h1 class="skinny-text">Solar Water Heaters</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perspiciatis? Aliquam, praesentium.</p>
        <a href="#" class="cat-view"> View All Producs <span class="fa fa-angle-double-right"></span> </a>
        <div class="col-lg-8 m-auto mt-5">
            <img src="images/solar-cat.png" alt="" class="w-100">
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-6 text-center py-5  bg-light-gradient">
            <h1 class="skinny-text">Electric Geysers</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Voluptas, perspiciatis? Aliquam, praesentium.</p>
            <a href="#" class="cat-view-2"> View All Producs <span class="fa fa-angle-double-right"></span> </a>
            <div class="col-lg-4 m-auto mt-5">
                <img src="images/featured-2.png" alt="" class="w-100">
            </div>
        </div>
        <div class="col-lg-6 prod-cat-section py-5 text-center prod-cat-section">
            <h1 class="skinny-text">Water Purifiers</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Voluptas, perspiciatis? Aliquam, praesentium.</p>
            <a href="#" class="cat-view"> View All Producs <span class="fa fa-angle-double-right"></span> </a>
            <div class="col-lg-4 m-auto mt-4">
                <img src="images/purifier.png" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>
<section class="prod-cat-section">
    <div class="container py-5 text-center">
        <h1 class="skinny-text">Kitchen Chimneys</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, perspiciatis? Aliquam, praesentium.</p>
        <a href="#" class="cat-view"> View All Producs <span class="fa fa-angle-double-right"></span> </a>
        <div class="col-lg-5 m-auto mt-5">
            <img src="images/chimney.png" alt="" class="w-100">
        </div>
    </div>
</section>


<section class="container-fluid py-5 bg-light-2">
    <div class="container">
        <h2 class="skinny-text text-center">Featured Products</h2>
        <div class="row">
           <div class="col-lg-3">
                <div class="col-lg-12 products mt-4 shadow">
                    <div class="col-lg-12 p-3">
                        <img src="images/featured-1.png" alt="" class="w-100">
                    </div>
                    <h5 class="mt-3">Supreme ETC Solar Water Heater</h5>
                    <p class="mt-2 text-grey pb-3">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
           </div>

            <div class="col-lg-3">
                <div class="col-lg-12 products mt-4 shadow">
                    <div class="col-lg-12 p-3">
                        <img src="images/featured-2.png" alt="" class="w-100">
                    </div>
                    <h5 class="mt-3">Electric Geyser From Supreme</h5>
                    <p class="mt-2 text-grey pb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing.
                    </p>
                </div>
           </div>

           <div class="col-lg-3">
                <div class="col-lg-12 products mt-4 shadow">
                    <div class="col-lg-12 p-3">
                        <img src="images/featured-3.png" alt="" class="w-100">
                    </div>
                    <h5 class="mt-3">Supreme Kitchen Chimney - Crown X</h5>
                    <p class="mt-2 text-grey pb-3">
                        Lorem, ipsum dolor.
                    </p>
                </div>
           </div>

           <div class="col-lg-3">
                <div class="col-lg-12 products mt-4 shadow">
                    <div class="col-lg-12 p-3">
                        <img src="images/featured-4.png" alt="" class="w-100">
                    </div>
                    <h5 class="mt-3">Supreme Kitchen Chimney - Royal c60</h5>
                    <p class="mt-2 text-grey pb-3">
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
           </div>

        </div>
    </div>
</section>

<?php
    include('footer.php');
?>