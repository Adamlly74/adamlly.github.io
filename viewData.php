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

<table class="table table-striped table-bordered" style="width:100%">
    <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>FavourateFood</th>
            <th>Favorate Quote</th>
            <th>Level of Education</th>
            <th>Favorate Time of Day</th>

        </tr>
    <?php include("connection.php");
        $sql = "SELECT * FROM table_1";
       $stmt = $conn->query($sql);
      

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            ?>
        <tr>
                <td><?php echo $row['FirstName'];?></td>
                <td><?php echo $row['LastName'];?></td>
                <td><?php echo $row['Gender'];?></td>
                <td><?php echo $row['FavourateFood'];?></td>
                <td><?php echo $row['Quote'];?></td>
                <td><?php echo $row['EducationLevel'];?></td>
                <td><?php echo $row['FavorateTimeOfDay'];?></td>

        </tr>
            <?php
        }
    
    ?>
</table> 

        <button class="btn btn-success" style="width: 100px">
            <a href="addData.php" style="color: white; text-decoration: none;">AddData</a>
        </button>
        <button class="btn btn-primary" style="width: 100px">
            <a href="index.php" style="color: white; text-decoration: none;">Back </a>
        </button>
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