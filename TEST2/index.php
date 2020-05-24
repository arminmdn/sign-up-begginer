<?php
$db= mysqli_connect('localhost','root','','test 1');
if($db==false){
    echo "connction error";
}
$db->query("SET NAMES 'utf8'");
$result= $db->query("SELECT * FROM user ");
if ($result==false){
    echo "erorr in query";
    exit;
}
$users=$result->fetch_all(MYSQLI_ASSOC );
foreach ($users as $user){
    echo "$user[Name] $user[Family] <a href='update.php?id='>update</a>  <br> ";

}
