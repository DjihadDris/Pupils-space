<?php
use Chargily\ePay\Chargily;
if(isset($_COOKIE['id'])){

require 'vendor/autoload.php';

$epay_config = require 'epay_config.php';

$chargily = new Chargily([
    //credentials
    'api_key' => $epay_config['key'],
    'api_secret' => $epay_config['secret'],
    //urls
    'urls' => [
        'back_url' => "https://souledj.epizy.com/books", // this is where client redirected after payment processing
        'webhook_url' => "https://souledj.epizy.com/process", // this is where you receive payment informations
    ],
    //mode
    'mode' => $_GET['method'], //OR CIB
    //payment details
    'payment' => [
        'number' => $_GET['orderid'], // Payment or order number
        'client_name' => $_GET['fnname'], // Client name
        'client_email' => $_GET['email'], // This is where client receive payment receipt after confirmation
        'amount' => $_GET['price'], //this the amount must be greater than or equal 75 
        'discount' => $_GET['discount'], //this is discount percentage between 0 and 99
        'description' => $_GET['bookname'], // this is the payment description

    ]
]);
// get redirect url
$redirectUrl = $chargily->getRedirectUrl();
//like : https://epay.chargily.com.dz/checkout/random_token_here

if($redirectUrl){
    //redirect
    header('Location: '.$redirectUrl);
}else{
    echo "We cant redirect to your payment now";
}
}else{
    header('Location: logout');
}
?>