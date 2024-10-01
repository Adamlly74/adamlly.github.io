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
<body>
<footer class="container-fluid text-center" style="margin-top: 5%" id="footer">
    &nbsp;<b id="demo" style="margin-top: 20%"></b> </br>
    &nbsp;<span id="host" style="margin-top: 20%"></span>

</footer>
  
    <script>
         //Last Modifield Date Code
         const date = new Date(document.lastModified);
            document.getElementById('demo').innerHTML = "The last Modified Date is : " + date;
            document.getElementById('host').innerHTML = "Page Host Name is : " + window.location.href;
    </script>
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