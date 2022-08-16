
<?php include 'head.php'?>

<?php
$page = 'about-school';
include('header.php');
?>

<main>
    <article class="banner banner--page" style="background-image: url('img/banner-bg-1.jpg')">
        <div class="banner-text">
            <div class="page-ttl wow zoomIn" data-wow-delay="0.1s">Financial Aid</div>
        </div>
    </article>
    <section class="inner-page">
        <div class="container">
            <div class="content-flex">
                <div class="main-part">
                    <div class="more-text">
                        <h3 class="wow fadeInUp" data-wow-duration="1.8s">Types of Aid</h3>
                        <img src="img/DSC04582-2048x1152.jpg" alt=""  class="wow fadeInUp" data-wow-duration="1.8s">
                        <p class="wow fadeInUp" data-wow-duration="1.8s">
                            Currently, Doral College is not eligible to receive Title IV funding. However, the College is approved for certain types of aid as listed below. Help and guidance is available at the College at no cost. It is recommended that you exercise caution around any organization or person that offers to help you or provide services for a fee.
                        </p>
                        <p class="wow fadeInUp" data-wow-duration="1.8s"><b>There are three major types of aid for students at Doral College:</b></p>
                    </div>
                    <div id="accordion" class="accordion-block wow fadeInUp" data-wow-duration="1.8s">
                        <div class="accordion--item">
                            <div class="accordion--item-header" id="headingOne">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Grants
                                </button>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="accordion--item-body">
                                    <p>A grant is a form of financial aid that doesn’t have to be repaid (unless, for example, you withdraw from school and owe a refund). To learn more about grants, click here.

                                    </p> <p> <b>  Grants that are currently offered at Doral College Include:</b></p>

                                    <p>Florida Student Assistance Grant Program</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion--item">
                            <div class="accordion--item-header" id="headingTwo">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Scholarships
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="accordion--item-body">
                                    <p>Many nonprofit and private organizations offer scholarships to help students pay for college or career school. This type of free money, which is sometimes based on academic merit, talent, or a particular area of study, can make a real difference in helping you manage your education expenses. To learn more about scholarships, click here. </p>
                                    <p><b>Scholarships that are currently offered at Doral College Include: </b></p>
                                    <p><a href="https://www.floridastudentfinancialaidsg.org/SAPBFMAIN/SAPBFMAIN" tabindex="">Florida Bright Futures Scholarship Program</a>
                                    </p>
                                    <p><a href="">
                                            Jose Marti Scholarship Challenge Grant Program</a></p>
                                    <p><a href="">Minority Teacher Education Scholars Program</a></p>
                                    <p><a href="">Scholarships for Children/Spouses of Deceased or Disabled Veterans</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion--item">
                            <div class="accordion--item-header" id="headingThree">
                                <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Work-Study
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="accordion--item-body">
                                  <p>The Federal Work-Study Program allows you to earn money to pay for school by working part-time.  </p>

                                    <p>Work-Study Programs that are currently offered at Doral College Include: </p>

                                    <p><a href="">Florida Work Experience Program</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-menu">
                    <button class="btn btn--primary-outline account-mobile-toggle" id="account-mobile-toggle">
                        Menu <i class="fa fa-chevron-down ml-1"></i>
                    </button>
                    <ul>
                        <li class="active">
                            <a href="financial-aid.php">Types of Aid</a>
                        </li>
                        <li>
                            <a href="apply-financial-aid.php">Applying for Aid</a>
                        </li>
                        <li>
                            <a href="#">Receiving Aid</a>
                        </li>
                        <li>
                            <a href="#">Maintaining Your Aid</a>
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