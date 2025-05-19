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
    <title>Helenz || Shop</title>
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
                    <li>Products</li>
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
                            <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                                <div class="collection-title-wrap d-flex align-items-end">
                                    <h2 class="collection-title heading_24 mb-0">All products</h2>
                                    <p class="collection-counter text_16 mb-0 ms-2">(<?= $getProducts->num_rows; ?>
                                        items)
                                    </p>
                                </div>

                            </div>
                            <div class="collection-product-container">
                                <div class="row">
                                    <?php
                                    if (isset($_GET["s"])) {
                                        $getPopularProducts = mysqli_query($conn, "SELECT * FROM `products` WHERE (`name` LIKE '%$s%') OR (`tags` LIKE '%$s%') OR (`description` LIKE '%$s%') ORDER BY `id` DESC");
                                    } else {
                                        $getPopularProducts = mysqli_query($conn, "SELECT * FROM `products` ORDER BY `id` DESC");
                                    }

                                    if (mysqli_num_rows($getPopularProducts) > 0):
                                        while ($products = mysqli_fetch_assoc($getPopularProducts)):
                                            $discount;
                                            if ($products["discount"] > 0) {
                                                $discount = $products["price"] - ($products["price"] * ($products["discount"] / 100));
                                            }


                                            ?>
                                                    <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-duration="700">
                                                        <div class="product-card shadow-sm">
                                                            <div class="product-card-img">
                                                                <a class="hover-switch"
                                                                    href="product.php?pid=<?= $products["productid"]; ?>">
                                                                    <img class="primary-img" src="uploads/<?= $products["image"]; ?>"
                                                                        style="height: 320px; width: 100%; object-fit: contain; background-color: #fff; "
                                                                        alt="product-img" />
                                                                </a>

                                                                <div class="product-badge">
                                                                    <!-- <span class="badge-label badge-new rounded">Featured</span>
                                                      <span class="badge-label badge-percentage rounded">-44%</span> -->
                                                                </div>

                                                                <div
                                                                    class="product-card-action product-card-action-2 justify-content-center">


                                                                    <a href="addtowish.php?pid=<?= $products["productid"]; ?>"
                                                                        class="action-card action-wishlist">
                                                                        <svg class="icon icon-wishlist" width="26" height="22"
                                                                            viewBox="0 0 26 22" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M6.96429 0.000183105C3.12305 0.000183105 0 3.10686 0 6.84843C0 8.15388 0.602121 9.28455 1.16071 10.1014C1.71931 10.9181 2.29241 11.4425 2.29241 11.4425L12.3326 21.3439L13 22.0002L13.6674 21.3439L23.7076 11.4425C23.7076 11.4425 26 9.45576 26 6.84843C26 3.10686 22.877 0.000183105 19.0357 0.000183105C15.8474 0.000183105 13.7944 1.88702 13 2.68241C12.2056 1.88702 10.1526 0.000183105 6.96429 0.000183105ZM6.96429 1.82638C9.73912 1.82638 12.3036 4.48008 12.3036 4.48008L13 5.25051L13.6964 4.48008C13.6964 4.48008 16.2609 1.82638 19.0357 1.82638C21.8613 1.82638 24.1429 4.10557 24.1429 6.84843C24.1429 8.25732 22.4018 10.1584 22.4018 10.1584L13 19.4036L3.59821 10.1584C3.59821 10.1584 3.14844 9.73397 2.69866 9.07411C2.24888 8.41426 1.85714 7.55466 1.85714 6.84843C1.85714 4.10557 4.13867 1.82638 6.96429 1.82638Z"
                                                                                fill="#00234D" />
                                                                        </svg>
                                                                    </a>

                                                                    <a href="addtocart.php?pid=<?= $products["productid"]; ?>"
                                                                        class="action-card action-addtocart">
                                                                        <svg class="icon icon-cart" width="24" height="26"
                                                                            viewBox="0 0 24 26" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                                                                fill="#00234D" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-card-details px-2 pb-2">

                                                                <h3 class="product-card-title text-truncate">
                                                                    <a class=""
                                                                        href="product.php?pid=<?= $products["productid"]; ?>"><?= $products["name"]; ?></a>
                                                                </h3>
                                                                <?php if ($products["discount"] > 0): ?>
                                                                        <div class="product-card-price">
                                                                            <span class="card-price-regular">$<?= $discount; ?></span>
                                                                            <span
                                                                                class="card-price-compare text-decoration-line-through">$<?= $products["price"]; ?></span>
                                                                        </div>
                                                                <?php else: ?>
                                                                        <div class="product-card-price">
                                                                            <span class="card-price-regular">$<?= $products["price"]; ?></span>
                                                                        </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </div>
                            </div>

                        </div>
                        <!-- product area end -->

                        <!-- sidebar start -->
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="collection-filter filter-drawer">
                                <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                    <h5 class="heading_24">Sorting By</h5>
                                    <button type="button"
                                        class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                                </div>

                                <div class="filter-widget d-lg-none">
                                    <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                        data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                        <span>
                                            <span class="sorting-title me-2">Sort by:</span>
                                            <span class="active-sorting">Featured</span>
                                        </span>
                                        <span class="faq-heading-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </div>
                                    <div id="filter-mobile-sort" class="accordion-collapse collapse show">
                                        <ul class="sorting-lists-mobile list-unstyled m-0">
                                            <li><a href="#" class="text_14">Featured</a></li>
                                            <li><a href="#" class="text_14">Best Selling</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, A-Z</a></li>
                                            <li><a href="#" class="text_14">Alphabetically, Z-A</a></li>
                                            <li><a href="#" class="text_14">Price, low to high</a></li>
                                            <li><a href="#" class="text_14">Price, high to low</a></li>
                                            <li><a href="#" class="text_14">Date, old to new</a></li>
                                            <li><a href="#" class="text_14">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sidebar end -->
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


<!-- Mirrored from spreethemesprevious.github.io/bisum/html/collection-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 May 2024 11:37:45 GMT -->

</html>