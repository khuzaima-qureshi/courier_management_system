<?php


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
                        <h2 class="page-title">Tracking</h2>
                        <ul class="page-list">
                            <li><a href="index.php">Home</a></li>
                            <li>Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<div class="request-quote-area">
    <div class="container">
        <div class="request-quote-inner">
            <ul class="nav nav-pills justify-content-around">
                <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><img src="assets/img/request-quote/1.png" alt="img">REQUEST A QUOTE</button>
                    </li>-->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="assets/img/request-quote/2.png" alt=""> TRACK & TRACE</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">

                        <form method="GET" action="">
                            <div class="container">
                                <div class="col-lg-12" style="border-top:3px solid #FA4319;">
                                    <div class="card card-outline card-primary">
                                        <h1 style=" color:#FA4319;
    border-bottom: 2px solid #FA4319;
    text-align:center;"> TRACKING</h1>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="cl-md-12">
                                                    <label for="" style>Enter Tracking Number</label><br>
                                                    <div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center" required>
                                                        <div class="input-group col-sm-4">
                                                            <form method="GET" action="">
                                                                <input type="search" id="ref_no" class="form-control form-control-sm" placeholder="Type the tracking number here" name="reference_number" required style="height: 55px;">
                                                                <div class="input-group-append">
                                                                    <button style="margin-left:10px;padding-bottom:10px" type="submit" id="track-btn" name="trackbtn" class="btn btn-base">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>



                                                    <?php
                                                    // Check if a reference number is provided in the URL
                                                    if (isset($_GET['trackbtn'])) {
                                                        $reference_number = $_GET['reference_number'];

                                                        $query = "SELECT * FROM `parcels` WHERE reference_number LIKE ?";
                                                        $stmt = mysqli_prepare($con, $query);

                                                        // Bind the parameter
                                                        mysqli_stmt_bind_param($stmt, "s", $reference_number);

                                                        // Execute the statement
                                                        mysqli_stmt_execute($stmt);

                                                        // Get the result
                                                        $result = mysqli_stmt_get_result($stmt);


                                                        if (mysqli_num_rows($result) > 0) {
                                                            $courierDetails = mysqli_fetch_assoc($result);

                                                    ?>

                                                            <div class="container">
                                                                <div class="row d-flex justify-content-between">
                                                                    <div class="col-md-4" style="margin-left :190px;margin-top:50px">

                                                                        <div class="row ">
                                                                            <label style="text-align:center;color:DodgerBlue;font-size:25px ;"> <b>STATUS: </b></label>
                                                                        </div>




                                                                        <h5 style="background-color:grey;height:60px;color:white;padding-top:20px;text-align:center;border-radius:15px;"><?php
                                                                                                                                                                                            echo $courierDetails["status"]; ?> </h5>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="quote-wrap" style="background: var(--main-color);">
                                                                            <h4>How Can
                                                                                We Help You!</h4>
                                                                            <p>Completely transform sticky ideas without leveraged quality vectors. Continually negotiate compelling partnerships before granular customer service. Objectively.</p>
                                                                            <a class="btn btn-white" href="contact.php">CONTACT US</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    <?php
                                                        } else {
                                                            echo
                                                            "<div class='container'>Courier not found with the provided reference number.</div>";
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("./include/footer.php");
?>