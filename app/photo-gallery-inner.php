
<?php include 'head.php'?>

<?php
$page = 'photos';
include('header.php');
?>

<main>
    <article class="banner banner--page" style="background-image: url('img/banner-bg-1.jpg')">
        <div class="banner-text">
            <div class="page-ttl wow zoomIn" data-wow-delay="0.1s">Photo Gallery</div>
        </div>
    </article>
    <section class="inner-page">
        <div class="container">
            <div class="content-flex">
                <div class="main-part">
                    <div id="Mylightgallery" class="photo-gallery-inner Mylightgallery">
                        <div data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                        <div  data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                        <div data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                        <div  data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                        <div  data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                        <div  data-src="img/pic-1.jpg" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <img src="img/pic-1.jpg" />
                        </div>
                    </div>
                    <div class="text-center wow flipInX" data-wow-delay="1s">
                        <a href="photos.php" class="btn btn--primary-outline">Back</a>
                    </div>
                </div>
                <div class="left-menu">
                    <button class="btn btn--primary-outline account-mobile-toggle" id="account-mobile-toggle">
                        Menu <i class="fa fa-chevron-down ml-1"></i>
                    </button>
                    <ul>
                        <li class="active">
                            <a href="#">2021-2022</a>
                        </li>
                        <li>
                            <a href="#">2021-2022</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="slogal--separation-section">
            <div class="slogan wow fadeInUp" data-wow-duration="1.5s">
                <div>d<span>o<img src="img/hand.png" alt=""></span>ral college</div>
            </div>
        </section>
    </section>

    <section class="separation-section-picture contact-us-block" style="background-image: url('img/block-bg-4.jpg')">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-duration="1.8s">Contact Us
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1.8s">
                QUESTIONS? Feel free to give us a call at <a href="tel:305–463-7210"><b>305–463-7210</b></a> or email us at financialaid@doral.edu
            </p>
            <div class="wow fadeInUp mt-4" data-wow-duration="1.8s">
                <a href="" class="btn btn--white" >contact us</a>
            </div>

        </div>
    </section>
</main>

<?php include 'footer.php' ?>