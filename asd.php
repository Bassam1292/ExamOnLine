
  <?php>
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
<center>
<h2 class="alert alert-success">Welcome :<?php echo ($_SESSION['sname']) ;?></h2>
<form method="POST">
<input type="submit" name="btnExit" value="Exit From Exam" class="btn btn-danger mt-3"/>
</center> 
 <?php
if(!isset($_SESSION['sname'])){
    header("Location:startExam.php");
}
if(isset($_POST['btnExit'])){
    session_destroy();
    header("Location:startExam.php");

$qestions=array(
    Array("To declare varaible using ?","%","*","@","$"),
    Array("To Dublcate Code using ?","loop","For","if","Switch"),
    Array("To put acondition using ?","array","while","Switch","$"),
    Array("To get value from array using ?","position","index","count","length"),
    Array("To set method to set dat into from ussing ?","get","set","method","setter"),
);
$model=array("$","for","switch","index","method");
if(!isset($_SESSION['qno'])){
   $x=0; 
   echo("<br/>".$qestions[$x][0]);

for($z=1;$z<=4;$z++){
    echo("<br/><input type='radio' name='danswer' required value='".$qestions[$x][$z]."'/>{$qestions[$x][$z]}");
}
echo("<br> <center><input type='submit' name='btnNext'class='btn btn-primary' value='Next'</center>");
echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnPrevious' class='btn btn-danger' value='Previous'</center>");
echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfnsh'class='btn btn-warning' value='Finsh'");
 $x++;
 $_SESSION['qno']=$x;
 $_SESSION['correct']=0;
$_SESSION['incorrect']=0;
}

if(isset($_POST["btnNext"])){
    $ans =$_POST["danswer"];
    if($ans==$model[$_SESSION["qno"]-1]){
        $_SESSION["correct"]++;
    }else{
        $_SESSION["incorrect"]++;
    }
    if($_SESSION["qno"]<5){
    $x=$_SESSION["qno"];
    echo("<br/>".$qestions[$x][0]);
    for($z=1;$z<=4;$z++){
        echo("<br><input type='radio' name='danswer' value='{$qestions[$x][$z]}'/</center>{$qestions[$x][$z]}");
    }
    echo("<br> <center><input type='submit' name='btnNext'class='btn btn-primary' value='Next'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnPre' class='btn btn-danger' value='Previous'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfnsh'class='btn btn-warning' value='Finsh'");
   $x++;
    $_SESSION["qno"]=$x;  
   
}else{
    echo("<br/><div class='alert alert-warning'> This Last Qestion</div>");
    echo("<center>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnPre' class='btn btn-danger' value='Previous'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfnsh'class='btn btn-warning' value='Finsh'");
}
}
if(isset($_POST['btnPre'])){
    if($_SESSION['qno']>0){
    $x = $_SESSION['qno'];
    $x--;
    echo("<br/>".$qestions[$x][0]);
    for($z=1;$z<=4;$z++){
        echo("<br><input type='radio' name='danswer'  value='{$qestions[$x][$z]}'/</center>{$qestions[$x][$z]}");
    }
    echo("<br> <center><input type='submit' name='btnNext'class='btn btn-primary' value='Next'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnPre' class='btn btn-danger' value='Previous'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfnsh'class='btn btn-warning' value='Finsh'");

    $_SESSION['qno']=$x;  
}else{
    echo("<br/><div class='alert alert-warning'>This is The First Qestion</div>");
    echo("<br> <center><input type='submit' name='btnNext'class='btn btn-primary' value='Next'</center>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfnsh'class='btn btn-warning' value='Finsh'");
}

}
if(isset($_POST["btnfnsh"])){
    $d=null;
if($_SESSION["correct"]>$_SESSION["incorrect"]){
    $d="sucess";
}else{
    $d="Dangers";
}
    echo("<br/><div class='alert alert-{$d}'>
    The No Of Correct Aswer is :{$_SESSION['correct']}<br/>
    The No Of Incorrect Aswer is :{$_SESSION['incorrect']}<br/>
    </div>");
}

?>
</form>
    </div>
</body>
</html>


