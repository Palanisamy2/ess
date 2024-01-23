<?php
$con=new mysqli('localhost','root','','trip form');
if $con{
    echo "connection successful";
}
else
{
    die(mysqli_error($con));
}
?>