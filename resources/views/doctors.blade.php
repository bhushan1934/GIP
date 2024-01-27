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
            <button class="nav-link active" onclick="openTab(event, 'Test')" id="defaultOpen" type="button">Test Requested</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" onclick="openTab(event, 'Ongoing')" type="button" role="tab">Ongoing Test</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" onclick="openTab(event, 'Complete')" type="button" role="tab">Completed Test</button>
          </li>
        </ul>


        <!-- Nav tabs -->
        <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="test-requested-tab" data-bs-toggle="tab" data-bs-target="#test-requested" type="button" role="tab" aria-controls="test-requested" aria-selected="true">Test Requested</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="ongoing-test-tab" data-bs-toggle="tab" data-bs-target="#ongoing-test" type="button" role="tab" aria-controls="ongoing-test" aria-selected="false">Ongoing Test</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="completed-test-tab" data-bs-toggle="tab" data-bs-target="#completed-test" type="button" role="tab" aria-controls="completed-test" aria-selected="false">Completed Test</button>
          </li>
        </ul> -->
        <div id="Test" class="tabcontent">
          <!-- <h3>Test Requested</h3> -->
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


        <div id="Ongoing" class="tabcontent">
          <!-- <h3>Ongoing Request</h3> -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Patients Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Sysmtoms</th>
                <th scope="col">Report/Record</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Stebin Roy</th>
                <td>40</td>
                <td>Male</td>
                <td>755648266</td>
                <td>aaa aaa</td>
                <td>Done</td>
                <td>
                  <button class="status-button decline">Decline</button>
                  <button class="status-button accept">Accept</button>
                </td>
              </tr>

              <!-- Repeat rows as needed -->
            </tbody>
          </table>
        </div>
        <!-- Table -->
        <div id="Complete" class="tabcontent">
          <!-- <h3>Complete Request</h3> -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Patients Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Sysmtoms</th>
                <th scope="col">Report/Record</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Stebin Roy</th>
                <td>40</td>
                <td>Male</td>
                <td>755648266</td>
                <td>aaa aaa</td>
                <td>Done</td>
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
  </div>
  <script>
    // When the document is fully loaded, execute the following:
    document.addEventListener('DOMContentLoaded', function() {
      // Hide all tabcontent by default
      var tabcontent = document.getElementsByClassName("tabcontent");
      for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Remove "active" class from all tablinks
      var tablinks = document.getElementsByClassName("nav-link");
      for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
      }

      // Show the default tab content and add "active" class
      document.getElementById("Test").style.display = "block";
      document.getElementById("defaultOpen").classList.add("active");
    });

    function openTab(evt, tabName) {
      // Get all elements with class="tabcontent" and hide them
      var tabcontent = document.getElementsByClassName("tabcontent");
      for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Remove "active" class from all tablinks
      var tablinks = document.getElementsByClassName("nav-link");
      for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
      }

      // Show the current tab and add "active" class to the clicked tab button
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