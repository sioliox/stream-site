<?php
// includes site vars
include 'config.php';
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DM Stream Account Verification</title>
</head>
<body style="font-family: Arial, sans-serif;line-height: 1.6em;font-size: 100%;background-color: #2b2b2b;color: #fff;-webkit-font-smoothing: antialiased;height: 100%;-webkit-text-size-adjust: none;margin: 0;padding: 0;width: 100% !important;">
<table class="body-wrap" style="padding: 20px;width: 100%;">
    <tr>
        <td></td>
        <td class="container" bgcolor="#4e4e4e" style="border-radius: 5px;padding: 20px;border: 1px solid #f0f0f0;clear: both !important;display: block !important;margin: 0 auto !important;max-width: 600px !important;">
            <div class="content" style="display: block;margin: 0 auto;max-width: 600px;">
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <h1 style="color: #fff;font-family: Arial, sans-serif;font-weight: 200;line-height: 1.2em;margin: 20px 0 10px;font-size: 36px;"><?= $sitetitle ?> Account Verification</h1>
                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">Hi there <?= $displayname ?>,</p>
                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">Thank you for registering on <?= $sitesubtitle ?>! See below for instructions on how to activate your account:</p>
                            <table class="btn-primary" cellpadding="0" cellspacing="0" border="0" style="margin: 20px auto;width: 100% !important;">
                                <tr>
                                    <td style="border-radius: 25px;font-family: Arial, sans-serif;font-size: 14px;text-align: center;vertical-align: top;">

                                        <a href="<?= $furl ?>/login/verify/<?= $email ?>/<?= $authcode ?>" style="color: #fff!important;padding: 12px 24px;font-size: 29px;line-height: 1.3333333;border-radius: 3px;background-color: #00bad5;border-color: transparent;display: inline-block;margin: auto;font-weight: normal;text-align: center;vertical-align: middle;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;-webkit-user-select: none;text-decoration: none;">Verify Account</a>

                                    </td>
                                </tr>
                            </table>
                            <h1 style="color: #fff;font-family: Arial, sans-serif;font-weight: 200;line-height: 1.2em;margin: 20px 0 10px; text-align: center;font-size: 36px;">Click the blue button</h1>
                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">That's not so hard, is it?</p>
                            <h2 style="color: #fff;font-family: Arial, sans-serif;font-weight: 200;line-height: 1.2em;margin: 20px 0 10px;font-size: 28px;">FAQ:</h2>
                            <p style="font-size: 14px;font-weight: normal;margin: 10px 25px 0;"><b>Q:</b> How do I click on it?</p>
                            <p style="font-size: 14px;font-weight: normal;margin: 5px 25px 0;"><b>A:</b> Move the mouse cursor over the blue button that says "Verify Account" and press the left mouse button.</p>

                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">Did you click it yet? No? Why are you reading this then, go click!</p>
                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">If you did click it, you should be all set!</p>
                            <p style="font-size: 14px;font-weight: normal;margin-bottom: 10px;">If you clicked it, and you received any errors, please email the below:</p>
                            <p class="text-center" style="font-size: 14px;font-weight: bold;margin-bottom: 10px;text-align: center;"><a href="mailto:<?= $reply_email ?>" style="color: #00bad5;"><?= $reply_email ?></a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<table class="footer-wrap" style="width: 100%;clear: both !important;">
    <tr>
        <td></td>
        <td class="container" style="border-radius: 5px;clear: both !important;display: block !important;margin: 0 auto !important;max-width: 600px !important;">
            <div class="content" style="display: block;margin: 0 auto;max-width: 600px;">
                <table style="width: 100%;">
                    <tr>
                        <td class="text-center" align="center" style="text-align: center;">
                            <p style="font-size: 12px;font-weight: normal;margin-bottom: 10px;color: #fff;">Questions? Comments? Snide remarks? <a href="mailto:fenrir@rirnef.net" style="color: #00bad5;">Let me know</a>.
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
</body>
</html>