<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<section class="footer bg-dark space">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-white logo">
                            <img src="./assets/images/logo.png" alt="" class="mb-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus vel dolore,
                                praesentium rerum accusantium nemo?</p>
                            <ul class="icon d-flex">

                                <li><i class="fa-brands fa-facebook text-info fs-2"></i></li>
                                <li><i class="fa-brands fa-instagram text-info fs-2"></i></li>
                                <li><i class="fa-brands fa-square-twitter text-info fs-2"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-white">
                            <h2 class="fs-1 text-info">About</h2>
                            <ul class="p-0">

                                <li>About Us</li>
                                <li>Feature</li>
                                <li>News</li>
                                <li>Menu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-white">
                            <h2 class="fs-1 text-info">Company</h2>
                            <ul class="p-0">

                                <li>Why HAPPENING ADS ?</li>
                                <li>Partner With Us</li>
                                <li>FAQ</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-white">
                            <h2 class="fs-1 text-info">Support</h2>
                            <ul class="p-0">

                                <li>Account</li>
                                <li>Support Center</li>
                                <li>Feedback</li>
                                <li>Contact Us</li>
                                <li>Accesbility</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-white">
                            <h2 class="text-info">Get in Touch</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veritatis harum quam
                                debitis
                                nemo voluptas?</p>
                            <form action="" class="relative">
                                <input type="text" class="px-4 py-2 rounded-pill " placeholder="Email Address">
                                <button class="btn absolute"><i class="fa-solid fa-paper-plane text-info"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">
$('#myowl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})
$('#owl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    }
})
$('#howl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    }
})
$('#cowl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    }
})
$('#aowl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 8
        }
    }
})
$('#eating').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },

        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})

$('#user').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        }
    }
})
$('#project').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})
</script>



<!-- countdown -->
<script>
var a = 0;
$(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }

});
</script>

<script>
AOS.init(

);
</script>


<script>
// header scroll

let nav = document.querySelector('.navbar')
window.onscroll = function() {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("header-scrolled");
        $(".navbar-brand img").css({
            width: "70px"
        })
    } else {
        nav.classList.remove("header-scrolled");
        $(".navbar-brand img").css({
            width: "80px"
        })
    }
    console.log(nav);
}
</script>

</body>

</html>