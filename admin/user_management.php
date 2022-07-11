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

                                        <table id="example" class="table table-lg" width='100%'>
                                            <thead>
                                                <tr>
                                                    <th>User Id</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Role</th>
                                                    <th>Pancard</th>
                                                    <th>Adharcard</th>
                                                    <th>Status</th>
                                                    <th>Added On</th>
                                                    <th class="text-center">Actions</th>
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
        $.ajax({
            url: '../action/load_users.php',
            type: "POST",
            data: {
                action: 'count_user'
            },
            success: function(data) {
                const result = JSON.parse(data);
                console.log(result);

                $('#total_admin').html(result.admin);
                $('#total_client').html(result.client);
                $('#total_customer').html(result.customer);
                $('#total_users').html(result.total);
            },

        });



        $('#example').DataTable({
            pageLength: 20,
            pagelengthChange: true,
            paging: true,
            ajax: {
                type: "POST",
                url: "../action/load_users.php",
                data: {
                    action: 'load_users'
                },
                dataSrc: 'users',

            },

            columns: [{
                    data: "id"
                },
                {
                    data: "email"
                },
                {
                    data: "password"
                },
                {
                    data: "role"
                },
                {
                    data: "pan"
                },
                {
                    data: "adhar"
                },
                {
                    data: "status"
                },
                {
                    data: "created"
                },
                {
                    targets: 0,
                    data: 'id',
                    render: function(data, type, row, meta) {
                        return '<div class="list-icons d-inline-flex ">' +
                            '<a href="#" data-id=' + data + ' class="list-icons-item me-10"><i class="fa fa-eye-slash"></i></a>' +
                            '<div class="list-icons-item dropdown">' +
                            '<a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-text"></i></a>' +
                            '<div class="dropdown-menu dropdown-menu-end">' +
                            '<a href="#" data-id=' + data + ' id="" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>' +
                            '<a href="#" data-id=' + data + ' id="remove_user" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>'

                    }
                }
            ],
        });
        $(document).on("click", "#remove_user", function() {
            var id = $(this).data("id");
            swal({
                title: "Are you sure?",
                text: "You want to delete this user?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: "You can also block the user",
                        text: "Only user will not be able to access profile but the records will be safe",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "DELETE!",
                        cancelButtonText: "Block",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    }, function(isConfirm) {
                        if (isConfirm) {
                            $.ajax({
                                url: '../action/load_users.php',
                                type: "POST",
                                data: {
                                    action: 'delete_user',
                                    id: id
                                },
                                success: function(data) {
                                    const result = JSON.parse(data);
                                    $("a[data-id=" + id + "]").closest("tr").hide();
                                },
                            });
                            swal("Deleted!", "User has been deleted.", "success");

                        } else {
                            $.ajax({
                                url: '../action/load_users.php',
                                type: "POST",
                                data: {
                                    action: 'delete_user',
                                    id: id
                                },
                                success: function(data) {
                                    const result = JSON.parse(data);
                                    console.log(result);
                                },
                            });
                            swal("Blocked!", "User has been blocked.", "success");
                        }
                    });
                }
            });
        })
    });
</script>

</html>