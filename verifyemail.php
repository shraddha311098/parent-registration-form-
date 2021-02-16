<?php
SESSION_START();
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['email'])){
    // $name = $_POST['name'];
    $_SESSION["email"] = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";
 
    $otp=rand(1111,9999);

    $mail = new PHPMailer();

   
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "shastrishraddha1001@gmail.com";
    $mail->Password = 'Jungle@mogli10';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

   
    $mail->isHTML(true);
    $mail->setFrom($_SESSION["email"]);
    $mail->addAddress("shastrishraddha1001@gmail.com");
    $mail->Subject = ($_SESSION["email"]);
    $mail->Body = $otp;
    

// $fields = array(
//     "sender_id" => "CHKSMS",
//     "message" => "2",
//     "variables_values" => "$otp",
//     "route" => "s",
//     "numbers" => "7223909047",
// );

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSL_VERIFYHOST => 0,
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode($fields),
//   CURLOPT_HTTPHEADER => array(
//     "authorization: MT7qy9X6tVxh8ZufDGJQCo2PbR43d1jYicEA0gnvH5klwpzeWKMas0Sv6GT1H3JW4xgnNCqi2u7hmPkU",
//     "accept: */*",
//     "cache-control: no-cache",
//     "content-type: application/json"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
        ?>
   <form action="mobilenumber.php" method="POST">
    <div class="secondBox">
        <label>Enter Otp</label>
        <input id="otp" type="number" name="otp" placeholder="Enter Otp">
        <br><br>
        <input type="hidden" name="otp1" value= "<?= $otp ?>">

        <button type="submit" value="Send An Email" >Submit</button>
    </div>
    </form>
 <?php
    }else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
  exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
      