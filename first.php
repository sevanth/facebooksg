<?php
$user =filter_input(INPUT_POST,'user');
$pass =filter_input(INPUT_POST,'pass');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="testdb";

$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error() ){
    die('Connect Error ('. mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
$sql="INSERT INTO data1 (username,password) values ('$user','$pass')";
if($conn->query($sql)){
    echo "<h1>Validation Successful</h1>";

}
else{
    echo "error :".$sql ."<br>" . $conn->error;
}
$conn->close();
}
?>
