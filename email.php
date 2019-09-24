<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$emailmanager = 'ruaidriog@gmail.com';

error_reporting(0);

$email = trim($_POST['email']);
$Ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);
if ($Ok) {
	mail($emailmanager,'Subscribe','','From: '.$email);

	if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
	{
		?>
		<script language = 'javascript'>
		alert('Thank you, your address was added to our Mailing List');
		history.go(-1);
		</script>
		<?
		header("Location: http://www.JhonnyWelfarebeats.com/index.html");
		exit();
	}
}

else {
	if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
	{
		?>
		<script language = 'javascript'>
		alert('Sorry, please provide a valid Email address.');
		history.go(-1);
		</script>
		<?
		header("Location: http://www.JhonnyWelfarebeats.com/index.html");
		exit();
	}
}
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  $email = $_POST['email'];
  $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

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
  $mail->FromName = ($name);
  $mail->AddAddress($email);  // Add a recipient
  $mail->IsHTML(true);                                  // Set email format to HTML
  // Content
  $mail->isHTML(true);                                   // Set email format to HTML
  $mail->Subject = 'Claim your free beat';
  // $mail->Subject =  $subject;
  $msg ='<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>

  .mobileContent{display:none;}

h1,.h1{
  font-size: 60px !important;
  line-height: 66px !important;
}
h2,.h2{
  font-size: 44px !important;
  line-height: 50px !important;
}
.btn a:hover{
  background-color:#000000!important;
  border-color:#000000!important;
}
.textcta a:hover{
  color:#000000!important;
  }
p {margin: 0 !important;}
.divbox:hover, * [lang~="x-divbox"]:hover {
  background-color: #000000 !important;
}
.boxfont:hover, * [lang~="x-boxfont"]:hover {
  color: #ffffff !important;
}
@media (max-width: 414px) {
  .hide {display: none !important;}
  .show {display: inline-block !important; width:auto !important; height:auto !important; overflow:visible !important; float:none !important; visibility:visible !important; border:none !important; padding-bottom:0px !important; vertical-align: bottom !important;}
  .show1 {
    display: block !important;
    max-height: none !important;
  }
  h1, h2, .h1, .h2{
    font-size: 34px !important;
    line-height: 40px !important;
  }
  .mobfb414, .mobfb414 td{
    padding-left:0 !important;
    padding-right:0 !important;
    max-width:414px !important;
  }
  .mobmw414{
    max-width:414px !important;
  }
  .mobileContent{display:block!important;}
  .desktopContent{display:none!important;}
}
</style>

<style type="text/css"> @media screen and (max-width:699px){.full,.t10of12,.t11of12,.t12of12,.t1of12,.t2of12,.t3of12,.t4of12,.t5of12,.t6of12,.t7of12,.t8of12,.t9of12{width:100%!important;max-width:none!important}a[x-apple-data-detectors]{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}.headerTextLeft{text-align:left!important}.hide{display:none!important}.mp0{padding:0!important}}@font-face{font-family:UberMove-Medium;src:url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMove-Medium.woff) format('woff'),url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMove-Medium.ttf) format('truetype');font-weight:400!important;font-style:normal!important;mso-font-alt:'Arial'}@font-face{font-family:UberMoveText-Light;src:url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Light.woff) format('woff'),url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Light.ttf) format('truetype');font-weight:400!important;font-style:normal!important;mso-font-alt:'Arial'}@font-face{font-family:UberMoveText-Regular;src:url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Regular.woff) format('woff'),url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Regular.ttf) format('truetype');font-weight:400!important;font-style:normal!important;mso-font-alt:'Arial'}@font-face{font-family:UberMoveText-Medium;src:url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Medium.woff) format('woff'),url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Medium.ttf) format('truetype');font-weight:400!important;font-style:normal!important;mso-font-alt:'Arial'}@font-face{font-family:UberMoveText-Bold;src:url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Bold.woff) format('woff'),url(https://s3.amazonaws.com/uber-static/emails/2018/global/fonts/UberMove/UberMoveText-Bold.ttf) format('truetype');font-weight:400!important;font-style:normal!important;mso-font-alt:'Arial'}a[x-apple-data-detectors]{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}
</style>
</head>


<body dir="ltr" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;background-color:#d6d6d5;margin:0;min-width:100%;padding:0;width:100%">
<span data-blockuuid="25ed175d-ca3c-4821-80b3-d903474864be" style="display: none; max-height: 0px; font-size: 0px; overflow: hidden; mso-hide: all;">
  Rides you can rely on, prices you can trust.
</span>

<style>.yahooHide{display:none!important}</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#d6d6d5;border:0;border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0" bgcolor="#d6d6d5" class="">
<tbody>
<tr>
<td align="center" style="display: block;">

<table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:0;border-collapse:collapse;border-spacing:0;max-width:700px;mso-table-lspace:0;mso-table-rspace:0" class="">
<tbody>
<tr>
<td style="background-color:#ffffff">
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" data-blockuuid="cd2f1373-4470-4723-8b2d-aa1fa190ab6e">
  <tbody>
  <tr>
    <td class="outsidegutter" align="left" style="direction:ltr;text-align:left;padding: 10px 14px 10px 14px; padding-left: 0;
       background-color: #000000;
      " bgcolor="#000000">

      <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
      <tbody>
        <tr>
        <td width="14" style="direction:ltr;text-align:left;padding-left:0; padding-right:0;"><img src="https://s3.amazonaws.com/uber-static/emails/2016/10/halloweenrider/sp_12x12.png" width="14" height="54" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 100%; outline: none; text-decoration: none; " border="0" alt="">
        </td>

        <td style="direction:ltr;text-align:left; font-size:0; ">
        <table width="672" cellpadding="0" cellspacing="0" border="0" style="display:inline-block;">
        <tr>
        <td width="56">

        <table border="0" cellpadding="0" cellspacing="0" class="t1of12" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 56px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%; display: inline-block; vertical-align: middle;">
        <tbody>
          <tr>
          <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
              <tbody>
                <tr>
                <td height="2" style="direction:ltr;text-align:left;font-size:0; line-height:1px;">
                &nbsp;
                </td>
              </tr>
              </tbody>
            </table>
          </td>
          </tr>
        </tbody>
        </table>



    </td>


    <td width="616">

  <table border="0" cellpadding="0" cellspacing="0" class="t11of12" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 616px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%; display: inline-block; vertical-align: middle;">
    <tbody>
      <tr>
      <td style="direction:ltr;text-align:left;padding-left: 0; padding-right: 0;">
      <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;text-align:left;font-size:0;">

              <table width="616" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
              <td width="408">

              <table border="0" cellpadding="0" cellspacing="0" class="t4of12" style="border: none; border-collapse: collapse; border-spacing: 0; display: inline-block; max-width: 408px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: middle; width: 100%;">
                <tbody>
                  <tr>
                  <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                        <tbody>



                      <tr>
                        <td style="direction:ltr;text-align: left; font-size: 0;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                        <tbody><tr>
                        <td style="direction:ltr;text-align:left;font-size:0; padding-top: 0px; padding-bottom: 0px; ">

                        <img src="https://s3.amazonaws.com/uber-static/emails/Global/Logos/cshead/uber-logo-69x43_2x_white.png" width="69" height="43" alt="Uber" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 100%; outline: none; text-decoration: none;">

                        </td>
                        </tr>
                        </tbody></table>
                        </td>
                      </tr>




                  </tbody>

</table>
</td>
</tr>
</tbody></table>

</td>
<td width="208">


</td>
</tr>
</table>


</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>
</td>
</tr>
</tbody></table>
</td>
</tr>











</tbody></table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:0;border-collapse:collapse;border-spacing:0;margin:auto;max-width:700px;mso-table-lspace:0;mso-table-rspace:0" class="tron">
<tbody>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;border:0;border-collapse:collapse;border-spacing:0;margin:auto;mso-table-lspace:0;mso-table-rspace:0" bgcolor="#ffffff" class="basetable">
<tbody>
<tr>
<td align="center">

<table width="700" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td align="center">

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="basetable" style="border:0;border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td align="center" style="background-color:#ffffff">
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="basetable" style="border:0;border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td>

<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="basetable" style="border:0;border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td>

<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:0;border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0" class="">
<tbody>
<tr>
<td>


<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" data-blockuuid="22c0de01-5b31-49d8-95e9-1512a841796f">
   <tbody><tr>
      <td class="xoutsidegutter" align="left" style="direction:ltr;text-align:left;background-color: #7556BF;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td align="right" style="direction:ltr;text-align:left;">



<table width="56" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t1of12 layout" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 56px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;font-size: 1px; height: 1px; line-height: 1px; padding-left: 0px !important; padding-right: 0px !important;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="direction:ltr;text-align:left;">&nbsp;</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>


<table width="644" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t11of12 layout" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 644px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;font-size: 1px; height: 1px; line-height: 1px; padding-left: 0px !important; padding-right: 0px !important;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; direction: rtl; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="text-align:left;direction: rtl; font-size: 0px;" valign="top">



<table width="224" cellpadding="0" cellspacing="0" border="0" style="display:inline-block;vertical-align:top;">
   <tr>
      <td valign="top">

         <table border="0" cellpadding="0" cellspacing="0" class="t4of12 layout" style="border: none; border-collapse: collapse; border-spacing: 0; display: inline-block; max-width: 224px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;font-size: 1px; height: 1px; line-height: 1px; padding-left: 0px !important; padding-right: 0px !important;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td align="right" style="direction:ltr;text-align: right;">
                          <img src="https://s3.amazonaws.com/uber-static/emails/2017/01/CRM_190099-COR-R-US_EM1_HI1_195x164.png" width="159" height="" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; margin: 0 0 0 auto; max-width: 159px; outline: none; text-decoration: none; width: 100%;" border="0" alt="">
                        </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>


<table width="420" cellpadding="0" cellspacing="0" border="0" style="display:inline-block;vertical-align:top;">
   <tr>
      <td>

         <table border="0" cellpadding="0" cellspacing="0" class="t7of12" style="border: none; border-collapse: collapse; border-spacing: 0; display: inline-block; max-width: 420px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-bottom: 35px; padding-left: 26px; padding-right: 26px; padding-top: 35px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td class="h2 white" style="direction:ltr;text-align:left;color: #ffffff; font-family: 'UberMove-Medium', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 34px; line-height: 40px; padding-bottom: 15px; padding-top: 7px;">Solid prices, flexible rides</td>
                     </tr>
                     <tr>
                      <td class="h5 white" style="direction:ltr;text-align:left;color: #ffffff; font-family: 'UberMove-Medium', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 30px; padding-bottom: 7px; padding-top: 7px;">Enjoy price protection—no matter the traffic, weather, or time of day.</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>








                        </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>



               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>





<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" data-blockuuid="22c0de01-5b31-49d8-95e9-1512a841796f">
   <tbody><tr>
      <td class="outsidegutter" align="left" style="direction:ltr;text-align:left;padding: 0 14px 0 14px;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;">

<table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>

         <table border="0" cellpadding="0" cellspacing="0" class="t10of12" align="center" style="Margin: 0 auto; border: none; border-collapse: collapse; border-spacing: 0; max-width: 560px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td class="p2" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px; padding-bottom: 35px; padding-top: 30px;">Buy a Ride Pass to get consistently lower prices on all eligible UberX and UberPool trips in Chicago. Just pay $24.99 a month for your Ride Pass.*</td>
                     </tr>
                     <tr>
                      <td style="direction:ltr;text-align:left;">

<table width="150" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>

    <div class="btn" lang="x-btn" style="font-family: 'UberMoveText-Bold', 'HelveticaNeueMedium', 'HelveticaNeue-Medium', 'Helvetica Neue Medium', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px;"> <a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B8jF6cU8M7dAd-2B7-2FWPfaOg52GbMoRtOj0fs6AUxpdC23QDcFckncK2dXnbjH3fK6QcZCNU8zINFr5M1dzumBjBvenZWooI8NGMaV9XO5FEKFbTvnUhjuX2b5JphVvGZ0k3pwJKPh1J7tIiYgQUHIz-2FhIf6UaX4VR5mcSefaH1qz6VvrsX6rkCAJbsvjJXlLrsdqjYe51C-2FTdA96LyoaFD8LJcMjus840gagETBcfeF0law5siEoaCxylqsZtv40t48AX3ngc044GPteexEA9ti8fp-2B8b8B2O6eo3l0wDsQyJ8lhWEq27V7yBQPe7w-2BU0jVXm9LqPEOFqA859eXU64-2FOPUcH3u-2BtCxPIO6Ym2RRJjZ-2F0fedaB4-2Fjwb4gq-2F-2BVo6Le42oykYbnsyB84HVuZr0bXAA1-2Bq46Q-2BQIM0y8zqA4v-2FXT6zZxkV8FDD3v-2B4lqoTtK6qgcUnHoTaS5-2FQEy6M2w-2B6MaWo0EQjlJPJCnMHe7GkFtmWJPU924vyDoejnaum11f8oUDmvPQbDaTQLVrLs3FzFz8i0EDWxxhCQDhS9W5D3j-2Fd8cUIAb-2B6GEUqcmL6gDgFWAbP-2Bs366-2BLWM-2BFsjSY-2FmthZ3RD33bPicpcUGokRYxXMig8bQIsQX8UsUnSEtfUPIR6cTgeBK3DM2IQb-2FquFbldQtB4TCp75HdnIS-2F1xpVH9zs7WsT7fa1oz17wISYC5w2tTXVRB2wUxZxo0mHrUBCDhmxa3HX4vsshaoIDtRFBfXn88-2FhyUT9bL4Ifc08Iui8Dfy35cF-2BEDAURl7N1i40hmxC98gH-2Bx7m5rb8UK3pOJGkfD4WdLAs1iNvT4lJT-2BUspBlfliJc1U7fPgK3wolc-2BeO9HKcu4jQXNvrONVLeCrZsWjIUHPk7XIwYkC0uSSkshrIxWVz6jjwhGRLf54eMu-2Fi00K8Ed8OYrHSbKSyFvLfrzjJan8zkc5ND39rnBXewkP2UHFRtaOR61cKY-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqVsOji9KUQTDp2ilNxR7JBNce9k8cRrBAsOJoiJnyt7MUw4cuKdHhhdXKYbLK3mARaF8GPIdBD3DnwPX0L40FEaKKf8RwsUsFVXxtDharj1-2FssTKVFhjdlN-2B7lZIruKEVlIH-2B6VzGweE-2FQnooIbnPvGt3aSDjCoEvEr25fHON4gydvwcPDHkI7NMvonupn4r65nsxPJiUnNeJ-2Fa39jtDeeNsLKNCifGPebeF2MGRM9R9" style="background-color: #000000; border-color: #000000; border-radius: 0px; border-style: solid; border-width: 13px 18px; color: #ffffff; display: inline-block; letter-spacing: 1px; max-width: 300px; min-width: 150px; text-align: center; text-decoration: none; transition: all 0.2s ease-in;"><span style="float:left;text-align:left;">Buy now in the app</span>
<span style="float:right;padding-top:3px; display:inline-block;"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/arrows/arrow2_white_left.png" width="14" height="13" style="-ms-interpolation-mode: bicubic; Margin-left: 7px; border: none; clear: both; display: block; margin-top: 2px; max-width: 100%; outline: none; text-decoration: none;" alt="" class=""></span>

    </a> </div>
</td>
</tr>
</table>

                      </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>
               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>


<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" data-blockuuid="22c0de01-5b31-49d8-95e9-1512a841796f">
   <tbody><tr>
      <td class="outsidegutter" align="left" style="direction:ltr;text-align:left;padding: 0 14px 0 14px; padding-bottom: 45px; padding-top: 30px;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;">

<table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>

         <table border="0" cellpadding="0" cellspacing="0" class="t10of12 layout" align="center" style="Margin: 0 auto; border: none; border-collapse: collapse; border-spacing: 0; max-width: 560px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;font-size: 1px; height: 1px; line-height: 1px; padding-left: 0px !important; padding-right: 0px !important;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="direction:ltr;text-align:left;">



<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
   <tbody><tr>
      <td class="xoutsidegutter" align="left" style="direction:ltr;text-align:left;padding-top: 15px; padding-bottom: 15px;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;">


<table width="56" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>

         <table border="0" cellpadding="0" cellspacing="0" class="t1of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 56px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="direction:ltr;text-align:left;padding-bottom: 25px;">
                          <img src="https://s3.amazonaws.com/uber-static/emails/2017/01/CRM_190099-COR-R-US_EM1_IC1_32x32.gif" width="32" height="" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-width: 32px; outline: none; text-decoration: none; width: 100%;" border="0" alt="">
                        </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>




<table width="448" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t8of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 448px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td class="h5" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMove-Medium', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 30px; padding-bottom: 7px; padding-top: 0px;">Weatherproof</td>
                     </tr>
                     <tr>
                       <td class="p2" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px; padding-bottom: 7px; padding-top: 7px;">Ride Pass lets you pay consistently lower prices on all eligible UberX and UberPool trips in your city—no matter the traffic, weather, or time of day.</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>



               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>






<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
   <tbody><tr>
      <td class="xoutsidegutter" align="left" style="direction:ltr;text-align:left;padding-top: 15px; padding-bottom: 15px;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;">


<table width="56" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t1of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 56px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="direction:ltr;text-align:left;padding-bottom: 25px;">
                          <img src="https://s3.amazonaws.com/uber-static/emails/2017/01/CRM_190099-COR-R-US_EM1_IC2_32x32.png" width="32" height="" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-width: 32px; outline: none; text-decoration: none; width: 100%;" border="0" alt="">
                        </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>



<table width="448" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t8of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 448px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td class="h5" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMove-Medium', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 30px; padding-bottom: 7px; padding-top: 0px;">Wallet-friendly</td>
                     </tr>
                     <tr>
                       <td class="p2" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px; padding-bottom: 7px; padding-top: 7px;">With Ride Pass, you can save up to 20% on every eligible uberX and UberPool trip you request in the Chicago metro area.</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>


               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>





<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
   <tbody><tr>
      <td class="xoutsidegutter" align="left" style="direction:ltr;text-align:left;padding-top: 15px; padding-bottom: 15px;">
         <table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;">


<table width="56" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t1of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 56px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td style="direction:ltr;text-align:left;padding-bottom: 25px;">
                          <img src="https://s3.amazonaws.com/uber-static/emails/2017/01/CRM_190099-COR-R-US_EM1_IC3_32x32.gif" width="32" height="" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-width: 32px; outline: none; text-decoration: none; width: 100%;" border="0" alt="">
                        </td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</table>

<table width="448" align="left" cellpadding="0" cellspacing="0" border="0">
   <tr>
      <td>
         <table border="0" cellpadding="0" cellspacing="0" class="t8of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 448px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
            <tbody><tr>
               <td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
                     <tbody><tr>
                        <td class="h5" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMove-Medium', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 24px; line-height: 30px; padding-bottom: 7px; padding-top: 0px;">Worry-free</td>
                     </tr>
                     <tr>
                       <td class="p2" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px; padding-bottom: 7px; padding-top: 7px;">Set up your Ride Pass in just a few taps. It renews automatically every month, and you can cancel at any time.</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>


               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>







                        </td>
                     </tr>
                     <tr>
                      <td style="direction:ltr;text-align:left;padding-top: 10px; padding-bottom: 45px; padding-left: 12px; padding-right: 12px;">

<table width="250" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>

    <div class="btn mobileContent" lang="x-btn" style="display: none; mso-hide:all; font-family: 'UberMoveText-Bold', 'HelveticaNeueMedium', 'HelveticaNeue-Medium', 'Helvetica Neue Medium', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px;"> <a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B8jF6cU8M7dAd-2B7-2FWPfaOg52GbMoRtOj0fs6AUxpdC23QDcFckncK2dXnbjH3fK6QcZCNU8zINFr5M1dzumBjBvenZWooI8NGMaV9XO5FEKFbTvnUhjuX2b5JphVvGZ0k3pwJKPh1J7tIiYgQUHIz-2FhIf6UaX4VR5mcSefaH1qz6VvrsX6rkCAJbsvjJXlLrsdqjYe51C-2FTdA96LyoaFD8LJcMjus840gagETBcfeF0law5siEoaCxylqsZtv40t48AX3ngc044GPteexEA9ti8fp-2B8b8B2O6eo3l0wDsQyJ8lhWEq27V7yBQPe7w-2BU0jVXm9LqPEOFqA859eXU64-2FOPUcH3u-2BtCxPIO6Ym2RRJjZ-2F0fedaB4-2Fjwb4gq-2F-2BVo6Le42oykYbnsyB84HVuZr0bXAA1-2Bq46Q-2BQIM0y8zqA4v-2FXT6zZxkV8FDD3v-2B4lqoTtK6qgcUnHoTaS5-2FQEy6M2w-2B6MaWo0EQjlJPJCnMHe7GkFtmWJPU924vyDoejnaum11f8oUDmvPQbDaTQLVrLs3FzFz8i0EDWxxhCQDhS9W5D3j-2Fd8cUIAb-2B6GEUqcmL6gDgFWAbP-2Bs366-2BLWM-2BFsjSY-2FmthZ3RD33bPicpcUGokRYxXMig8bQIsQX8UsUnSEtfUPIR6cTgeBK3DM2IQb-2FquFbldQtB4TCp75HdnIS-2F1xpVH9zs7WsT7fa1oz17wISYC5w2tTXVRB2wUxZxo0mHrUBCDhmxa3HX4vsshaoIDtRFBfXn88-2FhyUT9bL4Ifc08Iui8Dfy35cF-2BEDAURl7N1i40hmxC98gH-2Bx7m5rb8UK3pOJGkfD4WdLAs1iNvT4lJT-2BUspBlfliJc1U7fPgK3wolc-2BeO9HKcu4jQXNvrONVLeCrZsWjIUHPk7XIwYkC0uSSkshrIxWVz6jjwhGRLf54eMu-2Fi00K8Ed8OYrHSbKSyFvLfrzjJan8zkc5ND39rnBXewkP2UHFRtaOR61cKY-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqYxy25HdghQEa0iORqMdnNglFWY5XX-2BtRL4qG3-2BF0CcfF34OylxeqYgj1wKIKuZJs4wEt0UaAC5LD-2F6IjhhAnhqYK-2FNngPBfbQfegCEMl6930G7v-2FzqtPCKIDe-2B8zCQCNcGLjAnp1K53CkNIVkkKzJOB1uBX4eWGHZtDxidRS0MTvLYjjyaAvn-2FH1LknBPPZW3Tg8S7f2HgKoBZf2gEHp0dHRqvCURXw5hNUQem1JRo8" style="background-color: #000000; border-color: #000000; border-radius: 0px; border-style: solid; border-width: 13px 18px; color: #ffffff; display: inline-block; letter-spacing: 1px; max-width: 300px; min-width: 150px; text-align: center; text-decoration: none; transition: all 0.2s ease-in;"><span style="float:left;text-align:left;">Grab your pass in the app</span>
<span style="float:right;padding-top:3px; display:inline-block;"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/arrows/arrow2_white_left.png" width="14" height="13" style="-ms-interpolation-mode: bicubic; Margin-left: 7px; border: none; clear: both; display: block; margin-top: 2px; max-width: 100%; outline: none; text-decoration: none;" alt="" class=""></span>

    </a> </div>


    <div class="btn desktopContent" lang="x-btn" style="font-family: 'UberMoveText-Bold', 'HelveticaNeueMedium', 'HelveticaNeue-Medium', 'Helvetica Neue Medium', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 22px;"> <a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B8jF6cU8M7dAd-2B7-2FWPfaOg52GbMoRtOj0fs6AUxpdC23QDcFckncK2dXnbjH3fK6QcZCNU8zINFr5M1dzumBjBvenZWooI8NGMaV9XO5FEKFbTvnUhjuX2b5JphVvGZ0k3pwJKPh1J7tIiYgQUHIz-2FhIf6UaX4VR5mcSefaH1qz6VvrsX6rkCAJbsvjJXlLrsdqjYe51C-2FTdA96LyoaFD8LJcMjus840gagETBcfeF0law5siEoaCxylqsZtv40t48AX3ngc044GPteexEA9ti8fp-2B8b8B2O6eo3l0wDsQyJ8lhWEq27V7yBQPe7w-2BU0jVXm9LqPEOFqA859eXU64-2FOPUcH3u-2BtCxPIO6Ym2RRJjZ-2F0fedaB4-2Fjwb4gq-2F-2BVo6Le42oykYbnsyB84HVuZr0bXAA1-2Bq46Q-2BQIM0y8zqA4v-2FXT6zZxkV8FDD3v-2B4lqoTtK6qgcUnHoTaS5-2FQEy6M2w-2B6MaWo0EQjlJPJCnMHe7GkFtmWJPU924vyDoejnaum11f8oUDmvPQbDaTQLVrLs3FzFz8i0EDWxxhCQDhS9W5D3j-2Fd8cUIAb-2B6GEUqcmL6gDgFWAbP-2Bs366-2BLWM-2BFsjSY-2FmthZ3RD33bPicpcUGokRYxXMig8bQIsQX8UsUnSEtfUPIR6cTgeBK3DM2IQb-2FquFbldQtB4TCp75HdnIS-2F1xpVH9zs7WsT7fa1oz17wISYC5w2tTXVRB2wUxZxo0mHrUBCDhmxa3HX4vsshaoIDtRFBfXn88-2FhyUT9bL4Ifc08Iui8Dfy35cF-2BEDAURl7N1i40hmxC98gH-2Bx7m5rb8UK3pOJGkfD4WdLAs1iNvT4lJT-2BUspBlfliJc1U7fPgK3wolc-2BeO9HKcu4jQXNvrONVLeCrZsWjIUHPk7XIwYkC0uSSkshrIxWVz6jjwhGRLf54eMu-2Fi00K8Ed8OYrHSbKSyFvLfrzjJan8zkc5ND39rnBXewkP2UHFRtaOR61cKY-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqQZsyPSvI9NsKqEd5OfTzpB-2FgsJ-2Bppp-2B4gzMy3bf6xYbCWIcAEwpa84Dz6LUggl-2B2kz6HLG-2Fcc-2BSHtz0IFQej7JN4a0MrrR8rT28DF3hLrf6b3kgBUtjzPnSDdZhonSdNIKVVjYaSDAZPUhpO-2FgRC00JUyxUwBUVkEmKXE75JdynKxib9TykSgeWLKySMEriJ0z8iI1-2BYfLgIhpUdPwrsudqmBrmxftWihfL8Tm6vGgT" style="background-color: #000000; border-color: #000000; border-radius: 0px; border-style: solid; border-width: 13px 18px; color: #ffffff; display: inline-block; letter-spacing: 1px; max-width: 300px; min-width: 150px; text-align: center; text-decoration: none; transition: all 0.2s ease-in;"><span style="float:left;text-align:left;">Learn more</span>
<span style="float:right;padding-top:3px; display:inline-block;"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/arrows/arrow2_white_left.png" width="14" height="13" style="-ms-interpolation-mode: bicubic; Margin-left: 7px; border: none; clear: both; display: block; margin-top: 2px; max-width: 100%; outline: none; text-decoration: none;" alt="" class=""></span>

    </a> </div>

</td>
</tr>
</table>
                      </td>
                     </tr>
                     <tr>
                      <td class="ftrLegal" style="direction:ltr;text-align:left;color: #000000; font-family: 'UberMoveText-Regular', 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 20px; padding-left: 12px; padding-right: 12px;"><p>*Discounts may vary by trip. <a style="color:#266ef1; text-decoration: none;" href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B4U0SAY7Fg941f3qlAwxEvlb8wfyRerVBTiGyq-2ByOZ51Vso-2Bd-2FK1Hj6XluL4own4hoQJT3s0nxK00sHgkAOTZYU-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqUeBZwsHv0NipYUgE5FAYLxWRCaCIQyeE-2F8VI1oZD2c-2BuDxGzwcdS88PDJXQd3rnomIVVwdSA6Jo6lksKi4BJmPHzWazqBXezOEafVaxy8AqDChPj3E0jXnX7U4CEE5hS20KefGaw8jalUs6h8EuZ0JWDDNc-2Fn6nQgapl-2BWEqciO4GcnSQDGcwxkieBsePgCu9DFNeoAIV5aKvaXyl-2Be-2BGuPVlJu2BmjjcOp26bFkEI9">Additional terms</a> apply. See details under Ride Pass in your Uber app menu. If you’re a Platinum or Diamond member with Uber Rewards, you may also be eligible for Uber Rewards price protection on one pre-selected route during busy times. Since Ride Pass provides price protection on all routes, you’ll always pay the lowest possible price whenever you ride.</p>
</td>
                     </tr>
                  </tbody></table>
               </td>
            </tr>
         </tbody></table>

      </td>
   </tr>
</table>
               </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>


</td>
</tr>
</tbody>
</table>

</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>

</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

</td>
</tr>
</table>

</td>
</tr>
</tbody>
</table>

</td>
</tr>

</tbody>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #000000; border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" data-blockuuid="3274d7db-36f8-4908-9bfb-ad301d6d2d34">
<tbody>
<tr>
<td class="outsidegutter" align="left" style="direction:ltr;text-align:left;padding: 0 14px 0 14px;">
<table border="0" cellpadding="0" cellspacing="0" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;" class="">
<tbody>

<tr>
<td style="direction:ltr;text-align:left;padding-top: 30px; padding-bottom: 30px;">

<table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>

<table border="0" cellpadding="0" cellspacing="0" class="t10of12" align="center" style="Margin: 0 auto; border: none; border-collapse: collapse; border-spacing: 0; max-width: 560px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 0; padding-right: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; direction: rtl; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody><tr>
<td class="ignoreTd" style="font-size:0; text-align: left ">

<table width="560" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="224">

<table border="0" cellpadding="0" cellspacing="0" class="t5of12" style="border: none; border-collapse: collapse; border-spacing: 0; direction: ltr; display: inline-block; max-width: 224px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;">





</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
<td width="336">

<table border="0" cellpadding="0" cellspacing="0" class="t6of12" style="border: none; border-collapse: collapse; border-spacing: 0; direction: ltr; display: inline-block; max-width: 336px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 0; padding-right: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;">

<table width="336" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="168">

<table border="0" cellpadding="0" cellspacing="0" class="t3of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 168px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody>

<tr>
<td class="white" style="color: rgb(0, 0, 0); font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; padding: 3px 0px; direction: ltr; text-align: left;">


<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2Bx2paTSh9Smww2ZWBfKdIRQ-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqeWcWb4j4MAvsDnwuJJHuKcUrCslKTsw6vGEgYDkaAKjG9YlpQKo6aqL7WJwUAM1GtOyfLm87bWw-2BAYbgY7-2BKD0eP5Q-2BsMSfvzavQN-2Fg8Q-2FksD0A6IbAhOXKRGNFRG6bw15ErHiJsMFfOqmcl9EpL1a4pXdzkCNtS5e2zMLRX7j91-2Bl3i-2FdHH6sTV7rIGm4cWDrrjm6zElfO-2F-2FBek0ZxM-2FfZY6LnNT-2FXSw12CAcGMUVw" style="color: rgb(255, 255, 255); text-decoration: none;">Help center</a>


</td>
</tr>
<tr>
<td class="white" style="color: rgb(0, 0, 0); font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; padding: 3px 0px; direction: ltr; text-align: left;">


<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B4U0SAY7Fg941f3qlAwxEvn8rd9qsNs-2Fxl1OE4bxGQHL_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqXcG1lGVOXR4qmU-2FKgQR0CBLvZBa6xGFQhiQH0MKhoI0I2iTUiALlAhvK6AnjJfCacunBd1202nvZTypaOuPOqPaFqSq13s9hmbiEJ1XGDRpYotFdAVHm1l8PSZ-2BSu30cJnbF9lsJjt5CTPG0FaQv56F2vjkY-2FGHhZPcjWhxQoXLdE3ArM-2FDY10iM9mxmYS0q7WpdCkcs1GWD9cEnqAW9gK7J2F3P0Ww53iUwBu9Snuw" style="color: rgb(255, 255, 255); text-decoration: none;">Terms</a>


</td>
</tr>

<tr>
<td class="white" style="color: rgb(0, 0, 0); font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; padding: 3px 0px; direction: ltr; text-align: left;">

<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B4U0SAY7Fg941f3qlAwxEvl-2B7ZgTG3DkMoX-2B2Om7-2BE-2BUxEucwk7E1QLUxnXEoBZntHi0cSzA8wLGz5wVE8UgVmk-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqQNYN4kp-2FIVcEDoXCE8rPUIyZvP-2FU1MOzjUJdmNXENaw3qbCWpgCTeSruNGlbmEoqIqumykJa6W9L-2BjuIjVFBs5GyGVzPzBlxxjKWfDQgbBAU-2BXm-2BLAif-2FRZYR47U6tvp-2B-2B0-2FqRN1sAb63CbIFkiklYlXwkZ2qwknxkbOvQrLMNHr-2FkqjUDvsaQwZ0z-2B6PuEw8hj4NjpVVg1rTwYSAZmKZRq0PyTAUVmQ8OAEcILJ-2Fph" style="color: rgb(255, 255, 255); text-decoration: none;">Community</a>

</td>
</tr>


</tbody></table>
</td>
</tr>
</tbody></table>

</td>
<td width="168">

<table border="0" cellpadding="0" cellspacing="0" class="t3of12" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; max-width: 168px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody>
<tr>
<td class="white" style="color: rgb(0, 0, 0); font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; padding: 3px 0px; direction: ltr; text-align: left;">


<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2BynTUNaWB0bPpJeoCu1SH2x9YK9XFMvKS5DrAnRFahtb_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqXAxIeK4xAO8IVDyPfHfYHh0fpNCbHPueBxAoo6-2FBmEpjMye9cQayRqm4-2FLk1ixZNuwrcigKE1tJ6TJZRNCY4a-2FySjLyqzH8LV-2BPEuDVe0AaRUT3LwFkN4dVipiw-2F6clOo0NH5x3w4nz5GMtx-2Blefbv1RTilJPwhwo0U8RpB0UDsHzlsoj52SlX3EqBfrWFCpVK-2BlR448TIgHnOIwl1-2BPJeJ7UkhfX-2FahlZZKg9FSPPT" style="color: rgb(255, 255, 255); text-decoration: none;">Privacy</a>


</td>
</tr>
<tr>
<td class="white" style="color: rgb(0, 0, 0); font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; padding: 3px 0px; direction: ltr; text-align: left;"><a href="#" style="text-decoration: none; color: #ffffff;">Unsubscribe</a></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>



</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>

</td>
</tr>








<tr>
<td style="direction:ltr;text-align:left; padding-bottom: 30px;">
<table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="560">

<table border="0" cellpadding="0" cellspacing="0" class="t10of12" align="center" style="Margin: 0 auto; border: none; border-collapse: collapse; border-spacing: 0; max-width: 560px; mso-table-lspace: 0; mso-table-rspace: 0; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 0; padding-right: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; direction: rtl; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody><tr>
<td class="ignoreTd" style="font-size:0; text-align: left">

<table width="560" align="left" cellpadding="0" cellspacing="0" border="0">
<tr>
<td width="224">
<table border="0" cellpadding="0" cellspacing="0" class="t4of12" style="border: none; border-collapse: collapse; border-spacing: 0; direction: ltr; display: inline-block; max-width: 224px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
<table border="0" cellpadding="0" cellspacing="0" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; ">
<tbody><tr>
<td class="p3 white" style="padding-bottom: 12px; direction:ltr;text-align:left;">


<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 130px;">
<tbody>
<tr>
<td width="43" align="center" style="direction: ltr; text-align: left;">
<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B3i7mF3yR1tkqi7dP-2Fi8jSTFxKT2iJ2RQJtwB-2B0myEAw_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqeS7pQJK-2F9d8cMVHg0RYlpfmhwoGLotgzHGFh-2Bawn5NgnjKYUDeu8w1Ud5Zn1-2BCl2DAgN4LC60c7aYaJdsGtzVHt-2BpMmiPz1xCJD8Qva1i83nvGPFq6cqaEOz0MnAi7vCGHPptnGbnchG5bxfOowdAMNXZYohexjnFRjtGAQ6x2TVXQ5NJPtP49fz2pu3b13nqs0DK5y55M-2B7hKmeRmmH37Hlyy3MBvlLe3atY-2FV4EuZ"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/icons/08_28_18facebook.png" width="13" height="" border="0" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-height: 17px; max-width: 13px; outline: none; text-decoration: none; width: 100%;">
</a>
</td>
<td width="43" align="center" style="direction: ltr; text-align: left;">
<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B2T8T2QGchO2J7kNO-2FVNego-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqfasY3-2FIW4-2FhVGnyQ57aN9ugWq5s0L2jI6oaGzS2gOIhkzemFD2FbJJXQYDPdHqKpgPGEkzb-2BlBn3jvqz3XXhqWOhSCcFxBnD7w9dy6T3V03Bx4zwN9sAl7RDVlaMrFxAbJyYwApTWHnKXj1WjjT2gR6PKbEE3czJkzGSpQRmyi6ukIe-2FQgudbmeD1FAcFVEpXBuPaWFQcEAOrQZqwFuGzSovrpCNvXeKTpPgUTPlbrW"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/icons/08_28_18twitter.png" width="19" height="" border="0" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-height: 17px; max-width: 19px; outline: none; text-decoration: none; width: 100%;">
</a>
</td>
<td width="43" align="center" style="direction: ltr; text-align: left;">
<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2BxZHW7b-2F7hm9fWdA0raktVZtnC0suwL5mLxp3CfD0qDU_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqXw5UNZzgUZh3FGZSqSH1bLyqzkkuVOyZkVUGLkGRw29Xuz0T0eVXZCZeAlPjcQlsje7uK6a0tiRD-2FDliFkfGhz2yGLD-2FJloBeyseOzY-2BeEUJVQXR69vZCLd1m5Rstbeg-2FYNw2FMIqxxWoCn5nLlYtKTZam-2BSpEI8KA8pfdlhRZLgrVIjqW-2B8pkbfvR1L7R4gqt7e6pf130Z99RzATZB1yxzY80GCs3-2FRPfd14ob9Hns"> <img src="https://s3.amazonaws.com/uber-static/emails/2018/global/icons/08_28_18instagram.png" width="16" height="" border="0" style="-ms-interpolation-mode: bicubic; clear: both; display: block; height: auto; max-height: 17px; max-width: 16px; outline: none; text-decoration: none; width: 100%;">
</a>
</td>
</tr>
</tbody></table>


</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
<td width="336">
<table border="0" cellpadding="0" cellspacing="0" class="t6of12" style="border: none; border-collapse: collapse; border-spacing: 0; direction: ltr; display: inline-block; max-width: 336px; mso-table-lspace: 0; mso-table-rspace: 0; vertical-align: top; width: 100%;">
<tbody><tr>
<td style="direction:ltr;text-align:left;padding-left: 12px; padding-right: 12px;">
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" style="border: none; border-collapse: collapse; border-spacing: 0; mso-table-lspace: 0; mso-table-rspace: 0; table-layout: fixed; width: 100%;">
<tbody><tr>
<td class="p2" style="direction:ltr;text-align:left;color: #e5e5e5; font-family: 'UberMoveText-Regular', 'HelveticaNeue', Helvetica, Arial, sans-serif; font-size: 10px; line-height: 18px;">










This is a promotional email from





johnnywelfarebeats


<br>







1455 Market St., San Francisco, CA 94103




<br>

<a href="http://email.uber.com/wf/click?upn=u0Vt-2FupzkGFX9ZvjAvAP-2B0mzEwDE0N3icDL2GkE2mIM-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2B9FYU0ZJQzCiIg36IEM5VuNDIi32Ez04kmUjI0-2BncOpma7Wl-2B5rBRaB-2FAD7wy6DnQ6YjR95E9v9dpqPrxeYMXQRhs1mdsv-2BfKYMNVZISnae72-2FLLbClE0WLdILBX-2FkZ9DMSQj7gAUMH8KTYDQbxO6P6RM3bsLTlRuHlywVHCJ10r3nXQelP3IFOMXPz0tNRw4HZXsJj0YQd6IehtVXP7wsem9HMWV6bzId-2BZ97hwn2QZt4NrfD-2BXBwhJOTQYerufsQEKrO14EJGZaOCinbiraqRmfygKysBysd896EW9YwiwsR0RUoZYqi6p6PPm69Gl8IvDbtJu1P6pP1PL7az6wlhBRVxSKD8GHalo60pWgETN8-2F6lOcfHJkaJnwvahJ4ZJIvKvNsvAroe89CyQf9vtUZ9Nl0FXgJkaGIlN4Vzu39HS3eZzapA4XjmWZTm2OsFP5WZNRJlAJdEgMiMTeJa-2FB8I9F-2FUn7r-2FwwzoV5wFWilVOVAcvgxnshU6ANP-2BVx0z8" style="text-decoration: none; color: #e5e5e5">Uber.com</a>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</table>

</td>
</tr>




</tbody></table>
</td>
</tr>


</tbody></table>
</td>
</tr>
</tbody>
</table>

</td>
</tr>
</table>

</td>
</tr>
</tbody>
</table>


</body></html>';

$mail->Body = $msg;
$mail->send();

  } catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  // header("Location: index.html");
  // exit();
    ?>


		<!DOCTYPE html>
		<html lang="en" dir="ltr">
		  <head>
		    <title>JohnnyWelfare</title>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" href="./css/style.css">
		    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  </head>
		  <body>

		    <!-- Mailing List Popup -->
		    <div id="bkgOverlay" class="backgroundOverlay"></div>
		    <div id="delayedPopup" class="delayedPopupWindow record">
		      <!-- This is the close button -->
		      <a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>
		      <!-- This is the left side of the popup for the description -->
		      <div class="formDescription">
		        <h2>Like this beat? <span style="color: #40c348; font-weight: bold;"> Get it free!</span></h2>
		        <p>Sign up for our newsletter and receivce this and more exclusive product offers every month</p>
		      </div>
		      <!-- Begin MailChimp Signup Form -->
		      <div id="mc_embed_signup">
		        <form method="post" action="NLprocess.php" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
		          <div class="mc-field-group">
		            <label for="mce-EMAIL">Email Address
		              <span class="asterisk">*</span>
		            </label>
		            <input type="email" value="" name="email" class="required email" id="mce-EMAIL">
		          </div>
		          <div id="mce-responses" class="clear">
		            <div class="response" id="mce-error-response" style="display:none"></div>
		            <div class="response" id="mce-success-response" style="display:none"></div>
		          </div>
		          <!-- real people should not fill this in and expect good things-->
		          <div style="position: absolute; left: -5000px;">
		            <input type="text" name="b_2aabb98e55b83ba9d3bd551f5_e6c08b53b4" value="">
		          </div>
		          <div class="clear">
		            <input type="submit" value="Join Us Today" name="subscribe" id="submit mc-embedded-subscribe" class="button">
		          </div>
		        </form>
		      </div>
		      <!-- End MailChimp Signup Form -->
		    </div>


		    <!-- Popup bottom right START -->
		    <div class="popup">
		      <div class="close ns-close"></div>
		    </div>
		    <!-- Popup END -->



		    <section class="jumbo">
		      <video src="./video/smoke.mp4" autoplay muted></video>
		      <h1>
		        <span>J</span>
		        <span>O</span>
		        <span>H</span>
		        <span>N</span>
		        <span>N</span>
		        <span>Y</span>
		        <span> </span>
		        <span>W</span>
		        <span>E</span>
		        <span>L</span>
		        <span>F</span>
		        <span>A</span>
		        <span>R</span>
		        <span>E</span>
		      </h1>
		    </section>

		      <!-- Fade in header -->
		      <section class= "divide">
		        <div data-aos="zoom-in-up">
		          <h1>Beat Maker</h1>
		        </div>
		      </section>

		    <section class="training">

		    <!-- Fade in right text -->
		    <div data-aos="zoom-in-up" class="details done">
		           <h1>Beat Maker</h1>
		           <h2>Training and consulting</h2>
		           <p>South Dublin, Ireland</p>
		           <h4>I've been working with professionals for the past 10 years to help fortune 500 companies improve their managment and workflow output.</h4>
		    </div>
		    <!-- Fade in left text -->
		    <div data-aos="zoom-in-up" class="details dtwo">
		           <h1>Beat Maker</h1>
		           <h2>Training and consulting</h2>
		           <p>South Dublin, Ireland</p>
		           <h4 class="left-h4">I've been working with professionals for the past 10 years to help fortune 500 companies improve their managment and workflow output.</h4>
		    </div>

		    </section>


		<!-- THIS SECTION HERE IS WHERE THE SONG GOES -->
		    <div id="container">
		    	<canvas id="progress" width="320" height="320"></canvas><!-- progress bar -->
		    	<div id="player">
		    		<audio id="audio" controls>
		          <source src="./audio/Wrecked-44k.wav" type="audio/ogg"> <!-- Audio File -->
		          <source src="./audio/Wrecked-44k.wav" type="audio/mpeg"> <!-- Audio File -->
		    		</audio>
		    		<img src="./img/cover.jpg"><!-- album cover -->
		    		<div class="cover">
		          <div class="controls">
						<button id="play-pause" title="Play" onclick="togglePlayPause(); popup();"><i class="fa fa-play fa-3x"></i></button>
						<input id="volume" name="volume" min="0" max="1" step="0.1" type="range" onchange="setVolume()" />
					</div><!-- #controls -->
		    			<div class="info">
		    				<p class="song">Wrecked-44k</p>
		    				<p class="author">Rated: Róg Records</p>
		    			</div><!-- #info -->
		    		</div><!-- #cover -->
		    	</div><!-- #player -->
		    </div><!-- #container -->
		<!-- SONG INPUT LOCATION END -->

		    <!-- Contact Form -->
		    <header>CONTACT ME DIRECTLY</header>
		    <form id="form" class="topBefore" action="contactEmail.php" method="post">
		      <input id="name" name="name" class="Cname" type="text" placeholder="NAME" required>
		      <input id="emailer" name="emailer" class="Cemail" type="email" placeholder="E-MAIL" required>
		      <textarea id="message" name="message" class="Cmess" type="text" placeholder="MESSAGE"></textarea>
		      <input id="submit" class="Csub" value="contact" type="submit" name="contact_button">
		    </form>

		    <!-- Footer -->
		    <footer id="myFooter">
		      <div class="footer-social">
		        <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
		        <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
		        <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
		      </div>
		      <div class="container">
		        <ul>
		          <li><a href="#">Company Information</a></li>
		          <li><a href="#">Contact us</a></li>
		          <li><a href="#">Reviews</a></li>
		          <li><a href="#">Terms of service</a></li>
		        </ul>
		        <p class="footer-copyright">© 2019 Eire Web Design</p>
		      </div>
		    </footer>


		    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		    <script src="./js/bottom-popup.js"></script>
		    <script src="./js/popup.js"></script>
		    <script src="./js/play-audio.js"></script>
		    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		    <script>
		      AOS.init();
		    </script>
		  </body>
		</html>
