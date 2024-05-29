<?php
if (!isset($_SESSION["admin"])) {
    echo "<script>location.href='/admin-login'</script>";
}

if (isset($_GET["pid"])) {
    $productid = $_GET["pid"];
} else {
    echo "<script>location.href='/show-products'</script>";
}


$available = mysqli_query($conn, "UPDATE `products` SET `status`='available' WHERE `productid`='$productid' ");
if ($available) {
    echo "<script>location.href='/show-products'</script>";
}
