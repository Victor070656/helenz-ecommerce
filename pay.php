<?php
include_once("functions.php");
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>location.href='login.php'</script>";
} else {
    $userid = $_SESSION["user"]["userid"];
    $email = $_SESSION["user"]["email"];
}
if (isset($_GET["msg"])) {
    $data = $_SESSION["pay"];

    $order_id = rand(1000000000, 9999999999);
    $order_items = $data["items"];
    $order_amount = $data["amount"];
    $order_firstname = $data["first-name"];
    $order_lastname = $data["last-name"];
    $order_email = $data["email"];
    $order_phone = $data["phone"];
    $order_country = $data["country"];
    $order_city = $data["city"];
    $order_zip = $data["zip"];
    $order_address1 = $data["addr1"];
    $order_address2 = $data["addr2"];

    //    insert order
    $addOrder = mysqli_query($conn, "INSERT INTO `orders`(`orderid`, `userid`, `items`, `amount`, `firstname`, `lastname`, `email`, `phone`, `country`, `city`, `zipcode`, `address1`, `address2`) 
VALUES ('$order_id', '$userid', '$order_items', '$order_amount', '$order_firstname', '$order_lastname', '$order_email', '$order_phone', '$order_country', '$order_city', '$order_zip', '$order_address1', '$order_address2')");
    if ($addOrder) {
        $deleteCartItems = mysqli_query($conn, "DELETE FROM `cart` WHERE `userid` = '$userid'");
        echo "<script>location.href='/'; alert('Order completed ✅')</script>";
    }
}
//dd($_POST);
if ($_POST) {
    $info = $_POST;
    $_SESSION["pay"] = $_POST;
} else {
    if (!isset($_GET["msg"])) {
        echo "<script>location.href='cart.php'</script>";
    }
}

$getRate = mysqli_query($conn, "SELECT * FROM `rate`");
$rate = mysqli_fetch_assoc($getRate);

$amount = ((float) $info["amount"]) * $rate["rate"];

//dd($_SESSION["pay"]);
?>
<!doctype html>
<html lang="en" class="no-js">



<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <title>Helenz || Pay</title>
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
                    <li><a href="/">Home</a></li>
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
                    <li>Checkout</li>
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
                    <li>Pay</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="container checkout-page mt-100">
                <div class="card py-5 px-4" style="border-radius: 15px">
                    <div class="card-body text-center">
                        <h1 class=" mb-3">✔️</h1>
                        <h1 class="display-3 fw-bold ">Proceed To Pay</h1>
                        <h2 class="">Your order costs: $<?= $info["amount"]; ?></h2>
                        <p class="mb-3">Orders take between 14 & 28 days to arrive. </p>
                        <form method="post" action="action.php">
                            <input name="amount" type="hidden" value="<?= $amount; ?>">
                            <button type="submit" name="pay_now" class="btn btn-primary">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- paystack integration -->
            <?php
            if (isset($_POST['pay_now'])) {
                dd($_SESSION["pay"]);

                $url = "https://api.paystack.co/transaction/initialize";

                $fields = [
                    'email' => $email,
                    'amount' => $_POST["amount"] * 100, // Convert amount to kobo
                    'callback_url' => "http://localhost:18000pay.php.php?msg=success",
                    'metadata' => ["cancel_action" => "http://localhost:18000/cart.php"]
                ];

                $fields_string = http_build_query($fields);

                //open connection
                $ch = curl_init();

                //set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Authorization: Bearer $paystackSecretKey",
                    "Cache-Control: no-cache",
                ));

                //So that curl_exec returns the contents of the cURL; rather than echoing it
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                //execute post
                $result = curl_exec($ch);
                $response = json_decode($result, true);

                // Error handling
                if (curl_errno($ch)) {
                    echo 'Error:' . curl_error($ch);
                } elseif ($response['status'] !== true) {
                    echo 'Transaction Initialization Failed: ' . $response['message'];
                } else {
                    // Redirect to Paystack payment page
                    $authorization_url = $response['data']['authorization_url'];
                    //                         header('Location: ' . $authorization_url);
                    echo "<script>location.href='$authorization_url'</script>";
                }

                //close connection
                curl_close($ch);
            }
            ?>
            <!-- paystack integration end -->
        </main>

        <!-- include footer -->
        <?php
        include("components/footer.php");
        ?>
        <!-- include footer end -->


        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
    </div>
</body>


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:57 GMT -->

</html>