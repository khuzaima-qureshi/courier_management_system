<?php
session_start();

include("./parcel/config.php");
include("./include/navbar.php");
?>
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('assets/img/banner/breadcrumb.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title mb-0">
                            <h2 class="page-title">CONTACT US</h2>
                            <ul class="page-list">
                                <li><a href="index.php">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->  

    <!-- contact area start -->
    <div class="container">
        <div class="contact-area mg-top-120 mb-120">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-7">
                    <form class="contact-form text-center" method="POST">
                        <h3>GET A QUOTE</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-inner">
                                    <label><i class="fa fa-user"></i></label>
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-inner">
                                    <label><i class="fa fa-envelope"></i></label>
                                    <input type="text" placeholder="Your email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-inner">
                                    <label><i class="fas fa-calculator"></i></label>
                                    <input type="text" name="number" placeholder=" Phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-select-inner">
                                    <label><i class="far fa-file-alt"></i></label>
                                    <select name="subject" class="single-select">
                                        <option>Subject</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner">
                                    <label><i class="fas fa-pencil-alt"></i></label>
                                    <textarea name="message" placeholder="Write massage"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="btn btn-base" type="submit" value="SEND MESSAGE"  name="snd_message_btn">  
                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="contact-information-wrap">
                        <h3>CONTACT INFORMATION</h3>
                        <div class="single-contact-info-wrap">
                            <h6>Contact Number:</h6>
                            <div class="media">
                                <div class="icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="media-body">
                                    <p>+92 312 3456789</p>
                                    <p>+92 312 9876543</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <h6>Mail Address:</h6>
                            <div class="media">
                                <div class="icon" style="background: #080C24;">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>info@transpro.com</p>
                                    <p>info@transpro2.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap mb-0">
                            <h6>Office Location:</h6>
                            <div class="media">
                                <div class="icon" style="background: #565969;">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="media-body">
                                    <p>PROGRESSIVE TOWER</p>
                                    <p>Aptech SFC Karachi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <div class="contact-g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0633889513815!2d67.07296692216995!3d24.861684515464024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea3db108f41%3A0x42acc4507358b160!2sAptech%20Learning%2C%20Shahrah%20e%20Faisal%20Center!5e0!3m2!1sen!2s!4v1706301172165!5m2!1sen!2s"></iframe>
    </div>
    <?php
  include('include/footer.php');
if(isset($_POST["snd_message_btn"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $query = "INSERT INTO `contact`( `con_name`, `con_email`, `con_phone`, `con_sub`, `con_message`) VALUES ('$name','$email','$number','$subject','$message')";
    mysqli_query($con,$query);
}

  ?>