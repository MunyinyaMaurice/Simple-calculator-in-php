
<?php
// echo "\n calculator";
// echo "\n__________";
$error ="";
$x="";
$y="";
if (isset($_GET['operation'])){
    $x=$_GET['num1'];
    $y=$_GET['num2'];
    $op=$_GET['operation'];
    
    if(is_numeric($x) && is_numeric($y) ){
    
        switch($op){
            case 'add': $result = $x + $y;
                break;
            case 'sub': $result = $x - $y;
                break;
            case 'pro': $result = $x * $y;
                break;
           
        
            case 'div':
                if($y != 0){
                    $result = $x / $y;
            
                }else{
                    $error ="can not divid with zero";
                    
                }
                break;
        }
    }else{
    $error =" Enter numeric values only!";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>php</title>
</head>
<body>
<h1> <?= $error ?></h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
<div>
    <label for="num1" >number 1</label>
   <input type="number" name="num1" id="num1" value="<?= $x?>">
</div>

<div>
    <label for="num2" >number 2</label>
   <input type="number" name="num2" id="num2" value="<?= $y?>">
</div>

<div>
    <label for="result" >Resulter</label>
   <input type="number" name="result" id="result" value="<?= $result?>" disable>
</div>
<div>
    <input type="submit" value="add" name="operation">
    <input type="submit" value="sub" name="operation">
    <input type="submit" value="pro" name="operation">
    <input type="submit" value="div" name="operation">
</div>
</form>
</body>
</html>