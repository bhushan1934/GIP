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
  </style>
</head>

<body>

  <!--  Header End -->
  <div class="container-fluid">
    <div class="">
      <div class="">
        <div class="input-group mb-3 search-bar">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="test-requested-tab" data-bs-toggle="tab" data-bs-target="#test-requested" type="button" role="tab" aria-controls="test-requested" aria-selected="true">Test Requested</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="ongoing-test-tab" data-bs-toggle="tab" data-bs-target="#ongoing-test" type="button" role="tab" aria-controls="ongoing-test" aria-selected="false">Ongoing Test</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="completed-test-tab" data-bs-toggle="tab" data-bs-target="#completed-test" type="button" role="tab" aria-controls="completed-test" aria-selected="false">Completed Test</button>
          </li>
        </ul>

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Test Id</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Test</th>
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
              <td>500</td>
              <td>Paid</td>
              <td>
                <button class="status-button decline">Decline</button>
                <button class="status-button accept">Accept</button>
              </td>
            </tr>
            <tr>
              <th scope="row">4021</th>
              <td class="name-column">Tom Kruze</td>
              <td>234, 1st Cross, 10th...</td>
              <td>xyz.png</td>
              <td>500</td>
              <td>COD</td>
              <td>
                <button class="status-button decline">Decline</button>
                <button class="status-button accept">Accept</button>
              </td>
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
  <script>
    document.getElementById('myImage').addEventListener('click', function() {
      var notificationBox = document.getElementById('notificationBox');
      notificationBox.style.display = notificationBox.style.display === 'none' ? 'block' : 'none';
    });
  </script>
</body>

</html>
@endsection