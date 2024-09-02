<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql=" delete from form where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo "data deleted";
        header('location:display.php');
    }else{
        die(mysqli-error($con));
    }
}
?>