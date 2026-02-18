<?php
session_start();
include('connection/connect.php');
include('fns.php');

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}

$query = "
    SELECT bookings.*, suites.name AS suite_name
    FROM bookings
    INNER JOIN suites ON bookings.suite_id = suites.id
    ORDER BY bookings.id DESC
";

// $result = mysqli_query($db, $query);

$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>Bookings</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../dist/images/BBR_logo-removebg-preview-removebg-preview.png" width="120px"
                                alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form action="" method="get" role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" name="search" placeholder="Search..." class="form-control mt-0">
                                <a href="proc-search" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin
                                    <?php echo $_SESSION['admin_user']; ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title p-2">Bookings ( <span class="text-danger"><?= $num; ?></span> )</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>


                            <!-- <a href="export" class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Export All
                                </a>

                                <input name="btn_download" type="submit" class="btn btn-info" value="Download Selected">


                                <input name="btn_mail" type="submit" class="btn btn-success" value="Mail Selected"> -->


                            <br>


                        </div>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <?php if (!empty($error)): ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif; ?>

                            <?php if (!empty($success) || !empty($_GET['success'])): ?>
                                <div class="alert alert-success">
                                    <?php echo $success ?? $_GET['success']; ?>
                                </div>
                            <?php endif; ?>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Fullnames</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>No. of Rooms Booked</th>
                                            <th>Room Type</th>
                                            <th>Suite Name</th>
                                            <th>Total Price</th>
                                            <th>Booking Status</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $sn = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sn++; ?></td>
                                                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                                <td><?php echo htmlspecialchars($row['check_in']); ?></td>
                                                <td><?php echo htmlspecialchars($row['check_out']); ?></td>
                                                <td><?php echo intval($row['rooms_booked']); ?></td>
                                                <td><?php echo htmlspecialchars($row['room_type']); ?></td>
                                                <td><?php echo htmlspecialchars($row['suite_name']); ?></td>
                                                <td>€<?php echo number_format($row['total_price'], 2); ?></td>
                                                <td><?php echo htmlspecialchars($row['booking_status']); ?></td>
                                                <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                                <td>
                                                    <a href="javascript:;" class="btn btn-info btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#viewBookingModal<?php echo $row['id']; ?>">
                                                        View
                                                    </a>

                                                    <a href="deleteBooking.php?id=<?php echo $row['id']; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this booking?');"
                                                        class="btn btn-danger btn-sm">
                                                        Delete
                                                    </a>

                                                    <a href="javascript:;" class="btn btn-success btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#updateBookingModal<?php echo $row['id']; ?>">
                                                        Update
                                                    </a>

                                                </td>
                                            </tr>

                                            <!-- Modal for Viewing Booking -->
                                            <div class="modal fade" id="viewBookingModal<?php echo $row['id']; ?>"
                                                tabindex="-1" aria-labelledby="viewBookingLabel<?php echo $row['id']; ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-upsteamRed">
                                                            <h3 class="modal-title"
                                                                id="viewBookingLabel<?php echo $row['id']; ?>">
                                                                Booking Details:
                                                                <?php echo htmlspecialchars($row['full_name']); ?>
                                                            </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><b>Fullnames:</b>
                                                                <?php echo htmlspecialchars($row['full_name']); ?></p>
                                                            <p><b>Email:</b> <?php echo htmlspecialchars($row['email']); ?>
                                                            </p>
                                                            <p><b>Phone:</b> <?php echo htmlspecialchars($row['phone']); ?>
                                                            </p>
                                                            <p><b>Check In:</b>
                                                                <?php echo htmlspecialchars($row['check_in']); ?></p>
                                                            <p><b>Check Out:</b>
                                                                <?php echo htmlspecialchars($row['check_out']); ?></p>
                                                            <p><b>Rooms Booked:</b>
                                                                <?php echo intval($row['rooms_booked']); ?></p>
                                                            <p><b>Room Type:</b>
                                                                <?php echo htmlspecialchars($row['room_type']); ?></p>
                                                            <p><b>Total Price:</b>
                                                                €<?php echo number_format($row['total_price'], 2); ?></p>
                                                            <p><b>Booking Status:</b>
                                                                <?php echo htmlspecialchars($row['booking_status']); ?></p>
                                                            <p class="text-muted"><b>Date Created:</b>
                                                                <?php echo htmlspecialchars($row['created_at']); ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal for Updating Booking -->
                                            <div class="modal fade" id="updateBookingModal<?php echo $row['id']; ?>"
                                                tabindex="-1" aria-labelledby="updateBookingLabel<?php echo $row['id']; ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-upsteamRed">
                                                            <h3 class="modal-title"
                                                                id="updateBookingLabel<?php echo $row['id']; ?>">
                                                                Update Booking:
                                                                <?php echo htmlspecialchars($row['full_name']); ?>
                                                            </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>

                                                        <form action="update_booking.php?id=<?php echo $row['id']; ?>"
                                                            method="POST">
                                                            <div class="modal-body">

                                                                <!-- Fullnames -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Fullnames</label>
                                                                    <input type="text" name="fullnames" class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['full_name']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Email -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Email</label>
                                                                    <input type="email" name="email" class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['email']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Phone -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Phone</label>
                                                                    <input type="text" name="phone" class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['phone']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Check In -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Check In</label>
                                                                    <input type="text" name="check_in" class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['check_in']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Check Out -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Check Out</label>
                                                                    <input type="text" name="check_out" class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['check_out']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Rooms Booked -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Rooms
                                                                        Booked</label>
                                                                    <input type="number" name="rooms_booked"
                                                                        class="form-control" min="1"
                                                                        value="<?php echo intval($row['rooms_booked']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Total Price -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Total Price
                                                                        (€)</label>
                                                                    <input type="number" name="total_price"
                                                                        class="form-control" min="0" step="any"
                                                                        value="<?php echo htmlspecialchars($row['total_price']); ?>"
                                                                        readonly>
                                                                </div>

                                                                <!-- Booking Status -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Booking
                                                                        Status</label>
                                                                    <select name="booking_status" class="form-control"
                                                                        required>
                                                                        <option value="Pending" <?php if ($row['booking_status'] == 'Pending')
                                                                            echo 'selected'; ?>>Pending</option>
                                                                        <option value="Confirmed" <?php if ($row['booking_status'] == 'Confirmed')
                                                                            echo 'selected'; ?>>Confirmed</option>
                                                                        <option value="Cancelled" <?php if ($row['booking_status'] == 'Cancelled')
                                                                            echo 'selected'; ?>>Cancelled</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Update
                                                                    Booking</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('footer.php'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- Datatables -->
    <script src="dist/datatables/js/dataTables.min.js"></script>
    <script src="dist/datatables/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="dist/datatables/css/dataTables.bootstrap5.min.css">
    <!-- Datatables -->

    <script>
        $(document).ready(function () {
            $('.table').DataTable();

        });
    </script>
    <!-- smart table -->

    <script>
        $(function () {

            $("#checkAll").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>