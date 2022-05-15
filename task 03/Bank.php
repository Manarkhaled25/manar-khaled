<?php
if($_POST){
    define('month',12);
    $userName=$_POST['username'];
    $loanAmount=$_POST['loanAmount'];
    $loanYears=$_POST['loanYears'];
    if($loanYears <=3 ){
        $Rate = 0.10 * $loanAmount * $loanYears;
    }else{
        $Rate = 0.15 * $loanAmount * $loanYears;
    }
   $loanAfterInterest = $Rate + $loanAmount;
   $monthly=$loanAfterInterest / (month * $loanYears);

}

?>

<!doctype html>
<html lang="en">

<head>
    <title>task 03 Bank</title>
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
                Bank
                </h4>
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                <div class="form-group">
                        <label for="name" class="text-success">User Name</label>
                        <input type="text" name="username" value="<?= $userName??""?>" id="number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="number" class="text-success " >Loan Amount </label>
                        <input type="number" name="loanAmount"value="<?= $loanAmount??""?>" id="number" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="number" class="text-success " >Loan Years </label>
                        <input type="number" name="loanYears"  value="<?= $loanYears??""?>" id="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success col-12" name='submit'> Submit</button>
                    </div>
                </form>
            </div>
        </div>
<?php if($_POST) { ?>
        <table class="table ">
        <thead>
          <tr>
            <th class="text-success text-center" scope="col">User Name</th>
            <th class="text-success text-center" scope="col">Rate</th>
            <th class="text-success text-center" scope="col">Loan after interest</th>
            <th class="text-success text-center" scope="col">Monthly</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text-success text-center"> <?= $userName??""  ?> </td>
          <td class="text-success text-center"><?= $Rate??""  ?></td>
          <td class="text-success text-center"><?= $loanAfterInterest??""  ?></td>
          <td class="text-success text-center"> <?= $monthly??"" ?> </td>
        </tr>
      </tbody>
    </table>
    <?php
} 
?>
    </div>
     
        
         <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
  