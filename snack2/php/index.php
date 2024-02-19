<?php 
$name = $_GET['name'] ?? 'nobody';
$email = $_GET['email'] ?? 'nobody@gmail.com';
$age = $_GET['age'] ?? '0';

$invalid_name = 'Il nome deve essere lungo almeno 4 caratteri!';
$invalid_email = 'Il formato dell\'email non è valido (Caratteri previsti: @ , .)!';
$invalid_age = 'Valore dell\'età non consentito!';

$is_valid= true;
$color = 'text-danger';
$message='Accesso negato! ';

if(strlen($name)<4){
    $is_valid=false;
    $message .= " $invalid_name";
}
if(!str_contains($email, '@') || !str_contains($email, '.')) {
    $is_valid= false;
    $message .= " $invalid_email";
}
if(!is_numeric($age)){
    $is_valid= false;
    $message .= " $invalid_age";
}

if($is_valid){
    $message= 'Accesso riuscito';
    $color= 'text-success';
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2 php</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container-sm vh-100 d-flex justify-content-center  align-items-center">

        <h1 class="<?=$color?>"> <?= $message?></h1>
    </div>
    
</body>
</html>