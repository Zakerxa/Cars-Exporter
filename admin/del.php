<?php 

include "../config/init.php";

if(isset($_COOKIE['name'])){
    $id = $_POST['id'];
    $stmtread = $pdo->prepare("DELETE FROM client WHERE id = ?");
    $check    = $stmtread->execute([$id]);
    if($check){
      echo "Deleted";
    }
}