<?php
if($_POST){
    define('MAX_GRADE',100);
$degree1 = $_POST['physics'];
$degree2 = $_POST['chemistry'];
$degree3 = $_POST['biology'];
$degree4 = $_POST['math'];
$degree5 = $_POST['computer'];
$total = $degree1 + $degree2 + $degree3 + $degree4 + $degree5;
$average = $total / 5;
$percentage = ($total / 500) * 100;
if ($average >= 90 && $average < 100 )
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else if ($average >= 40 && $average < 60)
    $grade = "E";
    else 
    $grade = "F";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>task 01-5</title>
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
                Subjects Degree
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form class="border border-success" method="POST">
                    <div class=" col-10 form-group ">
                        <input type="text" name="physics" id="Name" class="form-control m-3" placeholder="Physics degree" aria-describedby="helpId">
                        <input type="text" name="chemistry" id="Name" class="form-control m-3" placeholder="Chemistry degree" aria-describedby="helpId">
                        <input type="text" name="biology" id="Name" class="form-control m-3" placeholder="Biology degree" aria-describedby="helpId">
                        <input type="text" name="math" id="Name" class="form-control m-3" placeholder="Mathematics  degree" aria-describedby="helpId">
                        <input type="text" name="computer" id="Name" class="form-control m-3" placeholder="Computer degree" aria-describedby="helpId">

                    </div>
                    <button class="  col-10 btn btn-outline-success form-control m-3"> Calculate</button>
                </form>
               <div class="m-3 border border-success text-center ">
               <?php 
            if(isset( $grade ))
    echo " Total Degree = {$total} " .'<br>'."Average = {$average}" .'<br>'. " Percentage = {$percentage}%".'<br>'. " Grade {$grade}  "

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