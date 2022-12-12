<?php

require('config.php');
require_once('connection.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $orderId=$_SESSION['razorpay_order_id'];
    $paymentId=$_POST['razorpay_payment_id'];
    $userId=$_SESSION['userId'];
    $amount=$_SESSION['amount'];
    $emailId=$_SESSION['emailId'];
    $phoneNo=$_SESSION['phoneNo'];
    date_default_timezone_set("Asia/Calcutta");
    $ordate=date('d-m-y h-i-s');
    
    $query="INSERT INTO `PaymentDetails`(`Order ID`, `Payment ID`, `User ID`, `Amount`, `Email ID`, `Phone number`, `Order date`) VALUES ('$orderId','$paymentId','$userId','$amount','$emailId','$phoneNo','$ordate')";
    
    if(mysqli_query($conn, $query)){
        header('Location:https://gamecoins.in/gamecoin_razorpay/razorpay-php-testapp-master/success.php');
    }
    else{
        echo mysqli_error($conn);
    }
    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
