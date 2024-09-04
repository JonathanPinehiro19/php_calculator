<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php

    include_once('functions.php');
   
    $n1 = $_POST['base'];
    $n2 = $_POST['exp'];
    $op = $_POST['operation'];
    

    $base = (int)$n1;
    $exp = (int)$n2;

    switch ($op) {
        case '1':
            ?><div class="container">
            <h1>SOMA</h1>
            <form method="post" action="ex1r.php">               
            <input  type="text" value="<?php echo($n1) ?>">
            <br>
            <h1>+</h1>
            <br>
            <input type="text" value="<?php echo($n2) ?>">
                <br>
                <label for="operation">Resultado:</label>  
                <h1><?php echo(soma($base,$exp)) ?> </h1>
                             
                <br>
                
            </form>
            
            </div>
            <?php
            break;
        case '2':
            ?><div class="container">
            <h1>SUBTRAÇÃO</h1>
            <form method="post" action="ex1r.php">              
            <input  type="text" value="<?php echo($n1) ?>">
            <br>
            <h1>-</h1>
            <br>
            <input type="text" value="<?php echo($n2) ?>">
                <br>
                <label for="operation">Resultado:</label> 
                <h1><?php echo(sub($base,$exp)) ?></h1> 
                
                <br>
                
            </form>
            
            </div>
            <?php
            break;
        case '3':
            ?><div class="container">
            <h1>MULTIPLICAÇÃO</h1>
            <form method="post" action="ex1r.php">              
            <input  type="text" value="<?php echo($n1) ?>">
            <br>
            <h1>X</h1>
            <br>
            <input type="text" value="<?php echo($n2) ?>">
                <br>
                <label for="operation">Resultado:</label>  
                <h1><?php echo(multi($base,$exp)) ?></h1>              
                <br>
                
            </form>
            
            </div>
            <?php
            break;
        case '4':
            ?><div class="container">
            <h1>DIVISÃO</h1>
            <form method="post" action="ex1r.php">                  
            <input  type="text" value="<?php echo($n1) ?>">
            <br>
            <h1>÷</h1>
            <br>
            
            <input type="text" value="<?php echo($n2) ?>">
            <br>
            <label for="operation">Resultado:</label>  
            <h1><?php echo(div($base,$exp)) ?></h1>               
            <br>
                
            </form>
            
            </div>
            <?php
            break;
        case '5':
            ?><div class="container">
            <h1>MÉDIA</h1>
            <form method="post" action="ex1r.php">                
            <input  type="text" value="<?php echo($n1) ?>">
            <br>
            <input type="text" value="<?php echo($n2) ?>">
            <br>
            <label for="operation">Resultado:</label>  
            <h1><?php $m = med($base,$exp);
            echo($m) ?></h1>               
            <br>
                
            </form>
            
            </div>
            <?php
            break;
        case '6':
            ?><div class="container">
            <h1>EXPONENCIAÇÃO</h1>
            <form method="post" action="ex1r.php">              
            <?php
            
            ?>
            <br>
            
            <h1><?php echo($n1) ?><sup><?php echo($n2) ?></sup></h1>
            <br>
            
                <br>
                <label for="operation">Resultado:</label> 
                <h1><?php 
                echo pow($n1, $n2)?></h1> 
                       
                <br>
                
            </form>
            
            </div>
            <?php
            break;
        
        default:
            # code...
            break;
    }
   
?>


</body>

</html>