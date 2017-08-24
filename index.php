<!DOCTYPE html>
<link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<style>
      body {
        font-family:  'Contrail One', cursive;
        font-size: 14px;
      }
    </style>
<?php 
$root="root";
$server="localhost";
$password="";
$db="alamat";
mysql_connect($server,$root,$password);
mysql_select_db($db);
if(isset($_POST['cari'])) {
	$start=$_POST['start'];
	$end=$_POST['end'];
$b=mysql_query("select * from tes where id between '$start' and '$end'");
	
}else{
$b=mysql_query("select * from tes where id between 1 and 8");
	
}

?>
<form method="post">
<input type="number" name="start">
<input type="number" name="end">
<input type="submit" name="cari">
</form>
<html>
    <head>
        <title>Background Image Goes Wrong</title>
        <style>
   div {
     width: 200px;
     height: 110px;
     border: 1px solid black;
	margin: 0 auto;
   }
   .dua {border-radius: 20px;}
   
</style>
</head>

<button onclick="window.print()">Print</button> 
<body>
<table width="680" border="1" cellpadding="5" cellspacing="0">
<?php
while($hasil=mysql_fetch_array($b)) { ?>

	<tr>
		<td><div class="dua"><p><center><?php echo $hasil['name1'];?></br></br>Di</br></br>Tempat</center></div></td>
		<td><div class="dua"><p><center><?php echo $hasil['name2'];?></br></br>Di</br></br>Tempat</center></div></td>
		<td><div class="dua"><p><center><?php echo $hasil['name3'];?></br></br>Di</br></br>Tempat</center></div></td>
		<td><div class="dua"><p><center><?php echo $hasil['name4'];?></br></br>Di</br></br>Tempat</center></div></td>

	</tr>
<?php } ?>
</table>
</body>


</html>