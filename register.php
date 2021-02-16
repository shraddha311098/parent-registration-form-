<?php
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>
</head>
<body>
    <h1>Preschool Package Form Registration</h1>
    <form action="submitform.php" method="POST">
        <label for="parentname">Parent Name:</label>
        <input type="text" name="parentname"><br><br>
         
        <label for="email">Email Address:</label>
        <input type="email" name="email" Value="<?php echo $_SESSION["email"] ?>" disabled><br><br>
        
        <label for="password">Password</label>
        <input type="password" name="password"><br><br>

        <label for="studentname">Student Name:</label>
        <input type="text" name="studentname"><br><br>
         
        <label for="selectgender">Select Gender</label>
        <input type="radio" name="studentgender" value="male"> Male
        <input type="radio" name="studentgender" value="female"> Female
        <input type="radio" name="studentgender" value="other"> Other<br><br>

        <label for="contactnumber">Contact Number:</label>
        <input type="number" name="contactnumber" Value="<?php echo $_SESSION["contactnumber"] ?>" disabled><br><br>

        <label for="address">Address:</label>
        <input type="address" name="address"><br><br>

        <label for="city">City:</label>
        <input type="text" name="city"><br><br>

        <label for="zipcode">Zip code:</label>
        <input type="number" name="zipcode"><br><br>
       
        <input type="submit" name="submit">
    </form>
</body>
</html>