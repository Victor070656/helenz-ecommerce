<?php
if (!isset($_SESSION["user"])) {
    echo "<script>location.href='/login'</script>";
} else {
    $userid = $_SESSION["user"]["userid"];
}
?>
<!doctype html>
<html lang="en" class="no-js">


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Bisum - eCommerce Bootstrap 5 Template</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
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
                        <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z" fill="#000" />
                            </g>
                        </svg>
                    </li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <main id="MainContent" class="content-for-layout">
            <div class="cart-page mt-100">
                <div class="container">
                    <div class="cart-page-wrapper">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col-12">
                                <table class="cart-table w-100">
                                    <thead>
                                        <tr>
                                            <th class="cart-caption heading_18">Product</th>
                                            <th class="cart-caption heading_18"></th>
                                            <th class="cart-caption text-center heading_18 d-none d-md-table-cell">Quantity</th>
                                            <th class="cart-caption text-end heading_18">Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="cart-item">
                                            <td class="cart-item-media">
                                                <div class="mini-img-wrapper">
                                                    <img class="mini-img" src="assets/img/products/furniture/1.jpg" alt="img">
                                                </div>
                                            </td>
                                            <td class="cart-item-details">
                                                <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                                <p class="product-vendor">XS / Dove Gray</p>
                                            </td>
                                            <td class="cart-item-quantity">
                                                <div class="quantity d-flex align-items-center justify-content-between">
                                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg" alt="minus"></button>
                                                    <input class="qty-input" type="number" name="qty" value="1" min="0">
                                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg" alt="plus"></button>
                                                </div>
                                                <a href="#" class="product-remove mt-2">Remove</a>
                                            </td>
                                            <td class="cart-item-price text-end">
                                                <div class="product-price">$580.00</div>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="cart-item-media">
                                                <div class="mini-img-wrapper">
                                                    <img class="mini-img" src="assets/img/products/furniture/2.jpg" alt="img">
                                                </div>
                                            </td>
                                            <td class="cart-item-details">
                                                <h2 class="product-title"><a href="#">Vita Lounge Chair</a></h2>
                                                <p class="product-vendor">XS / Pink</p>
                                            </td>
                                            <td class="cart-item-quantity">
                                                <div class="quantity d-flex align-items-center justify-content-between">
                                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg" alt="minus"></button>
                                                    <input class="qty-input" type="number" name="qty" value="1" min="0">
                                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg" alt="plus"></button>
                                                </div>
                                                <a href="#" class="product-remove mt-2">Remove</a>
                                            </td>
                                            <td class="cart-item-price text-end">
                                                <div class="product-price">$580.00</div>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="cart-item-media">
                                                <div class="mini-img-wrapper">
                                                    <img class="mini-img" src="assets/img/products/furniture/3.jpg" alt="img">
                                                </div>
                                            </td>
                                            <td class="cart-item-details">
                                                <h2 class="product-title"><a href="#">Sarno Dining Chair</a></h2>
                                                <p class="product-vendor">XS / Dove Gray</p>
                                            </td>
                                            <td class="cart-item-quantity">
                                                <div class="quantity d-flex align-items-center justify-content-between">
                                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg" alt="minus"></button>
                                                    <input class="qty-input" type="number" name="qty" value="1" min="0">
                                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg" alt="plus"></button>
                                                </div>
                                                <a href="#" class="product-remove mt-2">Remove</a>
                                            </td>
                                            <td class="cart-item-price text-end">
                                                <div class="product-price">$580.00</div>
                                            </td>
                                        </tr>
                                        <tr class="cart-item">
                                            <td class="cart-item-media">
                                                <div class="mini-img-wrapper">
                                                    <img class="mini-img" src="assets/img/products/furniture/4.jpg" alt="img">
                                                </div>
                                            </td>
                                            <td class="cart-item-details">
                                                <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                                <p class="product-vendor">XS / Dove Gray</p>
                                            </td>
                                            <td class="cart-item-quantity">
                                                <div class="quantity d-flex align-items-center justify-content-between">
                                                    <button class="qty-btn dec-qty"><img src="assets/img/icon/minus.svg" alt="minus"></button>
                                                    <input class="qty-input" type="number" name="qty" value="1" min="0">
                                                    <button class="qty-btn inc-qty"><img src="assets/img/icon/plus.svg" alt="plus"></button>
                                                </div>
                                                <a href="#" class="product-remove mt-2">Remove</a>
                                            </td>
                                            <td class="cart-item-price text-end">
                                                <div class="product-price">$580.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-5 col-md-12 col-12">
                                <div class="cart-total-area">
                                    <h3 class="cart-total-title d-none d-lg-block mb-0">Cart Totals</h4>
                                        <div class="cart-total-box mt-4">
                                            <div class="subtotal-item subtotal-box">
                                                <h4 class="subtotal-title">Subtotals:</h4>
                                                <p class="subtotal-value">$465.00</p>
                                            </div>
                                            <div class="subtotal-item shipping-box">
                                                <h4 class="subtotal-title">Shipping:</h4>
                                                <p class="subtotal-value">$10.00</p>
                                            </div>
                                            <div class="subtotal-item discount-box">
                                                <h4 class="subtotal-title">Discount:</h4>
                                                <p class="subtotal-value">$100.00</p>
                                            </div>
                                            <hr />
                                            <div class="subtotal-item discount-box">
                                                <h4 class="subtotal-title">Total:</h4>
                                                <p class="subtotal-value">$1000.00</p>
                                            </div>
                                            <p class="shipping_text">Shipping & taxes calculated at checkout</p>
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="checkout.html" class="position-relative btn-primary text-uppercase">
                                                    Procced to checkout
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
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
    </div>
</body>


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:56 GMT -->

</html>