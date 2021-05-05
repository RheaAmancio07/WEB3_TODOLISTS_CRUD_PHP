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
                                <input type="text" name="TaskBody" placeholder=" Tasks Description" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                    <button href="view.php" type="submit" name="btn_save" class="btn btn-success"><img style="width:30px; border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl3o8WgazQJTeZtOqOb1Oy44883YnYwxm8RDyediV9bh4NRMj79G1hMyiiwvttSKczREc&usqp=CAU"> Add Task</button>
                    <a href="view.php" class="btn btn-danger "> <img style="width:30px; border-radius:50%;"src="https://media.istockphoto.com/vectors/no-sign-red-circle-line-illegal-icon-vector-id1080261168?k=6&m=1080261168&s=170667a&w=0&h=edIWpiwlLVHXp8KnIO5fEAaIc6iHuXIrMKFS6ihVW2A=" > Cancel</a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>