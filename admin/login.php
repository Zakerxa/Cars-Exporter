<?php

// Escape Function
function escape($html){
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

if (isset($_POST['umail'])) {

    if (!empty($_POST['umail'] && !empty($_POST['upass']))) {

        $email = escape($_POST['umail']);
        $password = escape($_POST['upass']);

        $user_email = trim($email);
        $user_pass = trim($password);

        if($user_email == ''){
            $match_pass = password_verify($user_pass, '');
            // adminthida@
            if($match_pass){
                setcookie("name", $user_email, time() + 60 * 60 * 24 * 30, '/');
            }else{
                echo "IncorrectPassword";
            }
        }else{
            echo "NoAccountExist";
            exit();
        }
    
    } else {
        echo "Empty";
    }
} else {
    echo "Something went wrong!";
}
