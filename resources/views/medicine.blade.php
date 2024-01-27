@extends('main')

@section('main-container')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background-color: #f4f7f6;

    }

    .name-column {
      color: #007bff;
      /* Bootstrap primary blue by default */
    }

    .nav-pills .nav-link {
      border-radius: 0;
    }

    .nav-pills .nav-link.active {
      background-color: #17a2b8;
    }

    .card {
      border: none;
    }

    .table {
      margin-bottom: 0;
    }

    .table thead {
      background-color: #17a2b8;
      color: #fff;
    }

    .table tbody tr {
      background-color: #fff;
    }

    .table tbody tr td {
      vertical-align: middle;
    }

    .status-button {
      padding: 5px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .accept {
      background-color: #28a745;
      color: white;
    }

    .decline {
      background-color: #fff;
      /* Adjusted to a yellow color as per image */
      color: black;
      border-color: black;
      border: 1px solid black;
      /* Text color changed to black */
    }

    /* Adjust the border-radius and padding to match the image */
    .rounded-pill {
      border-radius: 50rem;
      padding: .375rem .75rem;
    }

    .nav-tabs .nav-link {
      color: #495057;
      /* This is the default color; adjust if needed */
    }

    .nav-tabs .nav-link.active {
      color: #fff;
      background-color: #17a2b8;
      /* Adjust this to match the color from your image */
      border-color: #17a2b8;
      /* Adjust this to match the color from your image */
    }

    /* Additional style to remove card borders if needed */
    .card {
      border: none;
    }

    .search-bar {
      margin-top: 20px;
      margin-bottom: 20px;
      /* Adjust this value to match the spacing in your image */
    }

    .nav-tabs {
      margin-bottom: 20px;
      /* Adjust this value to match the spacing in your image */
    }

    .card-body {
      padding: 20px;
      /* Adjust this value to match the padding in your image */
    }

    .status-dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      margin-right: 5px;
      vertical-align: middle;
    }

    .status-ongoing {
      background-color: #ffc107;
      /* Yellow for ongoing */
    }

    .status-pending {
      background-color: #dc3545;
      /* Red for pending */
    }

    /* Additional styling for the table */
    .table-custom {
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <!--  Header End -->
  <div class="container-fluid">
    <div class="">
      <div class="">
        <div class="input-group mb-3 search-bar">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" onclick="openTab(event, 'Ongoing')" id="defaultOpen" type="button">Ongoing Orders</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" onclick="openTab(event, 'Completed')" type="button" role="tab">Completed Orders</button>
          </li>
        </ul>

        <!-- Table -->
        <div id="Ongoing" class="tabcontent">
          <table class="table  table-custom">
            <thead>
              <tr>
                <th scope="col">Test Id</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Medicine</th>
                <th scope="col">Qty</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Stebin Roy</td>
                <td>234, 1st Cross, 10th...</td>
                <td>Zeal Cough Syrup</td>
                <td>2</td>
                <td>500</td>
                <td>Paid</td>
                <td><span class="status-dot status-ongoing"></span> Ongoing</td>

              </tr>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Tom Kruze</td>
                <td>234, 1st Cross, 10th...</td>
                <td>xyz.png</td>
                <td>3</td>
                <td>500</td>
                <td>COD</td>
                <td><span class="status-dot status-ongoing"></span> Pending</td>
              </tr>
              <!-- Repeat rows as needed -->
            </tbody>
          </table>
        </div>
        <div id="Completed" class="tabcontent">
          <table class="table  table-custom">
            <thead>
              <tr>
                <th scope="col">Test Id</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Medicine</th>
                <th scope="col">Qty</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Stebin Roy</td>
                <td>234, 1st Cross, 10th...</td>
                <td>Zeal Cough Syrup</td>
                <td>2</td>
                <td>500</td>
                <td>Paid</td>
                <td><span class="status-dot status-ongoing"></span> Ongoing</td>

              </tr>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Tom Kruze</td>
                <td>234, 1st Cross, 10th...</td>
                <td>xyz.png</td>
                <td>3</td>
                <td>500</td>
                <td>COD</td>
                <td><span class="status-dot status-ongoing"></span> Pending</td>
              </tr>
              <!-- Repeat rows as needed -->
            </tbody>
            <tbody>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Stebin Roy</td>
                <td>234, 1st Cross, 10th...</td>
                <td>Zeal Cough Syrup</td>
                <td>2</td>
                <td>500</td>
                <td>Paid</td>
                <td><span class="status-dot status-ongoing"></span> Ongoing</td>

              </tr>
              <tr>
                <th scope="row">4021</th>
                <td class="name-column">Tom Kruze</td>
                <td>234, 1st Cross, 10th...</td>
                <td>xyz.png</td>
                <td>3</td>
                <td>500</td>
                <td>COD</td>
                <td><span class="status-dot status-ongoing"></span> Pending</td>
              </tr>
              <!-- Repeat rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var tabcontent = document.getElementsByClassName("tabcontent");
      for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      var tablinks = document.getElementsByClassName("nav-link");
      for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
      }

      document.getElementById("Ongoing").style.display = "block";
      document.getElementById("defaultOpen").classList.add("active");
    });

    function openTab(evt, tabName) {
      var tabcontent = document.getElementsByClassName("tabcontent");
      for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      var tablinks = document.getElementsByClassName("nav-link");
      for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
      }

      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.classList.add("active");
    }
  </script>
  <script>
    document.getElementById('myImage').addEventListener('click', function() {
      var notificationBox = document.getElementById('notificationBox');
      notificationBox.style.display = notificationBox.style.display === 'none' ? 'block' : 'none';
    });
  </script>
</body>

</html>
@endsection