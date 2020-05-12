<?php
    function add($x, $y) {
	   return ($x + $y);
	}
	 function sub($x, $y) {
	   return ($x - $y);
	}
	 function mult($x, $y) {
	   return ($x * $y);
	}
	 function div($x, $y) {
		 if ($y == 0) return false;
	   return ($x / $y);
	}
	 function factorial($x) {
	   if ($x < 0) return false;
	   if ($x == 0) return 1;
	   $f = 1;
	   for ($i = 1; $i <= $x; $i++) {
		   $f *= $i;
	   }
	   return $f;
	}
	function run($x, $y){
	$d = 0;
     if($y == 0) echo "Fuck";
	 for($i = $x; $i <= $y; $i++){
	   $d += $i;
	 }
	 return $d;
	 }
	 
	 function middle($x, $y) {
	   $w = 0;
	   $z = 0;
	   if($x == 0 || $y == 0) return "Fuck you";
	   else {
	     $w = $x + $y;
		 $z = $w / 2;
      return $z;		 
	   }
	 }
	
?>