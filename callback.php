<?php
// Callback handling
$data = file_get_contents('php://input');
$response = json_decode($data, true);

// Log or process the response data, such as transaction status, amount, phone number, etc.
if ($response) {
    $resultCode = $response['Body']['stkCallback']['ResultCode'];
    $resultDesc = $response['Body']['stkCallback']['ResultDesc'];

    if ($resultCode == 0) {
        // Payment successful
        echo "Payment confirmed!";
        // Update your database with payment confirmation details
    } else {
        // Payment failed
        echo "Payment failed: " . $resultDesc;
    }
}

