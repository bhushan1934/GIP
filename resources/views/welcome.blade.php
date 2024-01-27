<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">

    <style>
        .container-fluid {
            width: 1500 !important;
            max-width: none !important;
        }

        .dashboard-card {
            padding-right: -50px;
            margin-top: 30px;
            width: 80%;
            height: 130px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
        }

        .dashboard-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .stat-title {
            font-size: 20px;
            color: #048795;
            margin-bottom: 0.5rem;
            /* Adjust spacing */
        }

        .stat-number {
            font-size: 18px;
            font-weight: bold;
            color: #048795;
            margin-bottom: 0.5rem;
            /* Adjust spacing */
        }

        .progress {
            height: 8px;
            width: 100%;
            /* Adjust width as necessary */
            background-color: #e1e1e1;
            border-radius: 10px;
            margin-bottom: 0.5rem;
            /* Adjust spacing */
        }

        .progress-bar {
            background-color: #ff6b6b;
            height: 100%;
            border-radius: 10px;
        }

        .card-logo {
            max-width: 100px;
            /* Adjust as necessary */
            height: 70px;
            align-self: flex-end;
            /* Align image at the bottom of the card */
        }

        /* Custom progress bar colors */
        .progress-bar-red {
            background-color: #ff6b6b;
        }

        .progress-bar-orange {
            background-color: #ffa502;
        }

        .progress-bar-blue {
            background-color: #1e90ff;
        }

        .progress-bar-yellow {
            background-color: #ffdd59;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between" style="background-color: #048795; height: 130px">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="../assets/images/logos/logo2.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./doctors.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-heart"></i>
                                </span>
                                <span class="hide-menu">Doctors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./patient.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Manage Patients</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Under-Construction-7.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-calendar"></i>
                                </span>
                                <span class="hide-menu">Appointments</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Under-Construction-2.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-world"></i>
                                </span>
                                <span class="hide-menu">Medicines</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Under-Construction-3.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-clipboard"></i>
                                </span>
                                <span class="hide-menu">Lab Test</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Under-Construction-4.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-credit-card"></i>
                                </span>
                                <span class="hide-menu">Payments</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link1" href="./authentication-login.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header" style="background-color: #048795; height: 80px; z-index: -10">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white; width: 300px" />
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                    <i class="ti ti-bell-ringing" style="color: white"></i>
                                    <div class="notification rounded-circle" style="background-color: red"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="">
                    <div class="card-body col-md-12 col-lg-12 mb-12">
                        <!--  Row 1 -->
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-6">
                                <div class="dashboard-card">
                                    <div class="dashboard-text col-md-4 col-lg-4 mb-4">
                                        <span class="stat-title">New Patients</span>
                                        <span class="stat-number">125</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-red" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <img src="../assets/images/products/new_patients.png" alt="New Patients" class="card-logo" />
                                </div>
                            </div>
                            <!-- Total Consultations Card -->
                            <div class="col-md-6 col-lg-6 mb-6">
                                <div class="dashboard-card">
                                    <div class="dashboard-text">
                                        <span class="stat-title">Total Consultations</span>
                                        <span class="stat-number">218</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-orange" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <img src="../assets/images/products/calender.png" alt="New Patients" class="card-logo" />
                                </div>
                            </div>
                        </div>

                        <div class="row gap">
                            <div class="col-md-6 col-lg-6 mb-6">
                                <div class="dashboard-card">
                                    <div class="dashboard-text col-md-4 col-lg-4 mb-4">
                                        <span class="stat-title">Lab Test</span>
                                        <span class="stat-number">25</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <img src="../assets/images/products/Screenshot 2023-11-16 194659.png" alt="New Patients" class="card-logo" />
                                </div>
                            </div>
                            <!-- Total Consultations Card -->
                            <div class="col-md-6 col-lg-6 mb-6">
                                <div class="dashboard-card">
                                    <div class="dashboard-text col-md-4 col-lg-4 mb-4">
                                        <span class="stat-title">Lab Test</span>
                                        <span class="stat-number">25</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
                                        </div>
                                    </div>
                                    <img src="../assets/images/products/Screenshot 2023-11-16 194732.png" alt="New Patients" class="card-logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('myImage').addEventListener('click', function() {
            var notificationBox = document.getElementById('notificationBox');
            notificationBox.style.display = notificationBox.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>

</html>