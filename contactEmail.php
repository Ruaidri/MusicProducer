<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $name = $_POST['name'];
  $email = $_POST['emailer'];
  $message = $_POST['message'];
  $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
    $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
  }

  $emailer = (string)$email;

  if(!preg_match($emailValidation,$email)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>this $email is not valid..!</b>
      </div>
    ";
    exit();
  }

  require_once('./PHPMailer-master/src/PHPMailerAutoload.php');
  require_once('./PHPMailer-master/src/class.smtp.php');

  $mail = new PHPMailer;

  try {
  //Server settings
  // $mail->SMTPDebug = 2;
  $mail->IsSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'mail.johnnywelfarebeats.com';                 // Specify main and backup server
  $mail->Port = 26;                                    // Set the SMTP port
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'newsletter@johnnywelfarebeats.com';                // SMTP username
  $mail->Password = 'redking3';                  // SMTP password
  // $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
  $mail->From = 'newsletter@johnnywelfarebeats.com';
  $mail->FromName = ("JohnnyWelfare");
  $mail->AddAddress($email);  // Add a recipient
  $mail->IsHTML(true);                                  // Set email format to HTML
  // Content
  $mail->isHTML(true);                                   // Set email format to HTML
  $mail->Subject = $name;
  // $mail->Subject =  $subject;
  $mail->Body = $email;
  $mail->Body .= '<br>';
  $mail->Body .= $message;


  $mail->send();

  } catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  header("Location: index.html");
  exit();
    ?>
