<?php
//TODO: Problem mit Stringbereinigung untersuchen ...Trim()?
//TODO:  mysql_real_escape_string, passwordfeld
function sanitizeFormPassword($inputText){
    $username = strip_tags($inputText);

    return $inputText;
}

function sanitizeFormUsername($inputText){
    $username = strip_tags($inputText);
    $username = str_replace(" ", "a", $inputText);

    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));

    return $inputText;
}



if(isset($_POST['registerButton'])){

    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);
    $wasSuccessful = null;
    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);
    var_dump($username, $firstName, $lastName, $email, $email2, $password, $password2);
    var_dump($wasSuccessful);
    echo var_dump($_POST['registerButton']);

    if($wasSuccessful) {
        $_SESSION['userLoggedIn'] = $username;
        //header("Location: index.php");
    }else {
        var_dump($wasSuccessful);
    }
}

?>
