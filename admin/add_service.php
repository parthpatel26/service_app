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
                            <h3 class="page-title">Add User</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">User Management</li>
                                        <li class="breadcrumb-item active" aria-current="page">Add User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Financial Year</h4>
                                    <hr class="my-15">
                                    <div class="row" id="year">

                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Services</h4>
                                    <hr class="my-15">
                                    <div class="row" id="services">

                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <!-- /.content-wrapper -->
                            <?php include '../templates/admin-footer.php' ?>
                        </div>
                        <!-- /.box-footer-->
                    </div>
            </div>
        </div>
        </section>
        <!-- /.content -->
    </div>
    </div>

    </div>
    <!-- ./wrapper -->

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="../js/vendors.min.js"></script>
    <script src="../js/pages/chat-popup.js"></script>
    <script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <!-- Florence Admin App -->
    <script src="../js/jquery.smartmenus.js"></script>
    <script src="../js/menus.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/pages/toastr.js"></script>
    <script src="../js/pages/notification.js"></script>



</body>

<script>
    var data = {}

    function notification(heading, msg, icon) {
        $.toast({
            heading: heading,
            text: msg,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: icon,
            hideAfter: 2000,
            stack: 5
        });
    }

    $(document).ready(function() {
        data.action = 'load_services'

        $.ajax({
            url: '../action/services.php',
            type: "POST",
            data: data,
            success: function(data) {
                console.log(data);
                var result = JSON.parse(data)
                if (result.service) {
                    var service = result.service
                    var div = '';
                    for (var key in service) {
                        var status = ''
                        if (service[key]['status'] == 'active') {
                            status = 'checked'
                        }
                        div += ' <div class="col-xl-4 col-12">' +
                            '<div class="box bs-3 border-primary pull-right" data-value="service" data-id= "' + service[key]['id'] + '"><div class="box-header"><h4 class="box-title">' + service[key]['name'] + '</h4><a class="pull-right" style="margin-right: 55px;font-size: 20px;"><i class="fa fa-pencil"></i></a><div class="box-controls pull-right"><label class="switch switch-border switch-primary"><input type="checkbox" class="toggle-status"' + status + '><span class="switch-indicator"></span><span class="switch-description"></span></label></div></div></div></div></div>'

                    }
                    $('#services').html(div)

                }
                if (result.year) {
                    var year = result.year
                    var div = '';
                    for (var key in year) {
                        var status = ''
                        if (year[key]['status'] == 'active') {
                            status = 'checked'
                        }
                        div += '<div class="col-xl-4 col-12">' +
                            '<div class="box bs-3 border-primary pull-right" data-value="year" data-id= "' + year[key]['id'] + '"><div class="box-header"><h4 class="box-title">' + year[key]['name'] + '</h4><a class="pull-right" style="margin-right: 55px;font-size: 20px;"><i class="fa fa-pencil"></i></a><div class="box-controls pull-right"><label class="switch switch-border switch-primary"><input type="checkbox" class="toggle-status"' + status + '><span class="switch-indicator"></span></label></div></div></div></div></div>'
                    }
                    $('#year').html(div)
                }
            }
        })

        $('body').on('click', '.btn-close', function() {
            $(this).closest('.alert-dismissible').css('display', 'none')
        })
        $('body').on('click', '.toggle-status', function() {
            var value = $(this).is(":checked")
            var name = $(this).closest('.box').attr('data-value')
            var id = $(this).closest('.box').data('id')
            data.action = 'update_service'
            data.table = name
            data.id = id
            data.value = value

            $.ajax({
                url: '../action/services.php',
                type: "POST",
                data: data,
                context: this,
                success: function(data) {
                    if (data == 1) {
                        notification('Success', "Status has been changed successfully", 'success')
                    }
                },

            })


        })

    });
</script>

</html>