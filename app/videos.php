
<?php include 'head.php'?>

<?php
$page = 'videos';
include('header.php');
?>

<main>
    <article class="banner banner--page" style="background-image: url('img/banner-bg-1.jpg')">
        <div class="banner-text">
            <div class="page-ttl wow zoomIn" data-wow-delay="0.1s">Video Gallery</div>
        </div>
    </article>
    <section class="inner-page">
        <div class="container">
            <div class="content-flex">
                <div class="main-part">
                    <div class="d-flex justify-content-between flex-wrap">
                        <h2 class="wow fadeInDown" data-wow-duration="1.8s">Video & Audio</h2>
                        <div class="search-block">
                            <input type="text" name="" class="form-control" placeholder="Search Video">
                            <button class="sbm" type="submit"><img src="img/svg/loop.svg" alt=""></button>
                        </div>
                    </div>
                    <div class="about-videos-block">
                        <a href="video-inner.php" class="item wow fadeInUp" data-wow-duration="1.8s">
                            <div class="image" style="background-image: url('img/pic-1.jpg')">
                                <div class="play">
                                    <img src="img/svg/play.svg" alt="">
                                </div>
                            </div>
                            <div class="ttl">State Board of Education Appeal 2-15-11
                            </div>
                            <div class="upload-time">Uploaded a month ago</div>
                        </a>

                    </div>
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