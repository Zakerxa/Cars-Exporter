<?php 

include "../config/init.php";

if(isset($_COOKIE['name'])){
    $id = $_POST['id'];
    $stmtread = $pdo->prepare("SELECT * FROM client WHERE id = ?");
    $check    = $stmtread->execute([$id]);
    $check    = $stmtread->fetch(PDO::FETCH_OBJ);
    if($check){
      if($check->read == 0){
          $stmtUpdate = $pdo->prepare("UPDATE client SET `read` = 1 WHERE id=$id");
          $done  = $stmtUpdate->execute();
          if($done){
              echo "Done";
          }
      }else{
          echo "already read";
      }
    }
}