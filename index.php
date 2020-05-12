<?php
  if (isset($_POST["calc"])) {
  require_once "lib/function.php";
  $n_1 = $_POST["n_1"];
  $n_2 = $_POST["n_2"];
  $operation = $_POST["operation"];
  switch ($operation) {
	   case "add":
	       $result = "$n_1 + $n_2 = ".add($n_1, $n_2);
		   break;
	   case "sub":
	       $result = "$n_1 - $n_2 = ".sub($n_1, $n_2);
		   break;
        case "mult":
	       $result = "$n_1 * $n_2 = ".mult($n_1, $n_2);
		   break;
       	case "div":{
			$result = div($n_1, $n_2);
		   if ($result === false) $result = "Деление на ноль !";
		   else $result = "$n_1 / $n_2 = $result";
		   break;
		}
		case "fact":{
			$result = factorial($n_1);
		   if ($result === false) $result = "Факториала не существует";
		   else $result = "$n_1! = $result";
		   break;
		}
       	case "run":{
			$result = run($n_1, $n_2);
		   if ($result === false) $result = "ERROR";
		   else $result = "$n_1 +> $n_2 = $result";
		   break;
		}
       	case "middle":{
			$result = middle($n_1, $n_2);
		   if ($result === false) $result = "ERROR";
		   else $result = "$n_1 |/| $n_2 = $result";
		   break;
		}		
		
     default:
		  $result = "Неизвестная операция";
  }
  }
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Калькулятор</title>
   <link rel="stylesheet" href="styles/main.css" type="text/css" />
</head>
<body>
<?php
   if (isset($result)) echo "<p>Результат:  $result</p>";
?>
   <form name="myform" action="index.php" method="post" >
    <p>
	   <input type="text" name="n_1" value="<?php echo $n_1;?>" class="n1"/>
	   <select name="operation" class="selec">
	       <?php
				$operations = array("add" => "+", "sub" => "-", "mult" => "*", "div" => "/", "fact" => "!","run" => "+>","middle" => "|/|");
		    foreach ($operations as $key => $value){
if ($operation == $key) echo"<option value='$key' selected='selected'>$value</option>";
			       else echo"<option value='$key'>$value</option>";	
			}
		   ?>
	   </select>
	   <input type="text" name="n_2" value="<?php echo $n_2;?>" class="n2"/>
	   <br />
	   <input type="submit" name="calc" value="DISHKAN" class="kn"/>
	</p>
   </form>
</body>
</html>