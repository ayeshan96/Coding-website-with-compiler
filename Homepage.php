
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="Homepage.css">
        <script  type="text/javascript">
      
        function getImagePath(){
            return "Resources/Login.jpg";
        }
        
        document.onload = function(){
            document.getElementById('proIM').src=getImagePath();
        }
       
        

        </script>
        <style>
            #fileToUpload:hover{
                opacity:0.3;
            }
            #fileToUpload{
                opacity:0.0;
            }

            #submitbtn:hover{
                opacity:0.3;
            }
            #submitbtn{
                opacity:0.0;
            }
            #AcievementBox{
                
                width: 1000px;
                border: 15px solid green;
                padding: 50px;
                margin: 20px;
                position: absolute;
                top:300px;
                left: 200px;
            }
            .Logout{
            background-color: #336600;
            color: white;
            padding: 16px;
             font-size: 16px;
             position: relative;
             top:-200px;
                border: none;
            }
           
        </style>
    </head>
    <body>
        
    <?php
    $send=$_GET['send'];
    ?>
    
    <div id="strip">
            <h1 >Welcome 
                <?php
                session_start();
                $con=mysqli_connect('localhost','root',NULL);
                mysqli_select_db($con,'execute');
                
                $s="SELECT * FROM `infotable` WHERE id='$send'";
                $row=mysqli_fetch_array(mysqli_query($con,$s));
                echo $row['firstname']." ".$row['lastname'];
                ?>
            </h1>
            
            <div class="profilepic" align="right" ><img id="proIM" src=<?php
            mysqli_select_db($con,'execute');
            $s="SELECT * FROM `imgtable` WHERE id='$send'";
            $row=mysqli_fetch_array(mysqli_query($con,$s));
            echo $row['url'];
            ?> alt="unknown.jpg" >
            
         
          
          <form action="upload.php?id=<?php echo $send;?>" method="post" enctype="multipart/form-data">
        
       

       
        
        <input type="file" name="fileToUpload" id="fileToUpload"  >
        <input type="submit" value="Upload Image" name="submit" id="submitbtn">

       
        
        </form>
          
          </div>
            
          <div class="dropdown">
                <button class="dropbtn">Practice</button>
                <div class="dropdown-content">
                    <a href="http://192.168.43.136:80/test/HelloWorld.php?send=<?php echo $send ?>">Hello World..!</a>
                    <a href="http://192.168.43.136:80/test/ConditionalStatements.php?send=<?php echo $send ?>">Conditional statements</a>
                    <a href="http://192.168.43.136:80/test/Loops.php?send=<?php echo $send ?>">Loops</a>
                    <a href="http://192.168.43.136:80/test/Variables.php?send=<?php echo $send ?>">Variables and User inputs</a>
                 </div>
                </div>
                <button class="Compete" onclick="window.location.href = 'http://192.168.43.136:80/Compiler/home.php?send=<?php echo $send ?>';">Compete</button>
                <button class="LeaderBoard" onclick="window.location.href = 'http://192.168.43.136:80/test/Leaderboard.php?send=<?php echo $send ?>';">LeaderBoard</button>
                <button class="Logout" onclick="window.location.href = 'http://192.168.43.136:80/test/Logout.php'">Log Out</button>
        </div>
        
        
        
        <?php     
            $temScore=0;   
            $con=mysqli_connect('localhost','root',NULL);
            if(!$con){
    
                echo "Couldnt find the server";

             }
             else{
                mysqli_select_db($con,'execute');
                $s="select * from infotable where id='$send'";
                $result=mysqli_query($con,$s);
                if (mysqli_num_rows($result) > 0) {
					
                 while($row = mysqli_fetch_assoc($result)) {
                    $temScore=$row["score"];
                    echo "<div id='AcievementBox'>";
                    if($temScore>=10){
                        echo "<img src='http://192.168.43.136:80/test/Resources/L1W.png' alt='Achievement'>";
                    }
                    else{
                        echo "<img src='http://192.168.43.136:80/test/Resources/L1L.png' alt='Achievement'>";
                    }
                    if($temScore>=20){
                        echo "<img src='http://192.168.43.136:80/test/Resources/L2W.png' alt='Achievement'>";
                    }
                    else{
                        echo "<img src='http://192.168.43.136:80/test/Resources/L2L.png' alt='Achievement'>";
                    }
                    if($temScore>=30){
                        echo "<img src='http://192.168.43.136:80/test/Resources/L3W.png' alt='Achievement'>";
                    }
                    else{
                        echo "<img src='http://192.168.43.136:80/test/Resources/L3L.png' alt='Achievement'>";
                    }
                    echo "</div>";
                   
                }
                } 
                else {
                echo "0 results";
                }
           
            }
        ?>
        
    </body>
</html>

