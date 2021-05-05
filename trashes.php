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

<body class="p-3 mb-2 bg-secondary text-white">

<div class="containers">

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2 bg-transparent border-primary">
                    <div class="card-header bg-primary">
                        <h2 class="text-center text-white "> Trash Lists </h2>
                    </div>
                    <div class="card-body bg-primary">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                        ?>
                        <div>
                        <a href="view.php" class="btn btn-success"><img style="width:30px; border-radius:50%;" src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-color-round/3/67-512.png" alt="" srcset=""> Home</a>
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