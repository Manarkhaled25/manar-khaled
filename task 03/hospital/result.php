<?php
include "layout/header.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $optradio1 = $_POST['optradio1'];
    $optradio2 = $_POST['optradio2'];
    $optradio3 = $_POST['optradio3'];
    $optradio4 = $_POST['optradio4'];
    $optradio5 = $_POST['optradio5'];
    $total = '';
    switch ($optradio1) {
        case "bad":
           $total = 0;
            break;
        case "good":
            $total = 3;
            break;
        case "verygood":
            $total = 5;
            break;
            default :
            $total = 10;
    } 
    switch ($optradio2) {
        case "bad":
           $total += 0;
            break;
        case "good":
            $total += 3;
            break;
        case "verygood":
            $total += 5;
            break;
            default :
            $total +=10;
    } 
    switch ($optradio3) {
        case "bad":
           $total += 0;
            break;
        case "good":
            $total += 3;
            break;
        case "verygood":
            $total += 5;
            break;
            default :
            $total += 10;
    } 
    switch ($optradio4) {
        case "bad":
           $total += 0;
            break;
        case "good":
            $total += 3;
            break;
        case "verygood":
            $total += 5;
            break;
            default :
            $total +=10;
    } 
    switch ($optradio5) {
        case "bad":
           $total += 0;
            break;
        case "good":
            $total += 3;
            break;
        case "verygood":
            $total += 5;
            break;
            default :
            $total += 10;
    } 

} 

if($total <= 25){
     $message =" We will call you later on this  phone " . '$PhoneNumber';
}else{
     $message ="Thanks ";

}
?>
<div class="container">
        <div class="row">
            <div class="col-12 text-center text-success mt-5 ">
                <h4 >Result</h4>
            </div>
            <div class="col-12 offset-3  mt-5">
<form>
<table class="text-center m-5 table table-bordered border border-success col-7">
   <thead>
    <tr>
      <th>Question</th>
      <th>Answers</th>
    </tr>
   </thead>
   <tbody>
  <tr class="table-success">
  <td name='QU1'>Are you satisfied with the level of cleanliness?</td>
  <td><?=$_POST['optradio1']??'';?></td>
 </tr>
 <tr>
 <td name='QU2'>Are you satisfied with the service prices?</td>
 <td><?=$_POST['optradio2']??'';?></td>
 </tr>
 <tr  class="table-success">
 <td name='QU3'>Are you satisfied with the nursing service? </td>
 <td><?=$_POST['optradio3']??'';?></td>
 </tr>
 <tr>
 <td name='QU4'>Are you satisfied with the level of the doctor?</td>
 <td><?=$_POST['optradio4']??'';?></td>
 </tr>
 <tr  class="table-success">
 <td name='QU5'>Are you satisfied with the calmness in the hospital?</td>
 <td><?=$_POST['optradio5']??'';?></td>
 </tr>
   </tbody>
 </table>
 <div class="col-8 bg-success text-center ">
               <?php 
            if(isset( $message ))
            echo $message
            ?>
               </div>
</form>
</div>
            </div>
        </div>

<?php 
include "layout/footerscript.php";
?>  