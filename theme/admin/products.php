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
  <title>Products</title>

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
                <div class="row">
                  <div class="col-8">
                    <h4>All Products</h4>
                  </div>
                </div>

                <div class="row">
                  <div class="table-responsive">
                    <table class="table invoice-table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Client</th>
                          <th scope="col">Issued Date</th>
                          <th scope="col">Total</th>
                          <th scope="col">Handle</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">3311</th>
                          <td><img src="theme/assets/images/avatars/profile-image-1.png" alt=""> Nina Doe</td>
                          <td>11 APR 2021</td>
                          <td>$3223</td>
                          <td><span class="badge bg-primary">Delivered</span></td>
                          <td>
                            <a href="#"><i data-feather="edit"></i></a>
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2331</th>
                          <td><img src="theme/assets/images/avatars/profile-image-2.png" alt=""> John Doe</td>
                          <td>7 APR 2021</td>
                          <td>$3422</td>
                          <td><span class="badge bg-info">Declined</span></td>
                          <td>
                            <a href="#"><i data-feather="edit"></i></a>
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2344</th>
                          <td><img src="theme/assets/images/avatars/profile-image-3.jpg" alt=""> Jacob Doe</td>
                          <td>7 APR 2021</td>
                          <td>$2415</td>
                          <td><span class="badge bg-primary">Delivered</span></td>
                          <td>
                            <a href="#"><i data-feather="edit"></i></a>
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2345</th>
                          <td><img src="theme/assets/images/avatars/profile-image.png" alt=""> Nina Doe</td>
                          <td>20 MAR 2021</td>
                          <td>$3034</td>
                          <td><span class="badge bg-warning">Processing</span></td>
                          <td>
                            <a href="#"><i data-feather="edit"></i></a>
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2355</th>
                          <td><img src="theme/assets/images/avatars/profile-image-1.png" alt=""> John Doe</td>
                          <td>20 MAR 2021</td>
                          <td>$4337</td>
                          <td><span class="badge bg-success">Delivered</span></td>
                          <td>
                            <a href="#"><i data-feather="edit"></i></a>
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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