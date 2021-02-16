<?php
SESSION_START();
// echo $_SESSION["email"];
// echo $_SESSION["contactnumber"];
    require_once("connection.php");

   if(isset($_POST["submit"])){
     $parentname=$_POST["parentname"];
     $email=$_SESSION["email"];
     $password=$_POST["password"];
     $studentname=$_POST["studentname"];
     $studentgender=$_POST["studentgender"];
     $contactnumber=$_SESSION["contactnumber"];
     $address=$_POST["address"];
     $city=$_POST["city"];
     $zipcode=$_POST["zipcode"];

     $sql="INSERT INTO register(`parentname`,`email`,`password`,`studentname`,`studentgender`,`contactnumber`,
     `address`,`city`,`zipcode`) VALUES ('$parentname','$email','$password','$studentname','$studentgender','$contactnumber','$address','$city','$zipcode')";

        if($conn->query($sql)==true){
            echo "record inserted";
            header('Location:login.php');
        }else{
            echo "something is wrong";
        }
    }
    
?>

