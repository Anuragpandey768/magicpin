<?php include('./header.php') ?>
<header class="header_section">
    <section class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <!-- <h2 class="text-blue mb-5">Asli savings at million<span class="t-purple">+</span> stores
                            around
                            you!</h2> -->

                    </div>
                    <!-- <div class="wrap">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="What are you looking for?">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
</header>


<section class="offers space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-dark fw-bold text-center mb-4 fs-1">Offers You Will Love</h3>
            </div>
            <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
                    <div class=" owl-carousel owl-theme" id="myowl">
                        <div class="item  ">
                            <img src="./assets/images/offers-1.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-5.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-6.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-7.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-1.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-5.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-6.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item  ">
                            <img src="./assets/images/offers-4.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-3.jpg" class="img-fluid br-20" alt="">
                        </div>
                        <div class="item   ">
                            <img src="./assets/images/offers-7.jpg" class="img-fluid br-20" alt="">
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brands space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="text-dark fs-1 fw-bold mb-4 text-center">Top Food Brands</h3>

            </div>
            <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
                    <div class=" owl-carousel owl-theme" id="owl">
                        <?php
                        for ($a = 1; $a < 9; $a++) {
                        ?>
                        <div class="item mb-5">
                            <img src="./assets/images/brand-<?= $a ?>.webp" class="br-100 b-1 h-120 w-120" alt="">
                            <span class="discount text-center rounded-pill">Save <?= $a * 2 ?>%</span>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
                    <div class=" owl-carousel owl-theme relative" id="howl">
                        <?php
                        for ($a = 9; $a < 17; $a++) {
                        ?>
                        <div class="item mb-5">
                            <img src="./assets/images/brand-<?= $a ?>.webp" class="br-100 b-1 h-120 w-120" alt="">
                            <span class="discount text-center rounded-pill">Save <?= $a ?>%</span>
                        </div>

                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row align-items-center justify-content-center">
                    <div class=" owl-carousel owl-theme" id="cowl">
                        <?php
                        for ($a = 17; $a < 26; $a++) {
                        ?>
                        <div class="item mb-5">
                            <img src="./assets/images/brand-<?= $a ?>.webp" class="br-100 b-1 h-120 w-120" alt="">
                            <span class="discount text-center rounded-pill">Save <?= $a ?>%</span>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</section>

<section class="new-food-section mb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center fw-bold fs-1 mb-5">Simple And Tasty Recipies</h3>
            </div>

            <div class="col-md-12">
                <div class="w-100 h-100 owl-carousel owl-theme" id="eating">
                    <div class="item h-100 w-100">
                        <div class="card ">
                            <img src="./assets/images/eating-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h4 class="card-text "> Healthy meal</h4>
                                <p>60 calorie</p>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span><img src="./assets/images/fast-delivery.png" alt="" class="me-2"></span>
                                        <p class="fw-bold text-info"> deliver in 22 min</p>
                                    </div>
                                    <p class="fw-bold text-info">5% off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  h-100 w-100">
                        <div class="card">
                            <img src="./assets/images/eating-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h4 class="card-text ">Fresh Fruits</h4>
                                <p>150 calorie</p>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span> <img src="./assets/images/fast-delivery.png" class="me-2" alt=""></span>
                                        <p class="fw-bold text-info"> deliver in 45 min</p>
                                    </div>
                                    <p class="fw-bold text-info">15% off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  h-100 w-100">
                        <div class="card ">
                            <img src="./assets/images/eating-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <div class="cont">
                                    <h4 class="card-text text-center ">Enjoy Breakfast</h4>
                                    <p class="text-center">100 calorie</p>
                                </div>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span> <img src="./assets/images/fast-delivery.png" class="me-2" alt=""></span>
                                        <p class="fw-bold text-info"> deliver in 12 min</p>
                                    </div>
                                    <p class="fw-bold text-info">10% off</p>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="item  h-100 w-100">
                        <div class="card">
                            <img src="./assets/images/eating-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h4 class="card-text ">Delicious Burger</h4>
                                <p>90 calorie</p>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span> <img src="./assets/images/fast-delivery.png" class="me-2" alt=""></span>
                                        <p class="fw-bold text-info"> deliver in 36 min</p>
                                    </div>
                                    <p class="fw-bold text-info">5% off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  h-100 w-100">
                        <div class="card">
                            <img src="./assets/images/eating-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h4 class="card-text ">Fresh Fruits</h4>
                                <p>150 calorie</p>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span> <img src="./assets/images/fast-delivery.png" alt="" class="me-2"></span>
                                        <p class="fw-bold text-info"> deliver in 42 min.</p>
                                    </div>
                                    <p class="fw-bold text-info">15% off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  h-100 w-100">
                        <div class="card">
                            <img src="./assets/images/eating-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h4 class="card-text ">Delicious Burger</h4>
                                <p>90 calorie</p>
                                <div class=" d-flex justify-content-between">
                                    <div class="d-flex">
                                        <span> <img src="./assets/images/fast-delivery.png" alt="" class="me-2"></span>
                                        <p class="fw-bold text-info"> deliver in 1 hour</p>
                                    </div>
                                    <p class="fw-bold text-info">5% off</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="space user ">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h4 class="text-warning">Customer Reviews</h4>
                    <h2 class="text-white">What People Say</h2>
                </div>

                <div class="w-100 h-100 owl-carousel owl-theme mt-5" id="user">

                    <div class="item bg-white rounded-3">
                        <div class="user-content ">
                            <div class="user-icon text-center">
                                <img src="./assets/images/icon-user.png " class="img-fluid" alt="">
                            </div>
                            <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                                vitae laborum, iure ab
                                dolorem natus? Nesciunt impedit molestias magni quos, laudantium quisquam harum autem
                                dolores ipsam asperiores ullam expedita amet.</p>
                            <div class="user-img text-center">
                                <img src="./assets/images/testi-1.jpg" class="img-fluid" alt="">
                                <p class="mt-2 fs-4 fw-bold">Nicolas Markus</p>
                            </div>
                        </div>

                    </div>
                    <div class="item bg-white rounded-3">
                        <div class="user-content  ">
                            <div class="user-icon text-center">
                                <img src="./assets/images/icon-user.png " class="img-fluid" alt="">
                            </div>
                            <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                                vitae laborum, iure ab
                                dolorem natus? Nesciunt impedit molestias magni quos, laudantium quisquam harum autem
                                dolores ipsam asperiores ullam expedita amet.</p>
                            <div class="user-img text-center">
                                <img src="./assets/images/testi-2.jpg" class="img-fluid" alt="">
                                <p class="mt-2 fs-4 fw-bold">Nia</p>
                            </div>
                        </div>

                    </div>
                    <div class="item bg-white rounded-3">
                        <div class="user-content  text-center">
                            <div class="user-icon text-center">
                                <img src="./assets/images/icon-user.png " class="img-fluid" alt="">
                            </div>
                            <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
                                vitae laborum, iure ab
                                dolorem natus? Nesciunt impedit molestias magni quos, laudantium quisquam harum autem
                                dolores ipsam asperiores ullam expedita amet.</p>
                            <div class="user-img text-center">
                                <img src="./assets/images/user-3.jpg" class="img-fluid" alt="">
                                <p class="mt-2 fs-4 fw-bold">thresa Anderson</p>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</section>


<section class="app bg-white">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-md-6">
                <div class="app-content">
                    <h4 class="text-blue"> DOWNLOAD APP</h4>
                    <h2 class="fw-bold">Get Started Today
                        ! </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam iure repellendus natus. Quis
                        mollitia harum velit, dolorem corporis reiciendis culpa.</p>
                    <button class="btn px-3 py-2 bg-blue text-white rounded-pill">Get The App</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="app-img">
                    <img src="./assets/images/phone.gif" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="magician">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <img src="./assets/images/logo.png" alt="" class="img-fluid">
                    <p class="text-white fw-bold pt-3">Join our community to earn higher cashback, cool goodies, and
                        party
                        invites.
                    </p>
                    <a href="" class="btn bg-white">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>







<?php include('./footer.php') ?>