<?php include "connection.php"; 
if (isset($_POST['submit'])
    && isset($_POST['firstName'])
    && isset($_POST['lastName'])
    && isset($_POST['gender'])
    && isset($_POST['f_food'])
    && isset($_POST['quote'])
    && isset($_POST['education'])
    && isset($_POST['favorateTime'])){

        $sql = "INSERT INTO table_1(FirstName, LastName, Gender, FavourateFood, Quote, EducationLevel, FavorateTimeOfDay)
        VALUES(:firstName, :lastName, :gender, :f_food, :quote, :education, :favorateTime)";

        $statement = $conn->prepare($sql);
        $statement->execute(array(
            ':firstName' => $_POST['firstName'],
            ':lastName' => $_POST['lastName'],
            ':gender' => $_POST['gender'],
            ':f_food' => $_POST['f_food'],
            ':quote' => $_POST['quote'],
            ':education' => $_POST['education'],
            ':favorateTime' => $_POST['favorateTime']));

            //echo "Data inserted Successful";
            header("location:viewData.php?DataSuccessfullInserted");
    }else{
        //echo "Data was not Successful";
        header("location:addData.php?PleaseInsertDataAgain");
    }
?>