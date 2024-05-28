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
  <title>Add Products</title>

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
                <h5 class="card-title">Add Product</h5>
                <form method="post">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <label class="form-label">Product Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Beaded Wall clock ...">
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label">Tags</label>
                      <input type="text" name="tags" class="form-control" placeholder="Associated terms (Seperated by comma ' , ')">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="form-label">Price ($)</label>
                      <input type="number" class="form-control" name="price" placeholder="$500">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Discount (%)</label>
                      <input type="number" step="any" name="discount" value="0" class="form-control" placeholder="5%">
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label">Description</label>
                      <textarea name="description" id="" class=" form-control "></textarea>
                    </div>
                    <div class="col-12 mb-3">
                      <label class="form-label">Product image</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-12 mb-3">
                      <input type="submit" name="add" value="Add Product" class="btn btn-primary">
                    </div>
                  </div>
                </form>
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