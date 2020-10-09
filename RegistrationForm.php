<html>
<head><title>Fill in Your details</title>
<link type ="text/css" rel ="stylesheet" href="RegistrationForm.css"></style>

</head>


<body>
    <?php 
    if(isset($_GET['id1'])){
        $err1 = $_GET['id1'];
    }
    if(isset($_GET['id2'])){
        $err2 = $_GET['id2'];
    }
    if(isset($_GET['id3'])){
        $err3 = $_GET['id3'];
    }
    if(isset($_GET['id4'])){
        $err4 = $_GET['id4'];
    }
    if(isset($_GET['msg'])){
        $errmsg = $_GET['msg'];
    }
    
    ?>
    
    
    <label id="L1">Fill Your Info</label>
<div id="FillForm">
    <form action="http://192.168.43.136:80/test/Validate.php" method="get">
    <label id="fname">First&nbsp;Name &nbsp; </label>
    <input type="text" name="Fname" class="form-control" required id="InputBoxe1"><br><br>
    <label id="lname">Last Name  &nbsp;</label>
    <input type="text" name="Lname" class="form-control" required id="InputBoxe2"><br><br>
    <label id="uname">User ID    
    <label id="err"><?php
    if(isset($err3)){
        echo $err3;
    }?></label> </label>
    <input type="text" name="Uname" class="form-control" required id="InputBoxe3"><br><br>
    <label id="passw1">Password  &nbsp;<label id="err"> <?php
    if(isset($err1)){
        echo $err1;
    }?></label>
       </label>
    <input type="password" name="p1" class="form-control" required id="InputBoxe4"><br><br>
    <label id="passw2">Re Enter password&nbsp;&nbsp;  </label>
    <input type="password" name="p2" class="form-control" required id="InputBoxe5"><br><br>
    <label id="email" >Email &nbsp;<label id="err"><?php
    if(isset($err2)){
        echo $err2;
    }?></label>
         </label>
    <input type="text" name="Email" class="form-control" required id="InputBoxe6"><br><br>
    <input type="submit" id="submitbtn">
    </form>

</div>

    
</body>

</html>