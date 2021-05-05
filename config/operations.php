<?php 

    
    require_once('./config/dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $TaskName = $db->check($_POST['TaskName']);
                $TaskBody = $db->check($_POST['TaskBody']);
                if($this->insert_record($TaskName,$TaskBody))
                {
                    echo '<div class="alert alert-success"> Your Tasks Has Been Saved :) </div>';
                    header("location:view.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
            
            
        }


      // Insert Record in the Database Using Query    
        function insert_record($a,$b)
        {
            global $db;
            $query = "insert into todo (TaskName,TaskBody) values('$a','$b')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }

       // View Database Record
        public function view_record()
        {
            global $db;
            $query = "select * from todo";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        public function view_trashrecord()
        {
            global $db;
            $query = "select * from trash";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }



        // Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from todo where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;

        }

        // Update Record
     public function update()
     {
         global $db;

         if(isset($_POST['btn_update']))
         {
             $ID = $_POST['ID'];
             $TaskName = $db->check($_POST['TaskName']);
             $TaskBody = $db->check($_POST['TaskBody']);

             if($this->update_record($ID,$TaskName,$TaskBody))
             {
                 $this->set_messsage('<div class="alert alert-success"> Your Tasks Has Been Updated : )</div>');
                 header("location:view.php");
             }
             else
             {   
                 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
             }

         } 
         
         
        }

// Update Function 2
     public function update_record($id,$TaskName,$TaskBody)
     {
         global $db;
         $sql = "update todo set TaskName='$TaskName', TaskBody='$TaskBody' where ID='$id'";
         $result = mysqli_query($db->connection,$sql);
         if($result)
         {
             return true;
         }
         else
         {
             return false;
         }
     }

     public function Delete_Record(){
        global $db;
        $sql = "delete from todo where ID='" . $_GET["D_ID"] . "'";
        $result = mysqli_query($db->connection,$sql);
         if($result)
         {
             return true;
         }
         else
         {
             return false;
         }
        
     }

     public function copy_Record(){
        global $db;
        
        $sql1 = "insert into trash (trashName, trashBody)
        select TaskName, TaskBody from todo where ID='" . $_GET["D_ID"] . "'";
        $result = mysqli_query($db->connection,$sql1);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
     }

     public function copy_trashRecord(){
        global $db;
        
        $sql1 = "insert into todo (TaskName, TaskBody)
        select trashName, trashBody from trash where trashID='" . $_GET["U_ID"] . "'";
        $result = mysqli_query($db->connection,$sql1);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
     }

     public function Delete_trashRecord(){
        global $db;
        $sql = "delete from trash where trashID='" . $_GET["U_ID"] . "'";
        $result = mysqli_query($db->connection,$sql);
         if($result)
         {
             return true;
         }
         else
         {
             return false;
         }
     }

     // Set Session Message
     public function set_messsage($msg)
     {
         if(!empty($msg))
         {
             $_SESSION['Message']=$msg;
         }
         else
         {
             $msg = "";
         }
     }

     // Display Session Message
     public function display_message()
     {
         if(isset($_SESSION['Message']))
         {
             echo $_SESSION['Message'];
             unset($_SESSION['Message']);
         }
     }
     }
     
?>