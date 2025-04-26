<?php
require_once './setup.php';
if(isset($_POST['task'])){
    add_task($_POST['task']);
    header('Location: index.php');
    exit;
}else{
    echo "sumit something wrong";
}
?>