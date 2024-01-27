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
      <div class="card-body">
        <div class="input-group mb-3 search-bar">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
          <!-- <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button> -->
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" onclick="openTab(event, 'RequestedPatients')" id="defaultOpen" type="button">Requested Patients</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" onclick="openTab(event, 'ConsultedPatients')" type="button" role="tab">Consulted Patients</button>
          </li>
        </ul>

        <div id="RequestedPatients" class="tabcontent">
          <!-- <h3>Requested Patients</h3> -->
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


        <div id="ConsultedPatients" class="tabcontent" style="display:none;">
          <!-- <h3>Consulted Patients</h3> -->
          <table class="table" id="RequestedPatients" class="tabcontent">
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
                <th scope="row">Aditya Roy</th>
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
            <tbody>
              <tr>
                <th scope="row">Aditya Roy</th>
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

      document.getElementById("RequestedPatients").style.display = "block";
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