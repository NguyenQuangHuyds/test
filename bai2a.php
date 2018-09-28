<!DOCTYPE html>
<html>
<head>
	<title>CT Mang giam dan</title>
</head>
<body>
	<?php

	$numbers = array(3, 1, 2, 5, 4,9,6,8,7);
	rsort($numbers);

	$arrlength = count($numbers);
	for($x = 0; $x < $arrlength; $x++) {
		echo $numbers[$x];
		echo "<br>";
	}
	?>
</body>
</html>