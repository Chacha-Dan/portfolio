<?php
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into Register(fullname, password, emaail, number)
    valuels(?,?,?,?)");
    $stmt->bind_param("sssi",$fullname,$password,$email,$number);
    $stmt->execute();
    echo"registration successfully...";
    $stmt ->close();
    $conn->close()
}
?>



//

session_start();
include"dbconnect.php";
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
if(empty(Suname)){
    header("Location :index.php?error=User Name is required!");
    exit;
}
else if(empty($pwd)){
    header("Location :index.php?error=Fill in your password.");
    exit();
}
$sql="insert into users values('$uname','$pwd')";
if($conn->quert($sql)===true){
    echo"new recirds inserted";
}
else {
    echo"Error";
}
$conn->close();
?>