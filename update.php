<?php
require_once './setup.php';
if(isset($_GET['id']) && isset($_GET['status'])){
    update_task($_GET['id'], $_GET['status']);
    header('Location: index.php');
    exit;
}else{
    echo "sumit something wrong";
}
?>