<?php
$Errors=array(" "," "," "," "); 
$First=$_GET['Fname'];
$Last=$_GET['Lname'];
$User=$_GET['Uname'];
$Pass1=$_GET['p1'];
$Pass2=$_GET['p2'];
$Email=$_GET['Email'];

if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
    echo "Error Email\n";
    $Errors[1]="*";
}
if($Pass1!=$Pass2){
    echo "Error password\n";
    $Errors[0]="*";
}
session_start();//starrting to store data to a db
$con=mysqli_connect('localhost','root',NULL);//Connecting to a server
if(!$con){
    echo "Couldnt find the server";//Checking the server is accessible or not

}
else{
    mysqli_select_db($con,'execute');
    $s="select * from idtable where username='$User'";
    $r="select * from emailtable where email='$Email'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1){
        $Errors[2]="*";
    }
    if(mysqli_num_rows(mysqli_query($con,$r))==1){
        $Errors[3]="*";

    }
    if($Errors[0]=="*" || $Errors[1]=="*" || $Errors[2]=="*" || $Errors[3]=="*" ){
        header("Location: RegistrationForm.php?id1=$Errors[0] & id2=$Errors[1] & id3=$Errors[2] & id4=$Errors[3] & msg='Recheck '");

    }
    
    else{
        $reg=" insert into idtable(id,username,password) values('null','$User','$Pass1')";
        mysqli_query($con,$reg);
        $reg2=" insert into emailtable(id,email) values('null','$Email')";
        mysqli_query($con,$reg2);
        $scor=0;
        $reg3=" insert into infotable(id,firstname,lastname,score) values('null','$First','$Last','$scor')";
        mysqli_query($con,$reg3);
        $path="Resources/unknown.jpg";
        $reg4=" insert into imgtable(id,url) values('null','$path')";
        mysqli_query($con,$reg4);




        mysqli_select_db($con,'execute');
        $s="SELECT * FROM `idtable` WHERE username='$User'";
        $result=mysqli_query($con,$s);
        $row=mysqli_fetch_array($result);
        $send=$row['id'];
        header("Location: Homepage.php?send=$send");
    }
}
    

    



?>