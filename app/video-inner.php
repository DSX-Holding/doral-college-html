
<?php include 'head.php'?>

<?php
$page = 'about-school';
include('header.php');
?>

<main>
    <article class="banner banner--page" style="background-image: url('img/banner-bg-1.jpg')">
        <div class="banner-text">
            <div class="page-ttl wow zoomIn" data-wow-delay="0.1s">Video</div>
        </div>
    </article>
    <section class="inner-page">
        <div class="container">
            <div class="content-flex">
                <div class="main-part">
                    <div class="video-inner-page-block">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="ttl wow fadeInDown" data-wow-duration="1.8s">
                                    Title goes here
                                </div>
                                <div class="mb-5">
                                    <div class="d-flex wow fadeInUp" data-wow-duration="1.8s">
                                        <div class="upload-time">Added 11 months ago</div>

                                    </div>

                                </div>
                                <div class="video-holder  wow zoomIn"  data-wow-duration="1.8s" >
                                    <video  muted webkit-playsinline playsinline controls
                                           poster="img/video-holder.jpg">
                                        <source src="video/home_video.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <p class="wow fadeInUp" data-wow-duration="1.8s">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, pariatur!
                                </p>
                            </div>
                        </div>

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