<?php

$db= mysqli_connect('localhost','root','','test 1' );
if ($db==false){
    echo "connection erorr";
}

if ($_SERVER['REQUEST_METHOD'] === "POST"){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=(int)$_POST['age'];


$query="INSERT INTO user ( fname, lname, age) VALUES ('$fname', '$lname',$age)";
$result = $db->query($query);
if ( $result == false ){
    echo "query must be uncorrected";
    echo $db->error;
    echo $query;
}
echo "user has been added";
}




