<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <div class="container">
    
    <center><h1>Examination online System _cairo university</h1></center>
    <form method="post">
    Student Name :<br/>
    <input type ="text" name="Textname" class="form-control" placeholder="Student name" required>
    <input type ="submit" name="btnstart" class="btn-danger mt-3" value="Start Exam">
    <?php
if(isset($_POST['btnstart'])){
    $_SESSION['sname']=$_POST['Textname'];
    header("location:ExamOnLine.php");
}
?>
    
       
    </form>
    
    
    </div>
</body>
</html>