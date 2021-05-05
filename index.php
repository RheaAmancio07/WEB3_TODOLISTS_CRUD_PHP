<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Todo Lists</title>
</head>


<body class="p-3 mb-2 bg-secondary text-white " style="margin-top:12%;">
<div class="center">


    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-1 bg-transparent border-dark">
                    <div class="card-header ">
                        <h2 class="text-center"> Add Task </h2>
                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="TaskName" placeholder=" Task Title" class="form-control mb-2" required>
                                <input type="text" name="TaskBody" placeholder=" Tasks Content" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                    <button href="view.php" type="submit" name="btn_save" class="btn btn-success"><img style="width:30px; border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl3o8WgazQJTeZtOqOb1Oy44883YnYwxm8RDyediV9bh4NRMj79G1hMyiiwvttSKczREc&usqp=CAU"> Add Task</button>
                    <a href="view.php" class="btn btn-danger "> <img style="width:30px; border-radius:50%;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK_vU5T4qh9UjOrC1p17IVeXmSMi70z04KwS_WZs9MNc9_8YjloxfvXeO1W30GDk1NpgA&usqp=CAU" > Cancel</a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>