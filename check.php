<?php

if(isset($_POST['id'])){
    require_once('./config/dbconfig.php');

    $id = $_POST['id'];

    if(empty($id)){
       echo 'error';
    }else {
        $data = $conn->prepare("SELECT id, checked FROM todo WHERE id=?");
        $data->execute([$id]);

        $todo = $data->fetch();
        $uId = $todo['id'];
        $checked = $todo['checked'];

        $uChecked = $checked ? 0 : 1;

        $res = $conn->query("UPDATE todo SET checked=$uChecked WHERE id=$uId");

        if($res){
            echo $checked;
        }else {
            echo "error";
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: view.php");
}