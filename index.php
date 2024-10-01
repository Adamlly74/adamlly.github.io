<?php include"connection.php"; ?>
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
    <title>Document</title>
    <div class="container-fluid">
        <h1 style="text-align: center; color: 	#4CAF50">Haji Hassan</h1>
    </div>
    <?php include("header.php"); ?>
</head>
<body>

    <div class="container" style="overflow-x:auto;">
       <table id="table_1">
        <tr>
            <th>Pesronal Info</th>
            <th>More Info</th>
        </tr>
        <tr>
            <td>My name is <b>Haji hassan</b></td>
            <td>I am third year student</td>
        </tr>
        <tr>
            <td> I am Degree student from The Open University of Tanzania.</td>
            <td>For more Information about 
                <a href="http://out.ac.tz.fstes/" style="text-decoration: none;">OUT ICT Department</a>.
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4 style="margin-left: 8%;">My top ten favourate CD's</h4>
                <div id="video_1">
                    <video width="500px" height="250px" controls>
                        <source src="videos/Tulia Weeding.mp4" type="video/mp4">
                    </video>
                </div>
            </td>  
        </tr>
       </table>
     <!--end of div container -->
    </div>

    <div class="section one" id="section1" style="width: 100%; height: 100%; margin-top: 1%;">
        <h3 style="text-align: center; margin-top: 1%;">Welcome to Favourate Section</h3>
        <p>
            <h4>Open University of Tanzania History</h4>
            The Open University of Tanzania (OUT) (Swahili: Chuo Kikuu Huria cha Tanzania)
            is a distance learning public university in Tanzania and the largest by the
            number of students.[2] It was established by an Act of Parliament No. 17 of 1992.
            It is a single mode institution offering certificate, 
            diploma and degree courses through distance learning.
            Its headquarters is situated in Dar es Salaam, Tanzania, 
            and conducts its operations through 30 Regional Centres and 70 Study Centres.[3]
            The university has a capacity of approximately 70,000 students both local and international ones.
        </p>
        <p>
            <h4>Categories of University</h4>
            Open University of TanzaniaPublic universities in TanzaniaUniversities in Dar es SalaamBusiness schools in TanzaniaEducational institutions established in 19921992 establishments in TanzaniaDistance education institutions based in TanzaniaOpen University of Tanzania alumniOnline schoolsEducation in Dar es Salaam
        </p>
        <p>
            <h4>About University</h4>
            Studyportals began as a spin-off from a couple of large international study associations.
            It was born out of frustration, a total lack of information and overview of the fast-growing
            number of international Master’s programmes in Europe. In 2007, Mastersportal.com was developed
            and proved to be a roaring success. Soon after, Bachelorsportal.com, PhDportal.com, 
            Shortcoursesportal.com, and Distancelearningportal.com followed.

In 2021, we helped 52 million students around the world to explore study programmes and make an informed choice, throughout over 200,000 courses at 3,750+ educational institutes across 110 countries.
        </p>
    </div>
    
    <?php include('footer.php'); ?>
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
