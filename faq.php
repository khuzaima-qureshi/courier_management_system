<?php
session_start();

include("./include/navbar.php");
?>
    
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('assets/img/banner/breadcrumb.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title mb-0">
                            <h2 class="page-title">FAQ</h2>
                            <ul class="page-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Faq</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->  

    <!--faq-area start-->
    <div class="faq-area pd-top-120 pd-bottom-120">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-xl-6 col-lg-5 order-lg-2">
                    <div class="thumb text-center mb-4 mb-lg-0">
                        <img src="assets/img/faq/00.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 order-lg-1">
                    <div class="section-title">
                        <h4 class="subtitle">FAQ</h4>
                        <h2 class="title">FREQUENTLY ASKED ANY
                            QUESTION</h2>
                        <p class="content">Progressively utilize integrated bandwidth via vertical relationships. Objectively impact emerging human capital via tactical methods of empowerment.</p>
                    </div>
                    <div class="accordion faq-accordion" id="accordionExample">
                        <div class="accordion-item single-accordion-inner">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>1.</span> Is it Full Transport & Logistics Company?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Professionally disseminate highly efficient human capital through optimal technology. Distinctively enhance tactical data and innovative content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item single-accordion-inner">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>2.</span> How to Create my Project in Company?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Professionally disseminate highly efficient human capital through optimal technology. Distinctively enhance tactical data and innovative content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item single-accordion-inner mb-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>3.</span> How to Work in Process of Transport Company?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Professionally disseminate highly efficient human capital through optimal technology. Distinctively enhance tactical data and innovative content.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq-area end-->

    <!--contact-area start-->
    <div class="call-to-contact-area pd-top-140  mt-0">
        <img src="assets/img/contact/1.png" alt="img" style="margin-left: 250px;">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="cta-inner-wrap">
                        <div class="section-title style-white mb-0">
                            <h4 class="subtitle style-2">LET’S TALK</h4>
                            <h2 class="title">YOU NEED ANY HELP?
                                GET FREE CONSULTATION</h2>
                        </div>
                        <div class="single-cta-wrap">
                            <div class="icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="details">
                                <h6>Have Any Question</h6>
                                <h3>+92 312 3456789</h3>
                            </div>
                        </div>
                        <a class="btn btn-base" href="contact.php">CONTACT US</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!--contact-area end-->

    <!--partner-area start-->
    <div class="partner-area pd-top-115 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h4 class="subtitle">HAPPY CLIENTS</h4>
                        <h2 class="title">TRUSTED BY OUR
                            365,000 CLIENTS</h2>
                    </div>
                </div>
            </div>
            <div class="partner-slider owl-carousel">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/1.png" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/2.png" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/3.png" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/4.png" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/5.png" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/partner/6.png" alt="img">
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!--partner-area end-->

 <?php
 include('include/footer.php');
 ?>