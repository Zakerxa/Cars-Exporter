<?php
include "../config/init.php";
$container = [];
$no = 0;
if (isset($_COOKIE['name'])) {
    $stmtGetMsg =  $pdo->prepare("SELECT * FROM client ORDER BY id DESC");
    $result     = $stmtGetMsg->execute();
    $result     = $stmtGetMsg->fetchAll();

    if ($stmtGetMsg->rowCount() >= 1) {
        foreach ($result as $key => $value) {
            $row['id'] = $value['id'];
            $row['name'] = $value['username'];
            $row['phone'] = $value['phone'];
            $row['message'] = $value['message'];
            $row['email'] = $value['email'];
            $row['read'] = $value['read'];
            $row['date'] = $value['created_date'];
            if ($value['read'] == '0') {
                $no++;
            }
            $container['msg'][] = $row;
        }
        $container['unread'] = $no;
        echo json_encode($container, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    } else {
        $container['msg'][] = [];
        $container['unread'] = $no;
        echo json_encode($container, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    }
}
