<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li> -->
            </ul>
        </div>
        <div class="logo">
            <a class="" href="/dashboard">
                <h3 class="text-dark">Helen<span class="text-danger">z</span></h3>
            </a>
        </div>
        <div class="" id="headerNav">
            <ul class="navbar-nav">
                <?php if (parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-products" || parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-orders" || parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-users") : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                            <form method="get">
                                <input class="form-control" name="s" type="search" placeholder="Type something.." aria-label="Search">
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="theme/assets/images/avatars/profile-image-1.png" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="/admin-profile"><i data-feather="settings"></i>Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i data-feather="log-out"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/dashboard" ? 'active-page' : '' ?>">
            <a href="/dashboard"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-products" ? 'active-page' : '' ?>">
            <a href="/show-products"><i data-feather="layers"></i>Products</a>
        </li>
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/add-product" ? 'active-page' : '' ?>">
            <a href="/add-product"><i data-feather="plus"></i>Add Product</a>
        </li>
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-orders" ? 'active-page' : '' ?>">
            <a href="/show-orders"><i data-feather="shopping-cart"></i>Orders</a>
        </li>
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/show-users" ? 'active-page' : '' ?>">
            <a href="/show-users"><i data-feather="user"></i>Users</a>
        </li>
        <li class="<?= parse_url($_SERVER["REQUEST_URI"])["path"] == "/admin-profile" ? 'active-page' : '' ?>">
            <a href="/admin-profile"><i data-feather="settings"></i>Profile</a>
        </li>
        <li class="">
            <a href="/logout"><i data-feather="log-out"></i>Logout</a>
        </li>

    </ul>
</div>