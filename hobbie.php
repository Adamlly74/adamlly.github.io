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
    <style>
        p{
            color: blue;
        }
    </style>
</head>
    <?php include("header.php"); ?>
<body>
<div class="container">
        <h2>Read Favorate quotes</h2>
        <p>
            Do not sleep, my starling <br>
            Sleep, my doe               <br>
            She is wrapped in curtains  <br>
            Laid in snow                <br>
            She will burry you inside her fur<br>
        </p>
        <p>
            Do not sleep    <br>
            She waits for you to sleep <br>
            Do not sleep <br>
            She waits for you to sleep <br>
        </p>
        <p>
            My breath you breathe <br>
            It will carry you   <br>
            My breath you breathe   <br>
            It carries you  <br>
        </p>
        <p>
            Do not sleep    <br>
            She waits for you to sleep  <br>
            Do not sleep, my starling   <br>
            Do not sleep.   <br>
        </p>
</div>
<?php include("footer.php");?>
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
</script>
</html>