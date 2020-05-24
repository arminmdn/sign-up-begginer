<?php

$db= mysqli_connect('localhost','root','','test 1' );
if ($db==false){
    echo "connection erorr";
}

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $id =$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=(int)$_POST['age'];



    $query = "UPDATE `user` SET `fname`='".$fname."',`lname`='".$lname."',`age`= $age WHERE `id` = $id";
    $result = $db->query($query);
    if ( $result == false ){
        echo "query must be uncorrected";
        echo $db->error;
        echo $query;
    }
    echo "user has been added";
}

