<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>funcoes</title>
</head>
<body>
	<?php 
		$n1 = $_POST['base'];
    	$n2 = $_POST['exp'];
    	$base = (int)$n1;
    	$exp = (int)$n2;
    

    	function soma($n1, $n2){
    		return ($n1 + $n2);
    	}
    	function sub($n1, $n2){
    		return ($n1 - $n2);
    	}
    	function multi($n1, $n2){
    		return ($n1 * $n2);
    	}
    	function div($n1, $n2){
    		return ($n1 / $n2);
    	}
		function med($n1, $n2){
			return (($n1 + $n2) / 2);
		}
		function expon($n1, $n2){
		
		}
	?>

</body>
</html>