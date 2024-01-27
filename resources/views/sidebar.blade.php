<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/themify-icons@0/css/themify-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <style>
        .container-fluid {
            width: 1500 !important;
            max-width: none !important;
        }

        .selected-page {
            background-color: #048795;
            /* Your chosen color for the background */
            color: white !important;
            /* Corrected typo for white text color */
            border-radius: 5px;
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
                    <a href="{{ url('/') }}" class="text-nowrap logo-img">
                        <img src="{{ asset('img/logos/logo2.png') }}" width="180" alt="" href="{{ url('/') }}" />
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

                        <li class="sidebar-item {{ request()->is('/') ? 'selected' : '' }}">
                            <a class="sidebar-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}" aria-expanded="false">
                                <span>
                                    <!-- <i class="fa fa-share-from-square"></i> -->
                                    <i class="fa fa-chart-line"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ request()->is('doctors') ? 'selected' : '' }}">
                            <a class="sidebar-link {{ request()->is('doctors') ? 'active' : '' }}" href="{{ url('/doctors') }}" aria-expanded="false">
                                <span>
                                    <i class="fa fa-stethoscope"></i>
                                </span>
                                <span class="hide-menu">Doctors</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('patient') ? 'selected' : '' }}">
                            <a class="sidebar-link" href="{{ url('/patient') }}" aria-expanded="false">
                                <span>
                                    <i class="fa fa-bed"></i>
                                </span>
                                <span class="hide-menu">Manage Patients</span>
                            </a>
                        </li>
                        <li class="sidebar-item  {{ request()->is('/Under-Construction-2') ? 'selected' : '' }}">
                            <a class="sidebar-link" href="{{ url('/Under-Construction-2') }}" aria-expanded=" false">
                                <span>
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <span class="hide-menu">Appointments</span>
                            </a>
                        </li>
                        <li class="sidebar-item  {{ request()->is('medicine') ? 'selected' : '' }}">
                            <a class="sidebar-link" href="{{ url('/medicine') }}" aria-expanded=" false">
                                <span>
                                    <i class="fa fa-tablets"></i>
                                </span>
                                <span class="hide-menu">Medicines</span>
                            </a>
                        </li>
                        <li class="sidebar-item  {{ request()->is('lab') ? 'selected' : '' }}">
                            <a class="sidebar-link" href="{{ url('/lab') }}" aria-expanded=" false">
                                <span>
                                    <i class="fa fa-vial"></i>
                                </span>
                                <span class="hide-menu">Lab Test</span>
                            </a>
                        </li>
                        <li class="sidebar-item  {{ request()->is('/Under-Construction-5') ? 'selected' : '' }}">
                            <a class="sidebar-link" href="{{ url('/Under-Construction-5') }}" aria-expanded=" false">
                                <span>
                                    <i class="fa fa-credit-card"></i>
                                </span>
                                <span class="hide-menu">Payments</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link1" href="./authentication-login.html" aria-expanded="false">
                                <span>
                                    <i class="fa fa-caret-left"></i>
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



        <script>
            document.getElementById('myImage').addEventListener('click', function() {
                var notificationBox = document.getElementById('notificationBox');
                notificationBox.style.display = notificationBox.style.display === 'none' ? 'block' : 'none';
            });
        </script>

</body>

</html>