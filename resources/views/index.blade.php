@extends('main')

@section('main-container')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />

  <style>
    .custom-padding {
      padding-right: 50px;
      /* Reduced right padding */
      padding-left: 5px;
      /* Reduced left padding */
    }

    .card {
      border: 0.2px solid #048795;
      border-radius: 8px;
      padding: 20px;
      width: 450px;
      /* Adjust as needed */
      /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
      box-shadow: -6px 6px 10px rgba(0, 0, 0, 0.2);

      margin: 20px;
      font-family: Arial, sans-serif;
    }

    .card-header {
      background-color: #fff;
      margin-bottom: 10px;
    }

    .card-title {

      font-size: 25px;
      font-weight: bold;
    }

    .card-number {
      font-size: 25px;
      color: #048795;
      font-weight: bold;
      margin-bottom: 10px;
    }



    .card-icon {
      float: right;
      height: 80px;
      /* Adjust as needed */
      width: 90px;
      /* Adjust as needed */
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

      background-color: #e1e1e1;
      border-radius: 10px;
      margin-bottom: 0.5rem;

    }

    .progress-bar {
      background-color: #ff6b6b;
      height: 100%;
      border-radius: 10px;
    }

    /* .card-logo {
      max-width: 100px;
      /* Adjust as necessary */
    /* height: 70px; */
    /* align-self: flex-end; */
    /* Align image at the bottom of the card */
    /* } */

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


  <div class="container-fluid">
    <div>

      <div>
        <div class="row">
          <div class=" col-md-6 col-lg-6 mb-6 ">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('img\logos\products\new_patients.png') }}" alt="Doctor" class="card-icon">
                <div class="card-title">New Patients</div>
                <div class="card-number">
                  125
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-red" style="width: 50%"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-6 custom-padding">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('img\logos\products\calender.png') }}" alt="Doctor" class="card-icon">

                <div class="card-title">Total Consultations</div>
                <div class="card-number">
                  218
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-orange" style="width: 80%"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6 mb-6">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('img\logos\products\screenshot 2023-11-16 194659.png') }}" alt="Doctor" class="card-icon">
                <div class="card-title">Lab Test</div>
                <div class="card-number">
                  25
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-yellow" style="width: 25%"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 mb-6">
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('img\logos\products\Screenshot 2023-11-16 194732.png') }}" alt="Doctor" class="card-icon">
                <div class="card-title">Medicines</div>
                <div class="card-number">
                  2479
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-blue" style="width: 90%"></div>
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