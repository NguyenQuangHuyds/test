<html>
   
   <head>
      <title>Kiểm tra số nguyên tố trong PHP</title>
   </head>
   <body>
   		<h2>KIỂM TRA SNT</h2>
   		<label>Nhập số nguyên</label>
   		<form action="" method="post">
			<input type="number" name="so_tu_nhien" id="so_tu_nhien" value="">
			<button type="submit" name="gui">Kiểm tra</button>
		</form>
       <?php
       	if(isset($_POST['gui'])){
			$a = kiem_tra_so_nguyen_to($_POST['so_tu_nhien']);
			if ($a==0)
			{
			  echo 'Đây không phải là số nguyên tố'."<br>"; 
			} 
			else
			{
			  echo 'Đây là số nguyên tố'."<br>";
			}
				
		}
		
        function kiem_tra_so_nguyen_to($n)  
		{  
		 for($x = 2; $x < $n; $x++)  
		   {  
			  if($n % $x ==0)  
				{  
				  return 0;  
				}  
		   }  
		  return 1;  
		}  
		
       ?>
       
   </body>
</html>