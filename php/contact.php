<?php
//Déclaration des variables 
$array = array("surname" => "", "email" => "", "number" => "", "message" => "",
               "surnameError" => "", "emailError" => "", "numberError" => "", "messageError" => "", "isSuccess" => "false" );

$emailTo = "evanbdr35@gmail.com";

// Traitement des données sur la même page 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $array['surname'] = verifyInput($_POST['surname']);
    $array['number'] = verifyInput($_POST['number']);
    $array['email'] = verifyInput($_POST['email']);
    $array['message'] = verifyInput($_POST['message']);
    $array['isSuccess'] = true;
    $emailText = "";

    if(empty($array['surname'])){
        $array['surnameError'] = "Veuillez rentrer votre nom et prénom";
        $array['isSuccess'] = false;
    }else{
        $emailText .= "Nom: {$array['surname']}\n";
    }
    if(!isEmail($array['email'])){
        $array['emailError'] = "Veuillez rentrer un email valide";
        $array['isSuccess'] = false;
    }else{
        $emailText .= "Email: {$array['email']} \n";
    }
    if(!isNumber($array['number'])){
        $array['numberError'] = "Veuillez rentrer que des chiffres";
        $array['isSuccess'] = false;
    }else{
        $emailText .= "Number: {$array['number']} \n";
    }
    if(empty($array['message'])){
        $array['messageError'] = "Veuillez rentrer votre message ...";
        $array['isSuccess'] = false;
    }else{
        $emailText .= "Message: {$array['message']} \n";
    }
    if($array['isSuccess']){

        $headers = "From: {$array['surname']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Quelqu'un vous a laisser un message depuis votre site", $emailText, $headers);
    }

    echo json_encode($array);
}

function verifyInput($var){

    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

function isEmail($var){

    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function isNumber($var){

    return preg_match("/^[0-9 ]*$/", $var);
}

?>