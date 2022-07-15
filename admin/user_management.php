<?php include '../includes/header.php' ?>

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
                                        <li class="breadcrumb-item" aria-current="page">Users</li>
                                        <li class="breadcrumb-item active" aria-current="page">Users List</li>
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
                                                    <th>First Name</th>
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
    var table = null;
    var filter = {};

    function drawTable(id, option) {
        if (table) {
            table.destroy();
        }
        table = $(id).DataTable(option);
    }

    function getDataUrl() {
        var url = '<?= ROOT ?>action/load_users.php?action=getData';
        for (var key in filter) {
            url += '&' + key + '=' + filter[key];
        }
        return url;
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    var tableOption = {
        paging: true,
        processing: true,
        serverSide: true,
        pageLength: 10,
        pagelengthChange: true,
        paging: true,
        ajax: getDataUrl(),

        columns: [{
                data: "0"
            },
            {
                data: "1"
            },
            {
                data: "2"
            },
            {
                data: "3"
            },
            {
                data: "4"
            },
            {
                data: "5"
            },
            {
                data: "6"
            },
            {
                data: "7"
            },
            {
                data: "8"
            },
            {
                targets: 0,
                data: '0',
                render: function(data, type, row, meta) {
                    return '<div class="list-icons d-inline-flex ">' +
                        '<a href="#" data-id=' + data + ' class="list-icons-item me-10"><i class="fa fa-eye"></i></a>' +
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
        initComplete: function() {
            var api = this.api();

            api
                .columns()
                .eq(0)
                .each(function(colIdx) {
                    // Set the header cell to contain the input elemen
                    var cursorPosition = null;
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    if (colIdx == 9) {
                        $(cell).html('');
                    } else if (colIdx == 7) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> <option value="">--Status--</option><option value="active">Active</option><option value="inactive">Inactive</option></select>');
                    } else if (colIdx == 3) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> <option value="">--Role--</option><option value="1">Admin</option><option value="2">Client</option><option value="3">Customer</option></select>');
                    } else if (colIdx == 8) {
                        $(cell).html('<input class="form-control" type="date" placeholder=' + title + '>');
                    } else {
                        $(cell).html('<input class="form-control" type="text" placeholder=' + title + '>');

                    }
                    // On every keypress in this input
                    $(
                            'input , select',
                            $('.filters th').eq($(api.column(colIdx).header()).index())
                        )
                        .off('keyup change')
                        .on('change', function(e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            //$(this).parents('th').find('select').val();
                            cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != '' ?
                                    this.value :
                                    '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function(e) {
                            e.stopPropagation();
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });

        }
    }

    function pageLoad() {
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
                drawTable('#example', tableOption);

            },

        });

    }

    $(document).ready(function() {

        pageLoad();

        $('#example thead tr').clone(true).addClass('filters').insertBefore('#example thead tr')

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
                                    if (data == '0') {
                                        swal("Deleted!", "User has been deleted.", "success");
                                        $("a[data-id=" + id + "]").closest("tr").hide();
                                        pageLoad();

                                    }
                                },
                            });


                        } else {
                            $.ajax({
                                url: '../action/load_users.php',
                                type: "POST",
                                data: {
                                    action: 'delete_user',
                                    id: id
                                },
                                success: function(data) {
                                    if (data == '0') {
                                        swal("Blocked!", "User has been blocked.", "success");
                                        pageLoad();
                                    }
                                },
                            });
                        }
                    });
                }
            });
        })
    });
</script>

</html>