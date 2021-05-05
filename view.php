<?php 
    
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body class="p-3 mb-2 bg-secondary text-white">
<div class="containers">

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2 bg-transparent border-primary">
                    <div class="card-header bg-primary">
                        <h2 class="text-center text-white "> Todo Lists </h2>
                    </div>
                    <div class="card-body bg-primary">
                        <?php
                              $db->display_message(); 
                              $db->display_message();
                        ?>
                        <div>
                            <a href="index.php" class="btn btn-success"><img style="width:30px; border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl3o8WgazQJTeZtOqOb1Oy44883YnYwxm8RDyediV9bh4NRMj79G1hMyiiwvttSKczREc&usqp=CAU" alt="" srcset=""> Add Task</a>
                            <a href="trashes.php" class="btn btn-danger "> <img style="width:30px; border-radius:50%;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGPS1KMhq8gbxU2ZAQ5LhvjfXMOYoRrPFkm0YkcsnTQN71mQf1DXpb8ZcTq1hYywKDvkQ&usqp=CAU" alt="" srcset="">   Trash</a>
                           
                        </div>
                        <br>
                        <div class="row ">
                        <?php 
                            while($data = mysqli_fetch_assoc($result)){?>                     
                                <div class="col-sm-4 mb-3">                     
                                <div class="card h-100 bg-secondary border-dark text-white">
                                    <div class="card-header bg-transparent border-dark">Task #: <?php echo $data['ID'] ?> <a href="del.php?D_ID=<?php echo $data['ID'] ?>" class=" float-right "><img style="width:30px; border-radius:50%;"src="https://cdn1.iconfinder.com/data/icons/interface-elements/32/cancel-circle-512.png"></a><a href="update.php?U_ID=<?php echo $data['ID'] ?>" class="float-right "><img style="width:30px; border-radius:50%;"src="https://cdn1.iconfinder.com/data/icons/creative-round-ui/214/94-512.png"></a> </div>                                   
                                    <div class="card-body">
                                   
                                        <h5 class="card-title"> <input type="checkbox" class="checkbox"> &nbsp;<?php echo $data['TaskName'] ?></h5>
                                        <p class="card-text"><?php echo $data['TaskBody'] ?></p>
                                    </div>
                                    <div class="card-footer bg-transparent border-dark"><?php echo $data['TaskAdded'] ?></div>
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
<script>
$('.checkbox').change(function(){
    if (this.checked){
        $(this).parent().parent().css("text-decoration","line-through");
    }else{
        $(this).parent().parent().css("text-decoration","none");
    }
});
</script>
</body>
</html>