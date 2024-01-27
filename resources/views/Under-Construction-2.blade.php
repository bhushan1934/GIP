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
    /* The Modal (background) */
    .modal {
      display: flex;
      /* Changed to flex to center the modal box */
      justify-content: center;
      align-items: center;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fff;
      margin: auto;

      padding: 1rem;
      /* Adjust padding to your preference */
      border-radius: 10px;
      /* Rounded corners */
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      width: 411px;
      /* Set width to 411px */
      height: 390px;
      /* Set height to 390px */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* This will distribute space evenly */
    }


    .modal-header {
      padding-top: 0.5rem;
      /* Reduced top padding */
      padding-bottom: 0.5rem;
      /* Adjust bottom padding as needed */
      /* other styles */
    }

    .modal-title {
      font-size: 1.5rem;
      color: #333;
      font-size: bold;
      /* Adjust title color to match design */
    }

    .modal-body .form-group {
      margin-bottom: 0.5rem;
      /* Reduced from 1rem to 0.5rem for closer fields */
    }

    .modal-body {
      padding: 1rem;
      /* Adjust padding as needed */
    }

    /* If there is a padding defined for the inputs, you might want to adjust that as well */
    .modal-body input,
    .modal-body select {
      padding: 0.375rem 0.75rem;
      /* Adjust padding as needed */
      /* other styles */
    }



    .modal-body label {
      display: block;
      color: #666;
      /* Adjust label color to match design */
    }

    .modal-body input[readonly],
    .modal-body select {
      background-color: #fff;
      border: none;
      /* Read-only field background color */
      opacity: 1;
      /* Remove opacity */
    }

    .send-btn {
      width: auto;
      padding: 0.5rem 2rem;
      background-color: #17a2b8;
      color: #fff;
      /* Adjust button color to match design */
      border-color: #17a2b8;

      display: block;
      /* make the button a block element */
      width: 100%;
      /* make the button expand full width */
      margin-top: 1rem;
      /* space above the button */
    }

    .send-btn:hover {
      width: auto;
      padding: 0.5rem 2rem;
      background-color: #17a2b8;
      color: #fff;
      /* Adjust button color to match design */
      border-color: #17a2b8;

      display: block;
      /* make the button a block element */
      width: 100%;
      /* make the button expand full width */
      margin-top: 1rem;
      /* space above the button */
    }

    .form-group {
      display: flex;
      /* margin-bottom: 1rem; */
      /* space between form groups */
    }

    .form-group label {
      min-width: 140px;
      /* adjust as needed to match design */
      padding-right: 10px;
      /* space between label and input */
      text-align: right;
      /* align text to the right */
      font-weight: bold;
      /* if label is bold in the design */
      margin-bottom: 0;
      /* remove default margin bottom from bootstrap */
      align-self: center;
      /* vertically center align with input */
    }

    .form-group input,
    .form-group select {
      flex: 1;
      /* take up remaining space */
      margin-top: -7px;
      /* padding inside text box */
      border-radius: 0.25rem;
      /* rounded corners for input */
      border: 1px solid #ced4da;
      /* border color */
    }



    /* Style adjustments for the modal layout */


    .modal-header,
    .modal-footer {
      /* ... existing styles ... */
      padding: 0.5rem 1rem;
      /* consistent padding for header and footer */
    }

    /* Close button custom style if needed */
    .close {
      /* ... existing styles ... */
      margin-left: auto;
      /* push the close button to the right */
      padding: 0;
      /* remove padding if any */
      background: none;
      /* remove background if any */
      border: none;
      /* remove border if any */
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->

  <div class="container-fluid">
    <!--  Row 1 -->
    <div class=" col-md-5 col-lg-5 mb-5">
      <div class="card-body" style="height: 400px; ; ">
        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Assign Lab Pathologist</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="patientName">Name of Patient:</label>
                  <input type="text" class="form-control" id="patientName" placeholder="XYZ" readonly>
                </div>
                <div class="form-group">
                  <label for="patientAge">Age of Patient:</label>
                  <input type="text" class="form-control" id="patientAge" placeholder="50 years" readonly>
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <input type="text" class="form-control" id="gender" placeholder="Female" readonly>
                </div>
                <div class="form-group">
                  <label for="symptoms">Symptoms:</label>
                  <input type="text" class="form-control" id="symptoms" placeholder="Tooth Ache" readonly>
                </div>
                <div class="form-group">
                  <label for="test">Test:</label>
                  <input type="text" class="form-control" id="test" placeholder="Influenza Virus Test" readonly>
                </div>
                <div class="form-group">
                  <label for="selectPathologist">Select Pathologist:</label>
                  <select class="form-control" id="selectPathologist">
                    <option>Select</option>
                    <!-- Additional options should be populated here -->
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn send-btn">Send Request</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
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