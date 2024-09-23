<?php  
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='srms';


$connect=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$connect){
    die(mysqli_error($connect));

}
  


?>