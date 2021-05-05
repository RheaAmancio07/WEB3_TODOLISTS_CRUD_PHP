<?php 
    
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_trashrecord();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Crud Operation in Php Using OOP</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

body  {
    background-image: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
  background-size:cover;
        -webkit-animation: slidein 100s;
        animation: slidein 100s;

        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;

        -webkit-animation-direction: alternate;
        animation-direction: alternate;              
}

@-webkit-keyframes slidein {
from {background-position: top; background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}
}

@keyframes slidein {
from {background-position: top;background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}

}



.center
{
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(75, 75, 250, 0.3);
  border-radius: 3px;
}
.center h1{
  text-align:center;
  color:white;
  font-family: 'Source Code Pro', monospace;
  text-transform:uppercase;
}
</style>
<body >

<div class="containers">

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2 bg-transparent border-primary">
                    <div class="card-header bg-primary">
                        <h2 class="text-center text-white "> Deleted Todo Lists </h2>
                    </div>
                    <div class="card-body bg-primary">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                        ?>
                        <div>
                        <a href="view.php" class="btn btn-success"><img style="width:30px; border-radius:50%;" src="https://lh3.googleusercontent.com/proxy/BwhwYEAsDlFpHE0mOBAHPq4xEdelc8ytmtMcIyVGZCOxIpwrKzPKmmgSy14mfbvNNnu9YtdTpB7DmFvlfLiVe9xwggWUFiH1VrP_0im2SfolyhMzAzD6HI1wnK_ezVEnQpKtsi8NdobECQ" alt="" srcset=""> Home</a>
                        </div>
                        <br>
                        <div class="row ">
                        <?php 
                            while($data = mysqli_fetch_assoc($result)){?>                     
                                <div class="col-sm-3 mb-3">                     
                                <div class="card h-100 bg-secondary border-dark text-white">
                                    <div class="card-header bg-transparent border-dark">Task #: <?php echo $data['trashID'] ?> 
                                    <a href="delTrash.php?T_ID=<?php echo $data['trashID'] ?>" class=" float-right "><img style="width:30px; border-radius:50%;"src="https://cdn1.iconfinder.com/data/icons/interface-elements/32/cancel-circle-512.png"></a>
                                    <a href="undo.php?U_ID=<?php echo $data['trashID'] ?>" class="float-right "><img style="width:30px; border-radius:50%;"src="https://cdn0.iconfinder.com/data/icons/flat-round-arrow-arrow-head/512/Red_Arrow_Head_Top-2-512.png"></a> </div>                                   
                                    <div class="card-body">
                                        <p class="card-title"><?php echo $data['trashName'] ?></p>
                                        <p class="card-text"><?php echo $data['trashBody'] ?></p>
                                    </div>
                                    <div class="card-footer bg-transparent border-dark"><?php echo $data['trashAdded'] ?></div>
                                </div>
                                </div>                                                    
                        <?php
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    </div>
</body>
</html>