<html>
<body>
<?php
class Calculator {
  function sum($x, $y) {
  	return $x + $y;
  }
  function sub($x, $y) {
  	return $x - $y;
  }
  function mult($x, $y) {
  	return $x * $y;
  }
  function div($x, $y) {
  	return $x / $y;
  }
}
$calculator= new Calculator;
echo $calculator->$_GET["result"]."($_GET["x"],$_GET["x"])";

?>
</body>
</html>
