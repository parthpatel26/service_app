<script src="js/jquery.js"></script>
<header class="main-header">
    <div class="inside-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- logo-->
                <div class="logo-lg">
                    <span class="light-logo"><img src="../images/logo-dark-text.png" width='60%' alt="logo"></span>
                    <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="javascript:void(0)" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-comments"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="javascript:void(0)" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-email"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="javascript:void(0)" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-check-box"></i>
                        </a>
                    </li>
                    <li class="btn-group nav-item d-none d-xl-inline-block">
                        <a href="javascript:void(0)" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                            <i class="ti-calendar"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-bs-toggle="dropdown" title="Notifications">
                            <i class="ti-bell"></i>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-bs-toggle="dropdown" title="User">
                            <i class="ti-user"></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light rounded">
                            <i class="ti-settings"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

<nav class="main-nav" role="navigation">
    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
        <li><a href="index.php"><i class="ti-dashboard"></i>Dashboard</a>
        <li><a href="invoicelist.php"><i class=" ti-clipboard"></i>Invoice List</a></li>
        <li><a href="extra_app_ticket.php"><i class="ti-write"></i>Support Ticket</a></li>
        <li><a href="mailbox.php"><i class="ti-email"></i>Mailbox</a></li>
    </ul>
</nav>
<script>

</script>