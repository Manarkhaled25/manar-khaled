<?php
include "layout/header.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
     $QU1 = $_POST['QU1'];
     $QU2 = $_POST['QU2'];
     $QU3 = $_POST['QU3'];
     $QU4 = $_POST['QU4'];
     $QU5 = $_POST['QU5'];
     $errors = [];
     if(empty($_POST['QU1'])){
         $errors['QU1-required'] = '<div class="text-success  text-center font-weight-bold" > Answer the question </div>';
     }elseif(empty($_POST['QU2'])){
          $errors['QU2-required'] = '<div class="text-success  text-center font-weight-bold" > Answer the question </div>';
      }elseif(empty($_POST['QU3'])){
          $errors['QU4-required'] = '<div class="text-success  text-center font-weight-bold" > Answer the question </div>';
      }else{
          $errors['QU5-required'] = '<div class="text-success  text-center font-weight-bold" > Answer the question </div>';
      }
     if(empty($errors)){
     $QU1 = $_POST['QU1'];
     $QU2 = $_POST['QU2'];
     $QU3 = $_POST['QU3'];
     $QU4 = $_POST['QU4'];
     $QU5 = $_POST['QU5'];
         header('location:result.php');
     }
}
   ?>
   <form action="result.php" method="post">
<table class="text-center m-5  table table-bordered border border-success col-7">
  <thead>
    <tr>
      <th>Question</th>
      <th>bad</th>
      <th>good</th>
      <th>v good</th>
      <th>Excellent</th>

    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
      <td name='QU1'>Are you satisfied with the level of cleanliness?</td>
      <td>
     <div  name="bad"class="radio">
          <label><input type="radio" value="bad" name="optradio1"  <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'bad')) ? 'checked' : '' ?> ></label>
     </div>
     </td>
     <td>
     <div name="good" class="radio">
          <label><input type="radio" value="good" name="optradio1"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'good')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="verygood" class="radio">
          <label><input type="radio" value="verygood" name="optradio1"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'verygood')) ? 'checked' : ''?>> </label>
     </div>
     </td>
     <td>
     <div name="excellent" class="radio">
          <label> <input type="radio" value="excellent" name="optradio1" <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'excellent')) ? 'checked' : '' ?> ></label>
     </div> 
     </td>
    </tr>
    <tr>
      <td name='QU2'>Are you satisfied with the service prices?</td>
      <td>
     <div  name="bad"class="radio">
          <label><input type="radio" value="bad" name="optradio2"  <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'bad')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="good" class="radio">
          <label><input type="radio" value="good" name="optradio2"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'good')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="verygood" class="radio">
          <label><input type="radio" value="verygood" name="optradio2"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'verygood')) ? 'checked' : ''?>> </label>
     </div>
     </td>
     <td>
     <div name="excellent" class="radio">
          <label> <input type="radio" value="excellent" name="optradio2" <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'excellent')) ? 'checked' : '' ?> ></label>
     </div> 
     </td>
    </tr>
    <tr class="table-success">
      <td name='QU3'>Are you satisfied with the nursing service? </td>
      <td>
     <div  name="bad"class="radio">
          <label><input type="radio" value="bad" name="optradio3"  <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'bad')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="good" class="radio">
          <label><input type="radio" value="good" name="optradio3"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'good')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="verygood" class="radio">
          <label><input type="radio" value="verygood" name="optradio3"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'verygood')) ? 'checked' : ''?>> </label>
     </div>
     </td>
     <td>
     <div name="excellent" class="radio">
          <label> <input type="radio" value="excellent" name="optradio3" <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'excellent')) ? 'checked' : '' ?> ></label>
     </div> 
     </td>
    </tr>
    <tr>
      <td name='QU4'>Are you satisfied with the level of the doctor?</td>
      <td>
     <div  name="bad"class="radio">
          <label><input type="radio" value="bad" name="optradio4"  <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'bad')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="good" class="radio">
          <label><input type="radio" value="good" name="optradio4"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'good')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="verygood" class="radio">
          <label><input type="radio" value="verygood" name="optradio4"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'verygood')) ? 'checked' : ''?>> </label>
     </div>
     </td>
     <td>
     <div name="excellent" class="radio">
          <label> <input type="radio" value="excellent" name="optradio4" <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'excellent')) ? 'checked' : '' ?> ></label>
     </div> 
     </td>
    </tr>
    <tr class="table-success">
      <td name='QU5'>Are you satisfied with the calmness in the hospital?</td>
      <td>
     <div  name="bad"class="radio">
          <label><input type="radio" value="bad" name="optradio5"  <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'bad')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="good" class="radio">
          <label><input type="radio" value="good" name="optradio5"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'good')) ? 'checked' : '' ?>  ></label>
     </div>
     </td>
     <td>
     <div name="verygood" class="radio">
          <label><input type="radio" value="verygood" name="optradio5"<?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'verygood')) ? 'checked' : ''?>> </label>
     </div>
     </td>
     <td>
     <div name="excellent" class="radio">
          <label> <input type="radio" value="excellent" name="optradio5" <?= (isset($_POST['QU1']) && ($_POST['QU1'] == 'excellent')) ? 'checked' : '' ?> ></label>
     </div> 
     </td>
    </tr>
  </tbody>
</table>
<button type="submit" name="Result"class="text-center bg-success btn btn-success col-7 mx-5 my-2">Result </button>
</form>
<?php 
include "layout/footerscript.php";
?>  