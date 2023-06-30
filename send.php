<?php 
include "config/init.php";

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['phone'])){

    $name    = escape($_POST['name']);
    $email   = escape($_POST['email']);
    $phone   = escape($_POST['phone']);
    $message = escape($_POST['message']);
   
    // Check User Information Not To Empty
    if ((empty($name)) || (empty($phone)) || (empty($email))) {
        echo 'Fill your informations . . .';
        exit();
    }
    // Check User Name is valid or Not
    if (!preg_match("/^([A-Za-z]+ )+[A-Za-z]+$|^[A-Za-z]+$/", $name)) {
        echo 'Only alphabets and whitespace are allowed.'; //Username is valid 
        exit();
    }

    // Check User Mail is Valid or Not
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $stmtSendMsg = $pdo->prepare("INSERT INTO clients (`username`,`phone`,`message`,`email`,`read`,`created_at`) VALUES(:username,:phone,:msg,:email,0)");
        //BIND VALUES
        $stmtSendMsg->bindValue(':username', htmlspecialchars($name), PDO::PARAM_STR);
        $stmtSendMsg->bindValue(':email', strtolower($email));
        $stmtSendMsg->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stmtSendMsg->bindValue(':msg', $message, PDO::PARAM_STR);
        $stmtSendMsg->bindValue(':userdate', htmlspecialchars($date), PDO::PARAM_STR);
        // Execute
        $insertUser = $stmtSendMsg->execute();
        if($insertUser){
            echo "sent";
            exit();
        }

    } else {
        echo 'Invalid Email format.';
        exit();
    }

   
}else{
    header("location:contact.php");
    die();
}

?>