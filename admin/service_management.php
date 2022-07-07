<?php include '../templates/header.php' ?>

<body class="layout-top-nav light-skin theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <?php include '../templates/admin-header.php' ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h3 class="page-title">Invoice List</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Invoice</li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-10 col-lg-9 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">User List</h4>
                                    <h6 class="box-subtitle">Export User List to Copy, CSV, Excel, PDF & Print</h6>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">

                                        <table id="user_service" class="table table-lg" width='100%'>
                                            <thead>
                                                <tr>
                                                    <th>Service ID</th>
                                                    <th>Service</th>
                                                    <th>Year</th>
                                                    <th>Price</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th>Assigned To</th>
                                                    <!-- <th class="text-center">Actions</th> -->
                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-12">
                            <div class="box box-inverse box-success pull-up">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Users</h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60" name="stats" id="total_users"></div>
                                        <span>Total Users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-inverse box-primary pull-up">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Customers</h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60" name="stats" id="total_customer"></div>
                                        <span>Total Customers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-inverse box-danger pull-up">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Clients</h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60" name="stats" id="total_client"></div>
                                        <span>Total Clients</span>
                                    </div>
                                </div>

                            </div>
                            <div class="box box-inverse box-warning pull-up">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Admins</h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60" name="stats" id="total_admin"></div>
                                        <span>Total Admins</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <?php include '../templates/admin-footer.php' ?>


    </div>
    <!-- ./wrapper -->

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="../js/vendors.min.js"></script>
    <script src="../js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>
    <script src="../assets/vendor_components/sweetalert/sweetalert.min.js"></script>



    <!-- Florence Admin App -->
    <script src="../js/jquery.smartmenus.js"></script>
    <script src="../js/menus.js"></script>
    <script src="../js/template.js"></script>

</body>


<script>
    $(document).ready(function() {
        $('#user_service').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?= ROOT ?>action/services.php',
        });
    })
</script>

</html>