<?php

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ], 
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => null,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],  
];
$table = "<table class='table offset-3 border border-succsses col-7 text-center text-success '>
            <thead>
                <tr>";
                    foreach($users[0] AS $property=>$value){
                        $table.= "<th>{$property}</th>";
                    }
$table.=        "</tr>
            </thead>
            <tbody>";
               foreach($users AS $index=>$user){
                    $table .=   "<tr>";
                        foreach($user AS $property => $value) {
                            $table .=   "<td>";
                            if(gettype($value) == 'array' || gettype($value) == 'object'){
                                foreach($value AS $key => $objectOrArrayValue){
                                    if($property == 'gender' && $key == 'gender'){
                                        if($objectOrArrayValue == 'm')
                                            $objectOrArrayValue = 'male';
                                        else 
                                            $objectOrArrayValue = 'female';
                                    }
                                    $table .=   $objectOrArrayValue . ', ';
                                }
                            }else{
                                $table .=   $value;
                            }
                        } 
                        $table .=    "</td>";
                    $table .=    "</tr>";
               }
$table.=   "</tbody>
        </table>";

?>
<!doctype html>
<html lang="en">

<head>
    <title>task 02 Table</title>
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
                Dynamic Table
                </h4>
            </div>
<?= $table ?>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>