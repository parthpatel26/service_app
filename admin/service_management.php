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
                            <h3 class="page-title">User Service List</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Service</li>
                                        <li class="breadcrumb-item active" aria-current="page">Service List</li>
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
                                    <h4 class="box-title">User Service List</h4>
                                    <h6 class="box-subtitle">Export Use Service List to Copy, CSV, Excel, PDF & Print</h6>
                                    <button class="btn-all btn-primary">Show All</button>
                                    <button class="btn-year btn-primary" data-value='2020-21'>2020-21</button>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">

                                        <table id="user_service" class="table table-lg" width='100%'>
                                            <thead>

                                                <tr>
                                                    <th>Service ID</th>
                                                    <th>user ID</th>
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
        <?php include(ROOT . "templates/admin-footer.php") ?>


    </div>
    <!-- ./wrapper -->

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="<?php echo ROOT ?>js/vendors.min.js"></script>
    <script src="<?php echo ROOT ?>js/pages/chat-popup.js"></script>
    <script src="<?php echo ROOT ?>assets/icons/feather-icons/feather.min.js"></script>
    <script src="<?php echo ROOT ?>assets/vendor_components/datatable/datatables.min.js"></script>

    <script src="<?php echo ROOT ?>assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo ROOT ?>assets/vendor_components/datatable/dataTables.cellEdit.js"></script>


    <!-- Florence Admin App -->
    <script src="<?php echo ROOT ?>js/jquery.smartmenus.js"></script>
    <script src="<?php echo ROOT ?>js/menus.js"></script>
    <script src="<?php echo ROOT ?>js/template.js"></script>

</body>


<script>
    var table = null;
    var filter = {};

    var cellOption = {
        onUpdate: myCallbackFunction,
        inputCss: 'my-input-class',
        columns: [0, 1, 2],
        allowNulls: {
            columns: [1],
            errorClass: 'error'
        },
        confirmationButton: {
            confirmCss: 'my-confirm-class',
            cancelCss: 'my-cancel-class',
        },
        inputTypes: [{
                column: 0,
                type: 'text',
                options: 'null'
            },
            {
                column: 1,
                type: 'list',
                options: [{
                        value: '1',
                        display: 'ITR'
                    },
                    {
                        value: '2',
                        display: 'GST'
                    },
                    {
                        value: '3',
                        display: "Tally"
                    }
                ]
            },
        ]
    }

    var tableOption = {
        paging: true,
        processing: true,
        serverSide: true,
        pageLength: 10,
        ajax: '<?= ROOT ?>action/services.php',
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print', {
                text: 'Show All',
                action: function(e, dt, node, config) {
                    console.log(">>>");
                    table.paging = false;
                }
            },
        ],
        columns: [{
                data: '0'
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
        ],


        initComplete: function() {
            var api = this.api();

            $.ajax({
                url: '../action/services.php',
                type: "POST",
                data: {
                    action: 'service_filters'
                },
                success: function(data) {
                    const result = JSON.parse(data);

                    function getServices() {
                        var service = '';
                        var service_filter = result['service'];
                        for (var key in service_filter) {
                            service += '<option value=' + service_filter[key]['name'] + '>' + service_filter[key]['name'] + '</option>'
                        }
                        return service;
                    }
                },
                complete: function(service) {
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
                            if (colIdx == 2) {
                                console.log(service);
                                $(cell).html('<select> ' + getServices() + '</select>');
                            } else {

                            }
                            // On every keypress in this input
                            $(
                                    'input',
                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                )
                                .off('keyup change')
                                .on('change', function(e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr = 'search'; //$(this).parents('th').find('select').val();
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
            });
            // For each column
        }
    };

    function myCallbackFunction(updatedCell, updatedRow, oldValue) {
        console.log("The new value for the cell is: " + updatedCell.data());
        console.log("The values for each cell in that row are: " + updatedRow.data());
    }


    function drawTable(id, option) {
        if (table) {
            table.destroy();
            table.MakeCellsEditable("destroy");
        }
        table = $(id).DataTable(option);
        table.MakeCellsEditable(cellOption)
    }

    function getDataUrl() {
        var url = '<?= ROOT ?>action/services.php?action=getData';
        for (var key in filter) {
            url += '&' + key + '=' + filter[key];
        }
        return url;
    }

    $(document).ready(function() {
        $('#user_service thead tr').clone(true).addClass('filters').insertBefore('#user_service thead tr')
        drawTable('#user_service', tableOption);

        $('.btn').click(function() {
            var year = $(this).data('value');
            filter['year'] = year;
            tableOption.paging = false;
            tableOption.ajax = getDataUrl();
            drawTable('#user_service', tableOption);

        });
    })
</script>

</html>