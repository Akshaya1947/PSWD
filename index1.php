<?php

$con=new mysqli('localhost','root','','sample');
if($con)
{
	echo "Database conneced successfullly";
}
else
{
    die(mysqli_error($con));
}

?>
