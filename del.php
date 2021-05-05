<?php 

    require_once('./config/dbconfig.php');
    $db = new operations();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->copy_Record($ID))
        {
            
            $db->Delete_Record();
            $db->set_messsage('<div class="alert alert-danger">  Your Tasks Has Been Deleted </div>');
            header("location:view.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Tasks </div>'); 
        }
    }
?>