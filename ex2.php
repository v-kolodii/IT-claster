﻿<?php
$a = (int)$_GET["a"];
$b = (int)$_GET["b"];
$c = (int)$_GET["c"];
 //з розрахунком що числа можуть бути івні:
if ($a==$b && $b==$c){
	echo "<p>Всі числа рівні!";
}elseif ($a<=$b&&$b<$c){
	echo "<p>Найменшим числом є: $a</p>";
}elseif ($b<$a&&$a<=$c){
	echo "<p>Найменшим числом є: $b</p>";
}else{
	echo "<p>Найменшим числом є: $c</p>";
}
echo "<p><a href='index.html'>Повернутись на головну</a>";
?>