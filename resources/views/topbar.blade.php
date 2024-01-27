<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <style>
        .notification-box {
            margin-top: 20px;
            background-color: #fff;
            display: none;
            /* Change this to 'block' to test the style */
            position: absolute;
            top: 50px;
            /* Adjust as necessary */
            right: 10px;
            /* Adjust as necessary */
            width: 400px;
            /* Adjust as necessary */
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 3000;
            border-radius: 8px;
            font-family: 'Arial', sans-serif;
            /* Use your preferred font */
        }

        .notification-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .notification-box p {
            color: #333;
            font-size: 14px;
            margin: 5px 0;
        }

        .notification-box button {
            background-color: #fff;
            white-space: nowrap;
            /* Bootstrap primary color */
            color: #007bff;
            border: solid 1px #007bff;
            padding: 6px 11px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 3px 1px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .notification-box button:hover {
            background-color: #007bff;
            /* Darker blue on hover */
        }

        .notification-box .header {
            font-size: 16px;
            color: #048795;
            /* Match the header color from the screenshot */
            margin-bottom: 10px;
        }

        .notification-body {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .notification-content {
            margin: 0;
            flex: 1;
            /* Allows text to take up available space */
        }

        .notification-box .timestamp {
            color: #999;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .notification-box .cta {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .notification-box .view-all {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .app-header {
            /* ... other styles ... */
            z-index: 1000;
            /* Ensure this is above other elements */
        }

        .cta {
            text-align: center;
            margin-top: 20px;
        }

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

    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header" style="background-color: #048795; height: 80px;  z-index: 1000;">

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
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: white; width: 300px" />
                            </form>
                        </li>

                        <li class="nav-item">
                            <a id="notificationBell" class="nav-link nav-icon-hover">
                                <i class="fa fa-bell" style="color: white"></i>
                                <div class="notification rounded-circle" style="background-color: red"></div>
                            </a>



                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!--  Header End -->
        <div id="notificationBox" class="notification-box">
            <div class="notification-header">
                <span class="header">Invitation</span>
                <span class="timestamp">28 mins ago</span>
            </div>
            <div class="notification-body">
                <p class="notification-content">New Patient Requests for consultation</p>
                <button onclick="viewDetails()">View Details</button>
            </div>
            <div class="cta">
                <a href="#" class="view-all">View All Notifications</a>
            </div>
        </div>


        <script>
            window.addEventListener('load', function() {
                var notificationBell = document.getElementById('notificationBell');
                var notificationBox = document.getElementById('notificationBox');

                if (notificationBell) {
                    notificationBell.addEventListener('click', function(event) {
                        // Toggle the notification box display
                        notificationBox.style.display = notificationBox.style.display === 'none' ? 'block' : 'none';
                        // Stop propagation so the document click event won't fire
                        event.stopPropagation();
                    });
                } else {
                    console.error('Notification bell element not found');
                }
            });

            // Close the notification box when clicking anywhere else on the page
            document.addEventListener('click', function(event) {
                var notificationBox = document.getElementById('notificationBox');
                if (notificationBox.style.display === 'block' && !notificationBox.contains(event.target)) {
                    notificationBox.style.display = 'none';
                }
            });

            function viewDetails() {
                alert('Details viewed!');
                // Implement the functionality you need here
            }
        </script>

</body>

</html>