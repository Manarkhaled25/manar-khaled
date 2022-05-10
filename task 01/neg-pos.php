<?php
if ($_POST) {
    $number = $_POST['number'];
    if($number >= 0){
        $message = $number .=  " is positive number"; 
    }else{
        $message = $number .=  " is negtive number";    }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>task 01-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5 ">
                <h4 >
                   Negative or Positive
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form class="border border-danger" method="POST">
                    <div class=" col-10 form-group ">
                        <input type="number" name="number" id="Name" class="form-control m-2 " placeholder="write number" aria-describedby="helpId">
                    </div>
                    <button class="col-10 m-2 btn btn-outline-danger form-control "> Submit</button>
               <div class="mt-2 border border-danger text-center bg-danger text-light " >
               <?php 
            if(isset( $message ))
            echo $message
            ?>
               </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>