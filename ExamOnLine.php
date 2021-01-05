
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br />
        <center>
            <h2 class="alert alert-success"> Welcome :
                <?php echo( $_SESSION["sname"]); ?>
            </h2>

            <form method="post">
                <input type="submit" formnovalidate value="Exit From Exam" name="btnexit" class="btn btn-danger" />
        </center>
        <?php
            if(!isset($_SESSION["sname"]))
                header("Location:StartExam.php");

            if(isset($_POST["btnexit"]))
            {
                session_destroy();
                header("Location:StartExam.php");
            }

            $questions=array(
                array("To Declare Variable Using ? ","%","*","@","$"),
                array("To Dublicate Code Using ? ","Loop","For","If","Switch"),
                array("To Put Conditions  Using ? ","While","Switch","Array","$"),
                array("To Get Value from Array Using ? ","Positions","index","Count","Length"),
                array("To Set Method To Set data into Form  Using ? ","Get","Set","Method","Setter")
            );
            $model=array("$","For","Switch","index","Method"); 
            
            
           
          
            if(!isset($_SESSION["qno"])){  
                $x=0;

                echo("<br/>".$questions[$x][0]);
                
                for($z=1;$z<=4;$z++){
                   
                 echo("<br/><input type='radio' name='rdanswer' required  value='{$questions[$x][$z]}'/> {$questions[$x][$z]}");
                }
                echo("<br> <center><input type='submit' name='btnprev' class='btn btn-primary' value='Previouse Questions'/>");
                echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfin' class='btn btn-danger' value='Finish Exam'/>");
                echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnnext' class='btn btn-warning' value='Next Questions'/></center>");
                // $x++;
                $_SESSION["qno"]=$x;
               // $_SESSION["correct"]=0;
               // $_SESSION["incorrect"]=0;
            }


            if(isset($_POST["btnnext"]))

            {  
                
                $x=$_SESSION["qno"];

                $sanswer=$_POST["rdanswer"];

               
               
                
                if(isset($_SESSION["answers"])){
                    $answers=$_SESSION["answers"];
                }
                else{
                    $answers=array();
                }
               
                $answers[$_SESSION["qno"]]=$sanswer;
               
                $_SESSION["answers"]=$answers;

                if($_SESSION["qno"]<4)
                {
                   

                   
                    

                    $x++;

                           
                    echo("<br/>".$questions[$x][0]);
                
                   
                    for($z=1;$z<=4;$z++){
                           
                     $checked=null;
                     if(isset($_SESSION["answers"]))
                     {
                       $getAns=$_SESSION["answers"];
                        
                     if(isset($getAns[$x])){
                       
                     if ($getAns[$x]== $questions[$x][$z]){
                      $checked = "checked";
                     }
                    }
 
                  }
                     echo("<br/><input type='radio' name='rdanswer'$checked required value='{$questions[$x][$z]}'/> {$questions[$x][$z]}");
                 }

                 echo("<br> <center><input type='submit' name='btnprev' class='btn btn-primary' value='Previouse Questions'/>");
                 echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfin' class='btn btn-danger' value='Finish Exam'/>");
                 echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnnext' class='btn btn-warning' value='Next Questions'/></center>"); 
                 
                
                 $_SESSION["qno"]=$x;

                }
                else
                {
                    echo("<br/><div class='alert alert-warning'> This Last Question </div>");
                    echo("<br> <center><input type='submit' name='btnprev' class='btn btn-primary' value='Previouse Questions'/>");
                    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfin' class='btn btn-danger' value='Finish Exam'/>");
                }
            }
            if(isset($_POST["btnprev"]))
            {    
                $x= $_SESSION["qno"];  
                $sanswer=$_POST["rdanswer"];
               
                if(isset($_SESSION["answers"])){
                   $answers=$_SESSION["answers"];
               }
               else{
                   $answers=array();
               }
              
               $answers[$_SESSION["qno"]]=$sanswer;
              
               $_SESSION["answers"]=$answers;

                if($_SESSION["qno"]>0)
                {


               
                $x--;
                echo("<br/>".$questions[$x][0]);
               
                for($z=1;$z<=4;$z++){
                    $checked=null;
                    if(isset($_SESSION["answers"]))
                    {
                      $getAns=$_SESSION["answers"];
                     
                    if(isset($getAns[$x])){
                    if ($getAns[$x]== $questions[$x][$z]){
                     $checked = "checked";
                    }
                   }

                 }

                 echo("<br/><input type='radio' name='rdanswer' $checked value='{$questions[$x][$z]}'/> {$questions[$x][$z]}");
               }
                echo("<br> <center><input type='submit' name='btnprev' class='btn btn-primary' value='Previouse Questions'/>");
                echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnfin' class='btn btn-danger' value='Finish Exam'/>");
                echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnnext' class='btn btn-warning' value='Next Questions'/></center>"); 
                
                $_SESSION["qno"]=$x;
               
             }
            else
                {
                    echo("<br/><div class='alert alert-warning'> This First Question </div>");
                    echo("&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='btnnext' class='btn btn-warning' value='Next Questions'/></center>"); 
                }
             
            }
            if(isset($_POST["btnfin"]))
            { 
                $correct=0;
                $incorrect=0;
                $getAns=$_SESSION["answers"];
               
                for($n=0;$n<count($questions);$n++){
               
                    if($model[$n]==$getAns[$n]){
                   
                    $correct++;
                    }
                    else{
                      
                     $incorrect++;
                    }
                }
               
                $d=null;
                if($correct>$incorrect)
                {
                   $d="Success";
                }
                else{
                    $d="Danger";
                }

                echo("<br/><div class='alert alert-{$d}'> 
                    The No Of Correct Answers Is : {$correct} <br/>
                    The No Of InCorrect Answers Is : {$incorrect} <br/>
                </div>");
                
                echo("<br/><table class='table table-border table-striped'>");
                echo("<tr><th>.NO</th><th>Question</th><th>Student Answer</th><th>Model Answer</th><th>Grade(T/f)</th>");
                for($n=0;$n<count($questions);$n++){
               
                if($model[$n]==$getAns[$n]){
                $diff="T";
               
                }
                else{
                    $diff="F" ;
                  

                }
                
                echo("<tr><td>$n</td><td>".$questions[$n][0]."</td><td>$getAns[$n]</td><td>$model[$n]</td><td>$diff</td></tr>");
                }
                echo("</table>");
            }
            ?>
        </form>

    </div>
</body>

</html>



























