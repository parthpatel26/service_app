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
                                    <h6 class="box-subtitle">Export User Service List to Copy, CSV, Excel, PDF & Print</h6>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">

                                        <table id="user_service" class="table table-lg" width='100%'>
                                            <thead>

                                                <tr>
                                                    <th>Service_ID</th>
                                                    <th>User_ID</th>
                                                    <th>Service</th>
                                                    <th>Year</th>
                                                    <th>Price</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th>Assigned To</th>
                                                    <th>Created At</th>
                                                    <th>Modified At</th>

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
        columns: [2, 5, 6, 7],
        allowNulls: {
            columns: [1],
            errorClass: 'error'
        },
        confirmationButton: {
            confirmCss: 'my-confirm-class',
            cancelCss: 'my-cancel-class',
        },
        inputTypes: []
    }

    var tableOption = {
        paging: true,
        processing: true,
        serverSide: true,
        ajax: '<?= ROOT ?>action/services.php',
        dom: 'lBfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        lengthMenu: [10, 25, 50, 100, -1],
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
            {
                data: "8"
            },
            {
                data: "9"
            },
        ],
        columnDefs: [{
            className: "payment",
            targets: [5]
        }],

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
                    if (colIdx == 2) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> ' + service + '</select>');
                    } else if (colIdx == 3) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> ' + year + '</select>');
                    } else if (colIdx == 7) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> ' + client + '</select>');
                    } else if (colIdx == 5) {
                        var regexr = '{search}';
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> ' + payment + '</select>');
                    } else if (colIdx == 6) {
                        $(cell).html('<select class="btn dropdown-toggle btn-default text-start"> ' + status + '</select>');
                    } else if (colIdx == 8) {
                        $(cell).html('<input class="form-control" type="date" placeholder=' + title + '>');
                    } else if (colIdx == 9) {
                        $(cell).html('<input class="form-control" type="date" placeholder=' + title + '>');
                    } else {
                        $(cell).html('<input class="form-control" type="search" placeholder=' + title + '>');
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
        // For each column
    }

    function myCallbackFunction(updatedCell, updatedRow, oldValue, newValue) {
        var row = updatedRow.data()[0];
        console.log('old value >>>', oldValue);
        console.log('new value >>>', newValue);
        console.log('Service ID >>>', row);
        var column = updatedCell[0][0]['column'];

        var update_options = {
            url: '../action/services.php',
            type: "POST",
            data: {
                action: 'update',
                service_id: row,
                value: newValue
            },
            success: function(data) {
                console.log(data)

            },
        }
        if (column == 2) {
            update_options['data']['column'] = '_service_id'
        }
        if (column == 5) {
            update_options['data']['column'] = 'payment'
        }
        if (column == 6) {
            update_options['data']['column'] = 'status'
        }
        if (column == 7) {
            update_options['data']['column'] = '_assigned_to'
        }
        $.ajax(update_options)

    }


    function drawTable(id, option) {
        if (table) {
            table.destroy();
            table.MakeCellsEditable("destroy");
        }
        table = $(id).DataTable(option);
        table.MakeCellsEditable(cellOption);

    }

    function getDataUrl() {
        var url = '<?= ROOT ?>action/services.php?action=getData';
        for (var key in filter) {
            url += '&' + key + '=' + filter[key];
        }
        return url;
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1).replace(/_/g, " ");
    }

    function updateCellOptions(column, type, filter) {
        const search = what => cellOption.inputTypes.findIndex(element => element.column == what);
        const found = search(column);
        if (found == -1) {
            cellOption.inputTypes.push({
                'column': column,
                'type': type,
                options: []
            })
            const lastIndex = cellOption.inputTypes.length;
            if (column == 5 || column == 6) {
                cellOption.inputTypes[lastIndex - 1].options.push({
                    'value': filter,
                    'display': capitalizeFirstLetter(filter)
                })
            } else {
                cellOption.inputTypes[lastIndex - 1].options.push({
                    'value': filter['id'],
                    'display': capitalizeFirstLetter(filter['name'])
                })
            }

        } else {
            if (column == 5 || column == 6) {
                cellOption.inputTypes[found].options.push({
                    'value': filter,
                    'display': capitalizeFirstLetter(filter)
                })
            } else {
                cellOption.inputTypes[found].options.push({
                    'value': filter['id'],
                    'display': capitalizeFirstLetter(filter['name'])
                })
            }
        }
    }

    function statusLed(cls) {
        $('.' + cls).each(function() {
            var cellText = $(this).find('p').html();
            if (cellText == 'Paid') {
                $(this).find('.led').addClass('led-green')
            }
            if (cellText == 'Unpaid') {
                $(this).find('.led').addClass('led-red')
            }
            if (cellText == 'In Progress') {
                $(this).find('.led').addClass('led-yellow')
            }
        })
    }


    var service = '<option value=""> Select Service </option>';
    var year = '<option value=""> Select Year </option>';
    var client = '<option value=""> Select Client </option>';
    var status = '<option value=""> Select Status </option>';
    var payment = '<option value=""> Select Payment </option>';


    $(document).ready(function() {
        $.ajax({
            url: '../action/services.php',
            type: "POST",
            data: {
                action: 'service_filters'
            },
            success: function(data) {
                const result = JSON.parse(data);
                console.log(result);

                var service_filter = result['service'];
                for (var key in service_filter) {
                    updateCellOptions(2, 'list', service_filter[key])
                    service += '<option  data-id=' + service_filter[key]['id'] + ' value=' + service_filter[key]['name'] + '>' + service_filter[key]['name'] + '</option>'
                }

                var year_filter = result['year'];
                for (var key in year_filter) {
                    year += '<option  data-id=' + year_filter[key]['id'] + ' value=' + year_filter[key]['name'] + '>' + year_filter[key]['name'] + '</option>'
                }

                var client_filter = result['assigned_to'];
                for (var key in client_filter) {
                    updateCellOptions(7, 'list', client_filter[key])

                    client += '<option  data-id=' + client_filter[key]['id'] + ' value=' + client_filter[key]['name'] + '>' + client_filter[key]['name'] + '</option>'
                }
                var status_filter = result['status'];
                for (var key in status_filter) {
                    updateCellOptions(6, 'list', status_filter[key])

                    status += '<option value=' + status_filter[key] + '>' + capitalizeFirstLetter(status_filter[key]) + '</option>'
                }
                var payment_filter = result['payment'];
                for (var key in payment_filter) {
                    updateCellOptions(5, 'list', payment_filter[key])

                    payment += '<option value=' + payment_filter[key] + '>' + capitalizeFirstLetter(payment_filter[key]) + '</option>'
                }
                drawTable('#user_service', tableOption);;


            },
        })
        $('#user_service thead tr').clone(true).addClass('filters').insertBefore('#user_service thead tr')

    })
</script>

</html>