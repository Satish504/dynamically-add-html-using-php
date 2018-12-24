
<?php

$cser=mysqli_connect("localhost","root","*****","*****");






$query = mysqli_query($cser,"SELECT* FROM example");
			 $number=mysqli_num_rows($query);
			$l=0;
			if($number > 0)
			{
			   while($rows = mysqli_fetch_array($query))
			   {
			  $name[$l] = $rows['stdname'];
			  $clg[$l] = $rows['clgname'];
			  $roll[$l] = $rows['rollno'];
			   $phone[$l] = $rows['phno'];
			    $event[$l] = $rows['event'];  
			  $l++;
			 }
			}
			else
			{
				echo'<script>alert("no data found");</script>';
			}
			 

?>
<html>
<head>
<title>data</title>
</head>

<body>

<h2> data</h2>

<table  border="1">
  <tr>
    <th>name</th>
    <th>college name</th>
    <th>pin number</th>
	<th>phone</th>
	<th>event</th>
    

	
  </tr>
  <?php 
 
				for($i=0;$i<$number;$i++)	
				{					
  echo'<tr><td>'.$name[$i].'</td>
  <td>'.$clg[$i].'</td>
  <td>'.$roll[$i].'</td>
  <td>'.$phone[$i].'</td>
  <td>'.$event[$i].'</td></tr>';
 
			}
  ?>
  
  
			 