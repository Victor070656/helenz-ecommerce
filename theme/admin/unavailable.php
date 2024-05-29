<?php
if (!isset($_SESSION["admin"])) {
    echo "<script>location.href='/admin-login'</script>";
}

if (isset($_GET["pid"])) {
    $productid = $_GET["pid"];
} else {
    echo "<script>location.href='/show-products'</script>";
}


$unavailable = mysqli_query($conn, "UPDATE `products` SET `status`='unavailable' WHERE `productid`='$productid' ");
if ($unavailable) {
    echo "<script>location.href='/show-products'</script>";
}
