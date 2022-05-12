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
?>
<!doctype html>
<html lang="en">

<head>
    <title>task 02</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-dark mt-5 ">
                <h4 >
            Table
                </h4>
            </div>
            <table class="table table-light table table-striped table table-bordered">
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Hoppies</th>
            <th>Activities</th>
           </tr>

    <?php

for($row=0; $row<1; $row++){
echo "<tr>";
echo "<td> {$users[0]->id} </td>";
echo "<td> {$users[0]->name} </td>";
echo "<td> {$users[0]->gender->gender} </td>";
echo "<td> {$users[0]->hobbies[0]} <br> , {$users[0]->hobbies[1]} <br> , {$users[0]->hobbies[2]} </td>";
echo "<td>{$users[0]->activities['school']} <br> ,  {$users[0]->activities['home']} </td>";
echo "</tr>";

echo "<tr>";
echo " <td>{$users[1]->id} </td>";
echo " <td>{$users[1]->name} </td>";
echo " <td>{$users[1]->gender->gender} </td>";
echo " <td>{$users[1]->hobbies[0]} <br> , {$users[1]->hobbies[1] }</td>";
echo " <td>{$users[1]->activities['school']} <br> ,  {$users[1]->activities['home']} </td>";
echo "</tr>";

echo "<tr>";
echo " <td>{$users[2]->id} </td>";
echo " <td>{$users[2]->name} </td>";
echo " <td>{$users[2]->gender->gender} </td>";
echo "<td>{$users[2]->hobbies[0]} </td>";
echo " <td>{$users[2]->activities['school']} <br> ,  {$users[2]->activities['home']} </td>";
echo "</tr>";
}
// $needle ='m';
// foreach($users as $property => $gender) {
//     if($needle == $gender) {
//   echo "Male";
// }else {
// echo "Female";
// }
// }
?>
           </table>
               </div>
            </div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>