<?php
include "layout/header.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $PhoneNumber = $_POST['PhoneNumber'];
    $errors = [];
    if(empty($_POST['PhoneNumber'])){
        $errors['PhoneNumber-required'] = '<div class="text-success  text-center font-weight-bold" > PhoneNumber Is Required </div>';
    }
    if(empty($errors)){
        header('location:review.php');die;
    }
}
?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-success mt-5 ">
                <h4>
                 Hospital
                </h4>
            </div>
            <div class="col-5 offset-4 mt-5  ">
                <form class=" col-10 border border-success" method="POST">
                    <div class=" form-group " >
                        <input name="PhoneNumber" type="number" class="form-control col-11 m-3" placeholder="Enter Your Phone Number">
                        <?= $errors['PhoneNumber-required'] ?? "" ?>
                        <button type="submit" class=" form-control btn btn-success col-8 mx-5 my-2">Confirm </button>
                    </div>
                 </form>
            </div>
    
        </div>
    </div>
  
    <?php 
include "layout/footerscript.php";
?>  
  