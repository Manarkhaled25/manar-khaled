<?php
if($_POST){
    $number = $_POST['number'];
    $root = $_POST['root'];
    $result = $number ** (1/$root);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>task 01-3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-success mt-5 ">
                <h4 >
                 Root 
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form class="border border-success" method="POST">
                    <div class=" col-10 form-group ">
                        <input type="number" name="number" id="Name" class="form-control m-3" placeholder="number" aria-describedby="helpId">
                        <input type="number" name="root" id="Name" class="form-control m-3" placeholder="root" aria-describedby="helpId">
                    </div>
                    <button class="  col-10 btn btn-outline-success form-control m-3"> Submit</button>
                </form>
               <div class="m-3 border border-success text-center ">
               <?php 
            if(isset( $result ))
            echo $result
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