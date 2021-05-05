<?php 

    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['U_ID']))
    {
        global $db;
        $ID = $_GET['U_ID'];

        if($db->copy_trashRecord($ID))
        {
            
            $db->Delete_trashRecord();
            $db->set_messsage('<div class="alert alert-danger">  Your Tasks Has Been Deleted </div>');
            header("location:trashes.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Tasks </div>'); 
            header("location:trashes.php");
        }
    }
?>