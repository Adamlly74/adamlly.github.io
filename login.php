<?php
    include "connection.php";

    session_start(); 
    if (isset($_POST['submit']) 
        && isset( $_POST['UserName'])
        && isset( $_POST['Password'])) {

        if (empty($_POST['UserName']) || empty($_POST['Password'])) {
            # code...
            header("location:../index.php?Empty username or password");
        }
        else{
            $sql = "SELECT * FROM user WHERE `UserName` = :UserName AND `Password` = :Password ";

                $stmt = $conn->prepare($sql); 
                $stmt->execute(array(':UserName' => $_POST['UserName'], ':Password'=> $_POST['Password']));
                $fetch=$stmt->fetch(PDO::FETCH_ASSOC);


                $num=$stmt->rowCount();
                if($num > 0)
                    {
                        header("location:viewData.php?Success");
                    }
                else
                    {
                        header("location:index.php?Wrong UserName Or Password!!");
                    }
            
        
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Css link-->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Java script links -->
    <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Document</title>
</head>
<body style="background-image: url('images/bg-01.jpg')">
    <div class="container-fluid" style="background-color: #F0F8FF; opacity: 0.9; width: 60%; margin-top: 13%;">
            <h2 style="text-align: center;">Login Page</h2>
        <form role="form" action="login.php" method="POST">
            <div class="form-group">
                <label for="email">User Name:</label>
                    <input type="text" class="form-control" id="uname" name="UserName" placeholder="Enter your UserName" required>
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="Password" placeholder="Enter your Password" required>
    </div>
    </br>
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
    <button class="btn btn-primary">
            <a href="index.php" style="color: white; text-decoration: none;">Back </a>
        </button>
        </form>
    </br>
    </div>

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