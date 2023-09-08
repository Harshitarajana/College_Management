<?php
$link= mysqli_connect("localhost","root","","cms");
mysqli_select_db($link, "cms");
if(! $link ){
   die('Could not connect: ' . mysqli_error());
}
?>