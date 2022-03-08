<?php
    if($_SESSION['auth']){
        if(!empty($_POST['header']) and !empty($_POST['description'])){
           $connect = mysqli_connect('localhost','root','','phptest');
           $header = $_POST['header'];
           $description = $_POST['description'];
           $query = "insert into property set header='$header', description='$description'";
           $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
           if($result){
               header('Location: property');
           }
        }
    }
?>
<div class="form-container">
<form method="POST">
    <input type="text" name="header" placeholder='Заголовок'>
    <textarea name="description" cols="30" rows="10" placeholder='Описание '></textarea>
    <input type="submit" value="Разместить">
</form>
</div>