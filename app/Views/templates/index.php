<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url(); ?>/Assets/images/box.png" type="image/ico" />
    <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/style.css">

    <title>Gudang BRIBOX</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link href="<?= base_url(); ?>/Assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>/Assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>/Assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url(); ?>/Assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="<?= base_url(); ?>/Assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
        rel="stylesheet">
    <link href="<?= base_url(); ?>/Assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
        rel="stylesheet">
    <link href="<?= base_url(); ?>/Assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
        rel="stylesheet">
    <link href="<?= base_url(); ?>/Assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
        rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url(); ?>/Assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url(); ?>/Assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url(); ?>/Assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>/Assets/build/css/custom.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container ">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar  nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-bank"></i> <span>BRIBOX</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- sidebar menu -->
                    <?= $this->include('templates/sidebar'); ?>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <?= $this->include('templates/topbar'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <?= $this->renderSection('pagecontent'); ?>
            <!-- /page content -->
        </div>
    </div>
    <!-- footer content -->
    <footer>
        <div class="pull-left">
            <a href="#" class="d-flex align-items-center">
                <span>Copyright &copy; <?= date('Y') ?> TelkomSigma. All rights reserved.</span>
            </a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/Assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/Assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url(); ?>/Assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url(); ?>/Assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url(); ?>/Assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url(); ?>/Assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url(); ?>/Assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url(); ?>/Assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script
        src="<?= base_url(); ?>/Assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url(); ?>/Assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url(); ?>/Assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url(); ?>/Assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url(); ?>/Assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>/Assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url(); ?>/Assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url(); ?>/Assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>/Assets/build/js/custom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <!-- <script>
    $(document).ready(function() {
    fetch('/master_data') 
        .then(response => response.json())  
        .then(data => {

            if (Array.isArray(data)) {
                let tbody = document.getElementById("data-body");
                data.forEach(item => {
                    let row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${item.nama_kanwil}</td>
                        <td>${item.id_brg}</td>
                        <td>${item.aset_id}</td>
                        <td>${item.sn}</td>
                        <td>${item.nama_perangkat}</td>
                        <td>${item.merek}</td>
                        <td>${item.umur_perangkat}</td>
                        <td>${item.nama_user}</td>
                        <td>${item.jabatan}</td>
                        <td>${item.pn}</td>
                        <td>${item.keterangan}</td>
                    `;
                    tbody.appendChild(row);
                });

                $('#datatable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true
                });
            } else {
                console.error('Expected an array but got:', data);
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});

    </script>    -->
    
</body>

</html>