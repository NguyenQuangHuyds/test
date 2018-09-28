<!DOCTYPE html>
<html>
<head>
  <?php
  require 'data.php';
  ?>

</head>

<body>
  <table>
    <tr>
      <tr>
       <th>---ID----</th>     
       <th>----Name-----</th>   
       <th>------Gmail-------</th> 
       <th>------yahoo-------</th>
     </tr>
     <?php for ($i=0;$i<5;$i++): ?>
      <tr>

        <td><?php echo $users[$i]['id']; ?> </td>
        <td><?php echo $users[$i]['name']; ?></td>
        <td><?php echo $users[$i]['email']['gmail']; ?></td>
        <td><?php echo $users[$i]['email']['yahoo']; ?></td>
      </tr>
    <?php endfor; ?>
  </tr>
</table>
<br>
<form>
  Name <input type="txt" name='name'/>
  <input type="submit" value="Tìm kiếm"/>
</form>
<?php if (empty($_GET['name'])) 

{
  echo "ban can nhap gia tri";
}
else
{
  for ($i=0; $i < 5 ; $i++) 
  { 
    if($users[$i]['name']== $_GET['name'] )
    {
      echo $users[$i]['id'];
      echo $users[$i]['name'];
      echo $users[$i]['email']['gmail'];
      echo $users[$i]['email']['yahoo'];
    }
  }
}
?>
</body>
</html>
