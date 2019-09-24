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
  $mail->FromName = ("JohnnyWelfare");
  $mail->AddAddress($email);  // Add a recipient
  $mail->IsHTML(true);                                  // Set email format to HTML
  // Content
  $mail->isHTML(true);                                   // Set email format to HTML
  $mail->Subject = "Claim your free beat";
  // $mail->Subject =  $subject;
  $mail->Body = '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--[if gte mso 9]><xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml><![endif]-->

  <title></title>
  <style type="text/css">
    /* CLIENT SPECIFIC STYLES */

    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    body {
      margin: 0;
      padding: 0;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    table {
      border-collapse: collapse;
      margin: 0px auto;
    }

    .container {
      min-width: 0 !important
    }

    div[style*="margin: 16px 0"] {
      margin: 0 !important;
    }

    /* WEB FONTS */

    @import url("//hello.myfonts.net/count/2d9b47.css");


    @font-face {
      font-family: "Museo Sans";
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_0_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_0_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/2D9B47_0_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/2D9B47_0_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/2D9B47_0_0.ttf") format("truetype");
      font-weight: bold;
      font-style: normal;
    }

    @font-face {
      font-family: "Museo Sans";
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_1_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_1_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/2D9B47_1_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/2D9B47_1_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/2D9B47_1_0.ttf") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: "Museo Sans";
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_2_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_2_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/2D9B47_2_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/2D9B47_2_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/2D9B47_2_0.ttf") format("truetype");
      font-weight: bold;
      font-style: italic;
    }

    @font-face {
      font-family: "Museo Sans";
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_3_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_3_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/2D9B47_3_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/2D9B47_3_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/2D9B47_3_0.ttf") format("truetype");
      font-weight: normal;
      font-style: italic;
    }

    @font-face {
      font-family: "Brandon Grotesque";
      src: url("http://cdn.harrys.com/email/webfonts/3083F9_2_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/3083F9_2_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/3083F9_2_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/3083F9_2_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/3083F9_2_0.ttf") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: "Brandon Grotesque";
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_6_0.eot");
      src: url("http://cdn.harrys.com/email/webfonts/2D9B47_6_0.eot?#iefix") format("embedded-opentype"), url("http://cdn.harrys.com/email/webfonts/2D9B47_6_0.woff2") format("woff2"), url("http://cdn.harrys.com/email/webfonts/2D9B47_6_0.woff") format("woff"), url("http://cdn.harrys.com/email/webfonts/2D9B47_6_0.ttf") format("truetype");
      font-weight: bold;
      font-style: normal;
    }


    @media screen and (-webkit-min-device-pixel-ratio: 0) {

      .h1,
      .h1 a {
        font-family: "Brandon Grotesque", Futura, Trebuchet MS, Arial, sans-serif !important;
        font-size: 36px !important;
        line-height: 52px !important;
        letter-spacing: 1.25px !important;
        font-weight: normal !important;
      }

      .h2,
      .h2 a {
        font-family: "Brandon Grotesque", Futura, Trebuchet MS, Arial, sans-serif !important;
        font-size: 28px !important;
        line-height: 42px !important;
        letter-spacing: 1px !important;
        font-weight: normal !important;
      }

      .h3,
      .h3 a {
        font-family: "Brandon Grotesque", Futura, Trebuchet MS, Arial, sans-serif !important;
        font-size: 24px !important;
        line-height: 36px !important;
        letter-spacing: 1.25px !important;
        font-weight: normal !important;
      }

      .subheader,
      .subheader a {
        font-family: "Brandon Grotesque", Futura, Trebuchet MS, Arial, sans-serif !important;
        font-size: 12px !important;
        line-height: 24px !important;
        letter-spacing: 2.3px !important;
        font-weight: bold !important;
      }

      .body,
      .body a {
        font-family: "Museo Sans", Verdana, Geneva, sans-serif !important;
        font-size: 15px !important;
        line-height: 28px !important;
        letter-spacing: 0.75px !important;
      }

      .note,
      .note a {
        font-family: "Museo Sans", Verdana, Geneva, sans-serif !important;
        letter-spacing: 0.4px !important;
      }

      .large-cta,
      .large-cta a {
        font-family: "Brandon Grotesque", Futura, Trebuchet MS, Arial, sans-serif !important;
        font-size: 14px !important;
        letter-spacing: 2px !important;
        border-top-width: 14px !important;
        border-bottom-width: 10px !important;
        border-right-width: 30px !important;
        border-left-width: 30px !important;
        font-weight: bold !important;
      }

    }

    /* APPLE BLUE LINKS */

    .smart-666666 a {
      color: #666666 !important;
      text-decoration: none !important;
    }

    .smart-868686 a {
      color: #868686 !important;
      text-decoration: none !important;
    }

    .smart-BFBFBF a {
      color: #BFBFBF !important;
      text-decoration: none !important;
    }

    .smart-185674 a {
      color: #185674 !important;
      text-decoration: none !important;
    }

    .smart-263645 a {
      color: #263645 !important;
      text-decoration: none !important;
    }

    .smart-FFFFFF a {
      color: #FFFFFF !important;
      text-decoration: none !important;
    }





    /* MEDIA QUERY SCREEN 579px */

    @media screen and (max-width: 579px),
    screen and (max-device-width: 579px) {
      u+.body-tag .container {
        width: 100% !important;
        width: 100vw !important;
      }

      .full-table {
        width: 100% !important;
        min-width: 0 !important;
        height: auto !important;
      }

      .mobile-hide {
        height: 1px !important;
        display: none !important;
        min-width: inherit !important;
      }

      .mobile-show {
        display: block !important;
        width: 100% !important;
        min-width: 100% !important;
        height: auto !important;
      }

      .hero img {
        width: 100% !important;
        height: auto !important;
      }

      .mobile-column {
        height: auto !important;
      }

      .mobile-column td {
        text-align: center !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      .bg-text {
        width: 100% !important;
        display: block !important;
        padding-top: 400px !important;
      }

      .full-bg-right {
        display: block !important;
        background-position: 26% center !important;
      }

      .full-bg-left {
        display: block !important;
        background-position: 74% center !important;
      }

      .half-bg-right {
        display: block !important;
        background-size: cover !important;
        background-position: left bottom !important;
      }

      .half-bg-left {
        display: block !important;
        background-size: cover !important;
        background-position: right bottom !important;
      }

      .two-col-inline {
        background: none !important;
      }

      .head {
        display: table-header-group !important;
        width: 100% !important;
      }
      .foot {
        display: table-footer-group !important;
        width: 100% !important;
      }

      .h2 {
        padding-top: 10px !important;
        padding-bottom: 20px !important
      }

      .col_divider {
        border: none !important;
      }
    }
  </style>

</head>

<body class="body-tag" bgcolor="#F7F7F7" style="-webkit-font-smoothing: antialiased; width:100% !important; background:#F7F7F7;-webkit-text-size-adjust:none; margin:0; padding:0; min-width:100%">

  <!-- CONTAINER TABLE -->
  <table role="presentation" class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 580px;">
    <tr>
      <td>

        <!-- COPY BLOCK-->
        <table role="presentation" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <!-- Change background color -->
            <td bgcolor="#F7F7F7">
              <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" class="full-table" width="580" style="width: 580px">
                <tr>
                  <td align="center">
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" class="full-table" width="580">
                      <tr>
                        <td align="center">
                          <!-- Adjust width of text container (580px MAX) -->
                          <table role="presentation" width="580" border="0" align="center" cellpadding="0" cellspacing="0" class="full-table">



                            <!-- BODY -->
                            <tr class="mobile-column">
                              <td align="center" class="body" style="font-size: 14px; line-height: 30px; letter-spacing: 0px; font-family: Verdana, Geneva, sans-serif; color: #263645; font-weight:normal; padding-left: 50px; padding-right: 50px; padding-top:25px; padding-bottom:25px;">Master class beat one click away
                              </td>
                            </tr>
                            <!-- BODY END -->
                            <!-- ORANGE CTA -->
                            <tr>
                              <td align="center" style="padding-bottom:60px;">
                                <!--[if mso]>
												<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" style="height:48px;v-text-anchor:middle;width:280px;" arcsize="5%" strokecolor="#D1461C" fillcolor="#D1461C">
												<w:anchorlock/>
												<center>
												<![endif]-->

                                <a class="large-cta" href="http://sg-link.harrys.com/wf/click?upn=s6-2FqfrspoOmocPYk4-2BmgrSTbePC-2FpZluNi22hcU2bUhitzpuwsNgWxOyaWPC-2F9iK1n2HK21XaY1rVgwdA9Q-2FDOiwvJ2PuEmfMicyghgHQSePEs2WDgha-2FftQubzLPyfPYU7-2Bwk1ALcx4oNeD3e908N5v7rH9JSldifczIxX0QhOvlRx39btRXRT4XQsNnZzyCVSTpbTEu4nUiRjgT0agu5IS5J7w3HiswNvdwcROjc0-3D_uwT31D-2FKVmJYTDp7XDRGgdykVZeQkfQYVfLsDkw5CmSWOKVN3mQCEBJeR-2ByYH-2Ff-2BrSM-2F8f6gllOr0ROoRtAUnxvGi6fLjurNxNJUFesHUPgNX12Ydt-2BYl1U-2FyfxLQ-2BBHWijEcL0zcIbZjOxQ-2F4PaJl4c-2B1zHSs3l3f9eYAd6kyErHxY0XDr98iR-2FGbAck0vvXdrYD-2FUfVwcNO7kjHH-2FIkpNbHOKwmbG3zTa2GimYKazF85-2BhQitnhRjE60V4eTmyFMs7Yfmax48jCZhUBu0NEoeNmXv2VO0v05OI0TFM5f4rtzorrjx99O4rhRt0O2nnde5r44TnEu6hR1F4nbui6QSlUiyZRfuLYeCCgDrMQA12mhfy7pnusXlcZsYo540TuwVq5274lF87iyH-2BvS4AAojPUGs7h5jT5BtcyrdkZkltuJaBRAU1AefiLfw-2FWTtwl6hWrdHPt15eFKy0wlROKLFJFPCVwxmBUNgLPVMVbWh5fhHaROu6pJpQxCPA8rno-2B010b5RNhBlY7Jgq1bdYzPLyVPgBZaiVnTaZOxWiRq1fP2hf-2FvgCyejHJE-2BxpRZJK3U-2FLmDNcHaO9qGV5chzqOHQ518kx6PhmDqg734-2FEhfraotW4Mg6G-2FrCk-2B7XhZBt"
                                  style="font-size: 13px; letter-spacing: 0.16em; line-height:20px; font-family: Futura, Trebuchet MS, Arial, sans-serif; color: #FFFFFF; font-weight: normal; text-decoration: none; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background-color: #D1461C; border-top: 12px solid #D1461C; border-bottom: 12px solid #D1461C; border-right: 29px solid #D1461C; border-left: 29px solid #D1461C; display: inline-block;">Get the Beat</a>

                                <!--[if mso]>
												</center>
												</v:roundrect>
												<![endif]-->
                              </td>
                            </tr>
                            <!-- ORANGE CTA END -->

                          </table>
                        </td>
                      </tr>
                    </table>

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!-- COPY BLOCK END -->


        <!-- FOOTER -->
        <table role="presentation" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <!-- Change background color -->
            <td bgcolor="#F7F7F7" align="center" style="padding: 0 20px">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">

                <tr>
                  <td width="100%" height="50" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                </tr>


                <tr>
                  <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                </tr>

                <!-- NOTE -->
                <tr>
                  <td align="center" class="note" style="font-size: 13px; line-height: 24px; letter-spacing: 0.4px; font-family: Verdana, Geneva, sans-serif; color: #666666; font-weight:normal; padding:0 20px!important;">
                    <a href="mailto:help@harrys.com" style="color: #666666; text-decoration: none;">johnnywelfare@johnnywelfarebeats.com</a>
                    <br>
                    <span class="smart-666666" style="text-decoration: none;">South Dublin <span style="white-space:nowrap;">Ireland</span></span>
                    <br>


                  </td>
                </tr>

                <!-- NOTE END -->

                <tr>
                  <td width="100%" height="50" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                </tr>

              </table>
            </td>
          </tr>
        </table>
        <!-- FOOTER END -->

        <!-- CONTAINER TABLE END -->
      </td>
    </tr>
  </table>

  <!-- Email Client Monitor Pixel -->

</body>

</html>';


  $mail->send();

  } catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  header("Location: index.html");
  exit();
    ?>
