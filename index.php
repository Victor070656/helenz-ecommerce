<?php
// echo "<pre>";
// var_dump($_SERVER);
// var_dump(PHP_URL_QUERY);

include_once("config.php");
include_once("paystack_config.php");
session_start();

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
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
    '/single-checkout' => "pages/checkout2.php",
    '/shop' => "pages/shop.php",
    '/product' => "pages/product.php",
    '/login' => "pages/login.php",
    '/register' => "pages/register.php",
    '/wish' => "pages/wishlist.php",
    '/addtowish' => "pages/addtowish.php",
    '/addtocart' => "pages/addtocart.php",
    '/faq' => "pages/faq.php",
    '/user-profile' => "pages/profile.php",
    '/test' => "pages/test.php",
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
