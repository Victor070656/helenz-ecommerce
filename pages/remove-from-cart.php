<?php
global $conn;
if (!isset($_SESSION["user"])) {
    echo "<script>location.href='/login'</script>";
} else {
    $userid = $_SESSION["user"]["userid"];
}

if (isset($_GET["uid"]) && isset($_GET["pid"])){
    $uid = $_GET["uid"];
    $pid = $_GET["pid"];
}else{
    echo "<script>location.href='/cart'</script>";
}

$remove = mysqli_query($conn, "DELETE FROM `cart` WHERE `userid` = '$uid' AND `productid` = '$pid'");
if ($remove){
    echo "<script>location.href='/cart'; alert('Item removed from cart 🛒')</script>";
}

?>