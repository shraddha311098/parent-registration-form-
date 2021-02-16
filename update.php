<?php
 require_once("connection.php");
SESSION_START();
$id=$_GET["id"];

if(isset($_POST["submit"])){
  $parentname=$_POST["parentname"];
  $email=$_SESSION["email"];
  $studentname=$_POST["studentname"];
  $studentgender=$_POST["studentgender"];
  $contactnumber=$_SESSION["contactnumber"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $zipcode=$_POST["zipcode"];

  $sql="UPDATE register SET `parentname`='$parentname', `email`='$email', `studentname`='$studentname',`studentgender`='$studentgender', `contactnumber`='$contactnumber', `address`='$address',`city`='$city',`zipcode`='$zipcode' WHERE `id`='$id'";

     if($conn->query($sql)==true){
         echo "record inserted";
         header('Location: submitform.php');
     }else{
         echo "something is wrong";
     }
 
//  $sql="SELECT * FROM register";
//  $result = $conn->query($sql);
//  if($result->num_rows >0){
//     // header('Location: submitform.php');
// }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>
<body>
    <h1>Preschool Package Form Registration</h1>
    <?php 
        $id=$_GET["id"];
        $sql="SELECT * FROM register WHERE `id`='$id' ";
        $result = $conn->query($sql);
        if($result->num_rows >0){
            while($row=$result->fetch_assoc()){
    ?>
    <form action="#" method="POST">
        <label for="parentname">Parent Name:</label>
        <input type="text" name="parentname" Value="<?php echo $row["parentname"];?>"><br><br>
         
        <label for="email">Email Address:</label>
        <input type="email" name="email" Value="<?php echo $row["email"]; ?>" disabled><br><br>

        <label for="studentname">Student Name:</label>
        <input type="text" name="studentname" Value="<?php echo $row["parentname"];?>"><br><br>
         
        <label for="selectgender">Select Gender</label>
        <input type="radio" name="studentgender" value="male"/> Male
        <input type="radio" name="studentgender" value="female"/> Female
        <input type="radio" name="studentgender" value="other"/>Other<br><br>

        <label for="contactnumber">Contact Number:</label>
        <input type="number" name="contactnumber" Value="<?php  echo $row["contactnumber"]; ?>" disabled><br><br>

        <label for="address">Address:</label>
        <input type="address" name="address" Value="<?php echo $row["address"];?>"><br><br>

        <label for="city">City:</label>
        <input type="text" name="city" Value="<?php echo $row["city"];?>"><br><br>

        <label for="zipcode">Zip code:</label>
        <input type="number" name="zipcode" Value="<?php echo $row["zipcode"];?>"><br><br>
       
        <input type="submit" name="submit">
    </form>
    <?php
     }
}
?>
</body>
</html>