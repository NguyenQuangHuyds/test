<!DOCTYPE html>
<html>
<head>
	<title>kiem tra so hoan hao php</title>
</head>
<body>
	<?php
	function kiem_tra_so_hoan_hao($n)  
	{  
		for($i=1;$i<$n;$i++)
		{
			if($n%$i==0)
			{
				$s+=$i;
			}

		}
	}
	$n = kiem_tra_so_hoan_hao(71);  
	if($s==$n&&$s!=0)
	{
		echo 'la so hoan hao'."<br>";

	}
	else
	{
		echo 'khong phai so hoan hao'."<br>";
	}
	return 0;
	?>
	</body>
	</html>