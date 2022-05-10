<?php
if ($_POST) {
    $first_number = $_POST['firstnum'];
    $second_number = $_POST['secondnum'];
    $third_number = $_POST['thirdnum'];
if($first_number > $second_number && $first_number > $third_number && $second_number > $third_number ){
    $message = $first_number .=  " is max number" . ' ' . $third_number .= " is min number"  ;
}elseif($first_number > $second_number && $first_number > $third_number && $second_number > $third_number ){
    $message = $first_number .=  " is max number" . ' ' . $second_number .= " is min number"  ;

}elseif($second_number > $first_number && $second_number > $third_number && $first_number > $third_number ){
    $message = $second_number .=  " is max number" . ' ' . $first_number .= " is min number";
}elseif($second_number > $first_number && $second_number > $third_number && $first_number > $third_number ){
    $message = $second_number .=  " is max number" . ' ' . $third_number .= " is min number";

}elseif($third_number > $first_number && $third_number > $second_number && $first_number > $third_number){
    $message = $third_number .=  " is max number"  . ' ' . $first_number .= " is min number"; 
}else{
   $message = $third_number .=  " is max number"  . ' ' . $second_number .= " is min number"; 
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>task 01-1</title>
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
                   Max & Min Number
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form class="border border-success" method="POST">
                    <div class=" col-10 form-group ">
                        <input type="number" name="firstnum" id="Name" class="form-control m-3" placeholder="first number" aria-describedby="helpId">
                        <input type="number" name="secondnum" id="Name" class="form-control m-3" placeholder="second number" aria-describedby="helpId">
                        <input type="number" name="thirdnum" id="Name" class="form-control m-3" placeholder="third number" aria-describedby="helpId">
                    </div>
                    <button class="  col-10 btn btn-outline-success form-control m-3"> Submit</button>
                </form>
               <div class="m-3 border border-success text-center ">
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