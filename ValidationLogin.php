<?php
session_start();
$con=mysqli_connect('localhost','root',NULL);
if(!$con){
    echo "Couldnt find the server";

}else{
    #echo "Succesfully connected\n";
    mysqli_select_db($con,'execute');
    $name=$_POST['user'];
    $pass=$_POST['password'];
    #echo $name.$pass;
    $s="SELECT * FROM `idtable` WHERE username='$name' && password='$pass'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        #echo "Login Successful";
        $row=mysqli_fetch_array($result);
        $send=$row['id'];
        header("Location: Homepage.php?send=$send");
    }
    else{
        echo "Login Unsuccessfull";
        header("Location: LoginPage.html");

    }

    
}
?>