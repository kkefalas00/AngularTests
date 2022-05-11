<?php

$conn=mysqli_connect("localhost","root","","bank_db");

$sql="select * from users";
$q=mysqli_query($conn,$sql);

	while($r=mysqli_fetch_assoc($q))
	{
		$J[]=$r;
	}
echo json_encode($J);

?>