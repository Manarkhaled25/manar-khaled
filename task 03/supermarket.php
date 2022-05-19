<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['username'])) {
        $errors['name-required'] = "<div class='text-danger font-weight-bold'>Enter your Name</div>";
    }
    if (empty($_POST['city'])) {
        $errors['city-required'] = "<div class='text-danger font-weight-bold'>Select City</div>";
    }
    if (empty($_POST['VarietiesNumber'])) {
        $errors['VarietiesNumber-required'] = "<div class='text-danger font-weight-bold'>Varieties Number required</div>";
    }
}
    ?>
<html lang="en">
<head>
    <title>task 03 SuperMarket</title>
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
                Super Market
                </h4>
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                    <label for="username" class="text-success">User Name</label>
                        <input type="text" name="username" id="username" class="form-control" aria-describedby="helpId" value="<?= $_POST['username'] ?? '' ?>">
                        <?= $errors['name-required'] ?? '' ?>
                    </div>
                    <div class="form-group">
                    <label for="City" class="text-success">City</label>
                        <select class="custom-select" name="city">
                            <option value="Cairo" <?php if (isset($_POST['city'])) {echo $_POST['city'] == 'Cairo'?'selected':'';} ?>>Cairo</option>
                            <option value="Giza" <?php if (isset($_POST['city'])) {echo $_POST['city'] == 'Giza'?'selected':'';} ?>>Giza</option>
                            <option value="Alexandria" <?php if (isset($_POST['city'])) {echo $_POST['city'] == 'Alexandria'?'selected':'';} ?>>Alexandria</option>
                            <option value="Other" <?php if (isset($_POST['city'])) {echo $_POST['city'] == 'Other'?'selected':'';} ?>>Other</option>
                        </select>
                        <?= $errors['city-required'] ?? '' ?>
                    </div>
                    <div class="form-group">
                    <label for="number" class="text-success " >Number Of varieties</label>
                        <input type="numeber" name="VarietiesNumber" id="number" class="form-control" aria-describedby="helpId" value="<?= $_POST['VarietiesNumber'] ?? '' ?>">
                        <?= $errors['VarietiesNumber-required'] ?? '' ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success col-12" name='submit'> Submit</button>
                    </div>
                    <?php if (isset($_POST['submit']) ) { ?>
                        <table class="table table-bordered">
                    <form method="post">
                    <thead>
                        <tr>
                            <th class='text-success text-center' name='Name' >Name</th>
                            <th class='text-success text-center' name='Price' >Price</th>
                            <th class='text-success text-center' name='Quantity' >Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($cellsnumber = 1; $cellsnumber <= $_POST['VarietiesNumber']; $cellsnumber++) { ?>
                        <tr>
                        <td> <input type="text" name="productname<?= $$cellsnumber ?>" value="<?= $POST['Name' .$cellsnumber] ?? '' ?>"></input> </td>
                        <td> <input type="number" name="productprice<?= $cellsnumber ?>" value="<?= $POST['Price' .$cellsnumber] ?? '' ?>"></input> </td>
                        <td> <input type="number" name="productquantity<?= $cellsnumber ?>" value="<?= $POST['Quantity' . $cellsnumber] ?? '' ?>"></input> </td>
                        </tr>
                    <?php } ?>
                
                     </tbody>
                     </form>
                    </table>
                    <div class="form-group">
                        <button class="btn btn-success col-12" name='enterproduct'> Enter Products</button>
                    </div>
                    <?php } ?>
                
                <?php if(isset($_POST['enterproduct'])) { ?>
                    <table class="table table-bordered">
                        <form method="post">
        <tbody>
            <?php $total = 0;
            for ($cellsnumber = 1; $cellsnumber <= $_POST['VarietiesNumber']; $cellsnumber++) {
                $subtotal = $_POST['productprice' . $cellsnumber] * $_POST['productquantity' . $cellsnumber];
                $total += $subtotal; 
                if ($total < 1000) {
                    $discount = 0;
                    } elseif ($total > 1000 && $total < 3000) {
                    $discount = 0.10;
                    } elseif ($total > 3000 && $total < 4500) {
                        $discount = 0.15;
                    } else {
                    $discount = 0.20;
                    } 
        if($_POST['city']=='Cairo'){
            $delivery=0;
            }elseif($_POST['city']=='Giza'){
            $delivery=30;
                }elseif($_POST['city']=='Alexandria'){
            $delivery=50;
            }else{
            $delivery=100;
        
                } 
                $totalafterdiscount =  $total - ($total * $discount);
                $nettotal = $totalafterdiscount + $delivery;
            }
    ?>
        <ul class="alert alert-success">
            <li>
            Client name :<?= $_POST['username']?>
            </li>
            <li>
            City : <?= $_POST['city'] ?>
            </li>
            <li>
            Sub Total : <?= $subtotal ?> <b>EGP</b>
            </li>
            <li>
            Total : <?= $total ?> <b>EGP</b>
            </li>
            <li>
            Discount : <?= $discount * 100 ?><b>%</b>
            </li>
            <li>
            Total after discount: <?= $totalafterdiscount ?> <b>EGP</b>
            </li>
            <li class="text-danger">
            Net Total  : <?= $nettotal ?> <b>EGP</b>
            </li>
        </ul>
            
        </tbody>
            </form>
            </table>
        <?php } ?>
            </div>
        </div>
         <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
    