<?php
require 'Recaptcha.php';

$recaptcha = $_POST['g-recaptcha-response'];

$object = new Recaptcha();
$response = $object->verifyResponse($recaptcha);

if(isset($response['success']) and $response['success'] != true) {
	echo "An Error Occured and Error code is :".$response['error-codes'];
}else {
	echo "Correct Recaptcha";
}

