<?php
$con=new mysqli('localhost', 'root','','crud operation');

if($con){

}else{
    die(mysqli-error($con));
}

?>