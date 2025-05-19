<?php
include_once("functions.php");
session_start();

$getProducts = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `id` DESC");
//dd($getProducts);
if (isset($_GET["s"])) {
    $s = $_GET["s"];
}
?>

<!doctype html>
<html lang="en" class="no-js">


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/collection-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Helenz || Booking</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- all css -->
    <style>
        :root {
            --primary-color: #00234D;
            --secondary-color: #F76B6A;

            --btn-primary-border-radius: 0.25rem;
            --btn-primary-color: #fff;
            --btn-primary-background-color: #00234D;
            --btn-primary-border-color: #00234D;
            --btn-primary-hover-color: #fff;
            --btn-primary-background-hover-color: #00234D;
            --btn-primary-border-hover-color: #00234D;
            --btn-primary-font-weight: 500;

            --btn-secondary-border-radius: 0.25rem;
            --btn-secondary-color: #00234D;
            --btn-secondary-background-color: transparent;
            --btn-secondary-border-color: #00234D;
            --btn-secondary-hover-color: #fff;
            --btn-secondary-background-hover-color: #00234D;
            --btn-secondary-border-hover-color: #00234D;
            --btn-secondary-font-weight: 500;

            --heading-color: #000;
            --heading-font-family: 'Poppins', sans-serif;
            --heading-font-weight: 700;

            --title-color: #000;
            --title-font-family: 'Poppins', sans-serif;
            --title-font-weight: 400;

            --body-color: #000;
            --body-background-color: #fff;
            --body-font-family: 'Poppins', sans-serif;
            --body-font-size: 14px;
            --body-font-weight: 400;

            --section-heading-color: #000;
            --section-heading-font-family: 'Poppins', sans-serif;
            --section-heading-font-size: 48px;
            --section-heading-font-weight: 600;

            --section-subheading-color: #000;
            --section-subheading-font-family: 'Poppins', sans-serif;
            --section-subheading-font-size: 16px;
            --section-subheading-font-weight: 400;
        }
    </style>

    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/wizard.css">
</head>

<body>
    <div class="body-wrapper">
        <!-- include header.php -->
        <?php
        include("components/header.php");
        ?>
        <!-- include header.php end -->

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li><a href="./">Home</a></li>
                    <li>
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path
                                    d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                    fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Booking</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="collection mt-100">
                <div class="container">
                    <div class="row">
                        <!-- product area start -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <form method="post" class="registration-container">
                                <h1 class="text-center mb-5">Service Booking</h1>

                                <!-- Progress Bar -->
                                <div class="progress-bar-container">
                                    <div class="step-progress">
                                        <div class="step active" id="step1">
                                            <span>1</span>
                                            <span class="step-label">Personal Info</span>
                                        </div>
                                        <div class="step" id="step2">
                                            <span>2</span>
                                            <span class="step-label">Service</span>
                                        </div>
                                        <div class="step" id="step3">
                                            <span>3</span>
                                            <span class="step-label">Date & Time</span>
                                        </div>
                                        <!-- <div class="step" id="step4">
                                            <span>4</span>
                                            <span class="step-label">Preferences</span>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- Step 1: Personal Information -->
                                <div class="form-step active" id="formStep1">
                                    <h2 class="form-title my-3">Personal Information</h2>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="fname" id="firstName"
                                                required>
                                            <div class="invalid-feedback">Please enter your first name.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lname" id="lastName" required>
                                            <div class="invalid-feedback">Please enter your last name.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required>
                                            <div class="invalid-feedback">Please enter your email address.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" name="phone" class="form-control" id="phone" required>
                                            <div class="invalid-feedback">Please enter your phone number.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button class="btn btn-primary" onclick="nextStep(1)">Next</button>
                                    </div>
                                </div>

                                <!-- Step 2: Contact Information -->
                                <div class="form-step" id="formStep2">
                                    <h2 class="form-title">Service Information</h2>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="service" class="form-label">Service of Choice</label>
                                            <select class="form-select" name="service" id="service" required>
                                                <option value="" selected disabled>Select a service</option>
                                                <?php
                                                $getServices = mysqli_query($conn, "SELECT s.*, c.category_name FROM `services` as s JOIN `service_categories` as c ON s.category_id = c.id ORDER BY `id` DESC");
                                                if (mysqli_num_rows($getServices) > 0):
                                                    while ($product = mysqli_fetch_assoc($getServices)):
                                                        $service = (object) $product;
                                                        ?>
                                                        <option value="<?= $service->id; ?>"><?= $service->category_name; ?> -
                                                            <?= $service->title; ?>
                                                            (₦<?= number_format($service->price, 2); ?>)
                                                        </option>
                                                        <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">Please choose a service.</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="location" class="form-label">Location</label>
                                            <select class="form-select" id="location" name="location" required>
                                                <option value="" selected hidden disabled>Choose a location</option>
                                                <option>Ikenegbu, Owerri, Imo State</option>
                                                <option>Lagos State, Nigeria</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <button class="btn btn-secondary" onclick="prevStep(2)">Previous</button>
                                        <button class="btn btn-primary" onclick="nextStep(2)">Next</button>
                                    </div>
                                </div>

                                <!-- Step 3: Account Setup -->
                                <div class="form-step" id="formStep3">
                                    <h2 class="form-title">Time of Appointment</h2>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="date" id="date" required>
                                            <div class="invalid-feedback">Please enter a valid date.</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="securityQuestion" class="form-label">Time</label>
                                            <select class="form-select" id="securityQuestion" required>
                                                <option value="" selected disabled>Select your preferred time</option>
                                                <option>9:10 AM - 9:55 AM</option>
                                                <option>10:15 AM - 11:00 AM</option>
                                                <option>11:20 AM - 12:05 PM</option>
                                                <option>12:25 PM - 1:10 PM</option>
                                                <option>1:30 PM - 2:15 PM</option>
                                                <option>2:35 PM - 3:20 PM</option>
                                                <option>3:40 PM - 4:25 PM</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a security question.</div>
                                        </div>
                                        <!-- <div class="col-12">
                                            <label for="securityAnswer" class="form-label">Payment Choice</label>
                                            <select class="form-select" id="securityQuestion" required>
                                                <option value="" selected disabled>What's your payment choice</option>
                                                <option>Full Payment</option>
                                                <option>10:15 AM - 11:00 AM</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide an answer.</div>
                                        </div> -->
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <button class="btn btn-secondary" onclick="prevStep(3)">Previous</button>
                                        <button class="btn btn-success" name="submit" type="submit">Book
                                            Appointment</button>
                                    </div>
                                </div>

                                <!-- Step 4: Preferences -->
                                <!-- <div class="form-step" id="formStep4">
                                    <h2 class="form-title">Preferences</h2>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="newsletter" class="form-label">Subscribe to Newsletter?</label>
                                            <select class="form-select" id="newsletter">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="notifications" class="form-label">Receive Notifications?</label>
                                            <select class="form-select" id="notifications">
                                                <option value="email" selected>Email</option>
                                                <option value="sms">SMS</option>
                                                <option value="both">Both</option>
                                                <option value="none">None</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="terms" required>
                                                <label class="form-check-label" for="terms">
                                                    I agree to the <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#termsModal">Terms and Conditions</a>
                                                </label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="privacyPolicy"
                                                    required>
                                                <label class="form-check-label" for="privacyPolicy">
                                                    I agree to the <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#privacyModal">Privacy Policy</a>
                                                </label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <button class="btn btn-secondary" onclick="prevStep(4)">Previous</button>
                                        <button class="btn btn-success" onclick="submitForm()">Submit
                                            Registration</button>
                                    </div>
                                </div> -->
                                <?php
                                if (isset($_POST["submit"])) {
                                    $fname = $_POST["fname"];
                                    $lname = $_POST["lname"];
                                    $email = $_POST["email"];
                                    $phone = $_POST["phone"];
                                    $service = $_POST["service"];
                                    $location = $_POST["location"];
                                    $date = $_POST["date"];
                                    $time = $_POST["time"];

                                    // Insert into database
                                    var_dump($_POST);
                                }
                                ?>
                            </form>


                        </div>
                        <!-- product area end -->


                    </div>
                </div>
            </div>
        </main>

        <!-- include footer -->
        <?php
        include("components/footer.php");
        ?>
        <!-- include footer end -->

        <!-- all js -->

        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/wizard.js"></script>
    </div>
</body>


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/collection-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:45 GMT -->

</html>