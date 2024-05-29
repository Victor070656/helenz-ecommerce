<?php
if (!isset($_SESSION["admin"])) {
  echo "<script>location.href='/admin-login'</script>";
}

if (isset($_GET["pid"])) {
  $productid = $_GET["pid"];
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from polygons.space/circl/theme/templates/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 10:50:44 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Delete Product</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
  <link href="theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="theme/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="theme/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


  <!-- Theme Styles -->
  <link href="theme/assets/css/main.min.css" rel="stylesheet">
  <link href="theme/assets/css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
  <div class="loader">
    <div class="spinner-grow text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="page-container">
    <?php include("theme/components/menu.php"); ?>
    <div class="page-content">
      <div class="main-wrapper">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="text-center py-5 px-3">
                  <h1>❗</h1>
                  <h3>Are you sure you want to Delete?</h3>
                  <p>This action cannot be undone.</p>
                  <form method="post">
                    <a href="/show-products" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="delete" class="btn btn-primary">Proceed &gt;&gt;</button>
                  </form>
                  <!-- delete -->
                  <?php
                  if (isset($_POST["delete"])) {
                    $delete = mysqli_query($conn, "DELETE FROM `products` WHERE `productid`='$productid'");
                    if ($delete) {
                      echo "<script>alert('Deleted!');location.href='/show-products'</script>";
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

  <!-- Javascripts -->
  <script src="theme/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="theme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="theme/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
  <script src="theme/assets/js/main.min.js"></script>
</body>

<!-- Mirrored from polygons.space/circl/theme/templates/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 10:50:44 GMT -->

</html>