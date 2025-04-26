<?php
require_once './setup.php';
if(isset($_GET['id'])){
    delete_task($_GET['id']);
    header('Location: index.php');
    exit;
}else{
    echo "sumit something wrong";
}
?>