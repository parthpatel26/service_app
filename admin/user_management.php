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
                                    <h4 class="box-title">Invoice List</h4>
                                    <h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">

                                        <table id="example" class="table table-lg invoice-archive">
                                            <thead>
                                                <tr>
                                                    <th>User Id</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Pancard</th>
                                                    <th>Adharcard</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-12">
                            <div class="box box-inverse box-success">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Invoice</h5>
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
                                        <div class="fs-60">2,064</div>
                                        <span>Total Invoice</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-inverse box-primary">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Re Generate Invoice</h5>
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
                                        <div class="fs-60">1,738</div>
                                        <span>Re Generate Invoice</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-inverse box-danger">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Overdue Payment Invoice</h5>
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
                                        <div class="fs-60">1100</div>
                                        <span>Overdue Payment Invoice</span>
                                    </div>
                                </div>

                            </div>
                            <div class="box box-inverse box-warning">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>Pending Invoice</h5>
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
                                        <div class="fs-60">964</div>
                                        <span>Pending</span>
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

    <!-- Florence Admin App -->
    <script src="../js/jquery.smartmenus.js"></script>
    <script src="../js/menus.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/pages/data-table.js"></script>

</body>


<script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= ROOT ?>action/load_users.php',
            type: "POST",
            success: function(data) {
                console.log(data);

                const result = JSON.parse(data);
                console.log(result);
                $.each(result, function(key, user) {
                    var row = "";
                    row += "<tr>";
                    row += "<td>" + user.id + "</td>";
                    row += "<td>" + user.email + "</td>";
                    row += "<td>" + user.password + "</td>";
                    row += "<td>" + user.pan + "</td>";
                    row += "<td>" + user.adhar + "</td>";
                    row += "<td>" + user.status + "</td>";
                    row += "<td>" + user.created + "</td>";
                    row += "</tr>";
                    $('tbody').append(row);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

</html>