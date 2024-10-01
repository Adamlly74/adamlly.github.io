<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Css link-->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Java script links -->
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div class="container-fluid">
        &nbsp;
        <form role="form" action="addDataHandler.php" method="POST" style="width: 60%; margin: auto" id="addData">
            <div class="form-group">
                <label>First Name:</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter your First Name" required>
            </div>
            <div class="form-group">
                <label for="pwd">Last Name:</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter your Last Name" required>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <select name="gender" name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Please choose your favorite food:</label>
                <input type="checkbox" name="f_food" value="Steak">Steak
                <input type="checkbox" name="f_food" value="Pizza">Pizza
                <input type="checkbox" name="f_food" value="Chicken">Chicken
            </div>
            <div class="form-group">
                <label for="">Enter Your Favorate Food:</label>
                <textarea name="quote" class="form-control" cols="25" rows="10" placeholder="Enter your Favorate food" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Select Your Level of Education:</label>
                <select name="education" class="form-control">
                    <option value="Certificate">Certificate</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">Degree</option>
                </select>
            </div>
            <div class="fom-group">
                <label for="">Select Your Favorate Time of Day:</label>
                <select name="favorateTime" class="form-control">
                    <option value="Morning">Morning</option>
                    <option value="Day">Day</option>
                    <option value="Night">Night</option>
                </select>
            </div>
         </br>
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
        <button class="btn btn-primary">
            <a href="index.php" style="color: white; text-decoration: none;">Back </a>
        </button>
        </form>
</br>
</div class="container-fluid">
</body>
<script>
    //script
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  //var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
</scrip>
</html>