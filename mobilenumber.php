<?php
SESSION_START();

use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer.php";
require_once "SMTP.php";
require_once "Exception.php";

$mail = new PHPMailer();

$otp = $_POST['otp'];
$otp1 = $_POST['otp1'];

if($otp1==$otp){
    $status = "success";
    $response = " login successful <br>" ;
    echo $response;
   ?>
    <form action="verifymobilenumber.php" method="POST">
    <div class="secondBox">
        <label>Enter Mobile Number:</label>
        <input id="contactnumber" type="number" name="contactnumber" placeholder="Enter Mobile Number">
        <br><br>
        <input type="hidden" name="otp1" value= "<?= $otp ?>">

        <button type="submit" value="Send An Email" >Submit</button>
    </div>
    </form>
    <?php
}else{
   $status = "failed";
   $response = "Invalid otp: <br>" . $mail->ErrorInfo;
}
?>