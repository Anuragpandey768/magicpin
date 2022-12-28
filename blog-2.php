<?php include('./header.php') ?>

<section class="bg-blue blog p-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <h3 class="cont fs-2 fw-bold text-white">BLOG 2</h3>
                    <p class="fs-5 text-white"><span><a href="./index.php">Home</a></span> <span>></span>
                        <span>BLOG 2</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="space">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="relative ">
                    <img src="./assets/images/blog-2.jpg" class="img-fluid cover relative" alt="">
                    <a href="https://www.youtube.com/watch?v=Sb9SsxBPBEU" class="video-btn popup-video">
                        <i class="fa-solid fa-play"></i>
                    </a>

                </div>
                <div class="item-dot-1"></div>
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold t-puple">Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corporis omnis porro molestiae
                    quibusdam at amet modi dolorum, ut repellat, esse facilis error quaerat, rerum iste. Hic dolorum ex
                    assumenda nulla, eos numquam perspiciatis corporis, repudiandae recusandae consequatur ipsum
                    consequuntur?</p>
                <a href="#" class="btn bg-dark text-white px-4 relative">let's Check <span class="overlay"><i
                            class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="container">
        <div class="row align-items-center">

            <?php
            for ($b = 1; $b < 7; $b++) {
            ?>
            <div class="col-md-3">
                <div class="mb-3 card  h-100">

                    <img src="./assets/images/card-<?= $b ?>.jpg" class="img-fluid " alt="">
                    <div class="title p-3">
                        <h3>Heading <?= $b ?></h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores distinctio vel ullam
                            accusantium, quis consectetur?</p>
                        <button class="btn bg-primary text-white">
                            Read more
                        </button>
                    </div>
                </div>
            </div>
            <?php } ?>








        </div>
    </div>
</section>

<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="features-card h-100">
                    <div class="feature-icon">
                        <i class="fa-solid fa-mobile text-danger"></i>
                        <div class="number">1
                        </div>
                    </div>
                    <h3 class="fw-bold">User Friendly</h3>
                    <p>Most Provably best dashboard design for your business you can.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-card h-100">
                    <div class="feature-icon">
                        <i class="fa-solid fa-award text-danger"></i>
                        <div class="number">2
                        </div>
                    </div>
                    <h3 class="fw-bold">Award-Winning App</h3>

                    <p>Most Provably best dashboard design for your business you can.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-card h-100 ">
                    <div class="feature-icon ">
                        <i class="fa-solid fa-fingerprint text-danger"></i>
                        <div class="number">3
                        </div>
                    </div>
                    <h3 class="fw-bold">Privacy Protected</h3>
                    <p>Most Provably best dashboard design for your business you can.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-card h-100">
                    <div class="feature-icon">
                        <i class="fa-solid fa-gem text-danger"></i>
                        <div class="number">4
                        </div>
                    </div>
                    <h3 class="fw-bold">
                        Lifetime Update</h3>
                    <p>Most Provably best dashboard design for your business you can.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="space int">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="relative  mb-5">
                    <img src="./assets/images/new-border.png" alt="" class="img-fluid mb-3">
                    <div class="b-section relative" data-aos="fade-right">
                        <img src="./assets/images/frame.png" class="img-fluid img-1" alt="">
                    </div>
                    <div class="b-img-section bg-white shadow-lg relative" data-aos="fade-right">
                        <img src="./assets/images/b-pic-1.png" class="img-fluid w-55" alt="">
                    </div>
                    <div class="b-img-section-2 bg-white relative shadow-lg d-flex justify-content-center align-items-center"
                        data-aos="fade-right">
                        <img src="./assets/images/b-pic-2.png" class="img-fluid w-55" alt="">
                    </div>
                    <div class="b-img-section-3 bg-white relative shadow-lg d-flex justify-content-center align-items-center"
                        data-aos="fade-down-left">
                        <img src="./assets/images/b-pic-3.png" class="img-fluid w-55" alt="">
                    </div>
                    <div class="b-img-section-4 bg-white relative shadow-lg d-flex justify-content-center align-items-center"
                        data-aos="fade-up-left">
                        <img src="./assets/images/b-pic-4.png" class="img-fluid w-55" alt="">
                    </div>
                    <div class="b-img-section-5 bg-white relative shadow-lg d-flex justify-content-center align-items-center"
                        data-aos="fade-down-left">
                        <img src="./assets/images/b-pic-5.png" class="img-fluid w-55" alt="">
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="relative int-content">
                    <h2 class="opac text-primary">Software</h2>
                    <h4 class=" mb-2 yell">Software Integration</h4>

                    <h3 class="mb-3">
                        Easy & Perfect Solution With Latest Software Integrations</h3>

                    <p class="mb-3">Cloud based storage for your data backup just log in with your mail account from
                        play store and
                        using whatever you want for your business purpose orem ipsum dummy text. never missyour chance
                        its just began. backup just log in with your mail account from.

                        Most provabily best for your data backup just log in with your mail account from play store and
                        using whatever you want for your business purpose orem ipsum dummy.</p>
                    <button class="btn bg-blue text-white">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="group space">
    <div class="container">
        <div class="row align-items-center justify-content-ceneter">
            <div class="col-md-12 ">
                <ul class="d-flex justify-content-center m-0 p-0">
                    <li><a href="./blog.php" class="current me-2">1</a></li>
                    <li><a href="./blog-2.php" class="me-2">2</a></li>
                    <li><a href="./blog-3.php" class="me-2">3</a></li>
                    <!-- <li><a href="./blog-2.php"><i class="fa-solid fa-arrow-right"></i></a></li> -->
                </ul>
            </div>
        </div>
    </div>
</section>


<?php include('./footer.php') ?>