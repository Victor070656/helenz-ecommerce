<?php
// echo "<pre>";
// var_dump($_SERVER);
// var_dump(PHP_URL_QUERY);

include_once("config.php");
include_once("paystack_config.php");

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
session_start();

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function sendMail($email, $subject, $body, $success = "Message has been sent")
{





//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.comunityguidline.com.ng';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'info@comunityguidline.com.ng';                     //SMTP username
        $mail->Password = '@Admin2024';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@comunityguidline.com.ng', 'Helenz Footwear');
        $mail->addAddress($email);               //Name is optional


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
//        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "<script>alert('$success')</script>";
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }

}

$uri_raw = $_SERVER["REQUEST_URI"];

$parsed_uri = parse_url($uri_raw);
$uri = $parsed_uri["path"];
// var_dump($_SESSION);

/**
 * An array() containing the various routes and their endpoints
 */
$routes = [
    '/' => "pages/index.php",
    '/about' => "pages/about-us.php",
    '/contact' => "pages/contact.php",
    '/cart' => "pages/cart.php",
    '/remove-from-cart' => "pages/remove-from-cart.php",
    '/checkout' => "pages/checkout.php",
    '/pay' => "pages/pay.php",
    '/shop' => "pages/shop.php",
    '/product' => "pages/product.php",
    '/login' => "pages/login.php",
    '/forgot-password' => "pages/forgot.php",
    '/code' => "pages/code.php",
    '/reset' => "pages/reset.php",
    '/register' => "pages/register.php",
    '/wish' => "pages/wishlist.php",
    '/addtowish' => "pages/addtowish.php",
    '/addtocart' => "pages/addtocart.php",
    '/faq' => "pages/faq.php",
    '/user-profile' => "pages/profile.php",
    '/action' => "pages/action.php",
    '/user-orders' => "pages/orders.php",
    '/view-order' => "pages/view-order.php",



    '/admin-login' => "theme/admin/login.php",
    '/dashboard' => "theme/admin/index.php",
    '/add-product' => "theme/admin/addproduct.php",
    '/edit-product' => "theme/admin/editproduct.php",
    '/show-products' => "theme/admin/products.php",
    '/delete-product' => "theme/admin/deleteproduct.php",
    '/show-orders' => "theme/admin/orders.php",
    '/order-detail' => "theme/admin/view-order.php",
    '/show-users' => "theme/admin/users.php",
    '/admin-profile' => "theme/admin/adminprofile.php",
    '/available' => "theme/admin/available.php",
    '/unavailable' => "theme/admin/unavailable.php",
    '/logout' => "theme/admin/logout.php",
];


if (array_key_exists($uri, $routes)) {
    include($routes[$uri]);
} else {
    http_response_code(404);
    include("pages/404.php");
}




// $data = array("name" => "John Doe", "age" => 30, "city" => "New York");
// $a = json_encode($data);
// $b = json_decode($a, true);
// var_dump($a);
// var_dump($b);
