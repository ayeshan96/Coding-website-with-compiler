
<html>
    <head>
        <title>Variables User Inputs and Mathematical Operators</title>
        <link rel="stylesheet" type="text/css" href="Variables.css">
        <script  type="text/javascript">
            
             
             function GoToCompiler(){
                 window.location.href="http://192.168.43.136:80/Compiler/home.php?send=<?php echo $_GET['send']; ?>";
             }
             </script>
        
    </head>
    <body>
        
    
        <div id="strip">
            <h1 >Variables User Inputs and Mathematical Operators </h1>
          
            
          <div class="dropdown">
                <button class="dropbtn">Practice</button>
                <div class="dropdown-content">
                    <a href="HelloWorld.php?send=<?php echo $_GET['send']; ?>">Hello World...!</a>
                    <a href="Variables.php?send=<?php echo $_GET['send']; ?>">Variables and User inputs</a>
                    <a href="ConditionalStatements.php?send=<?php echo $_GET['send']; ?>">Conditional statements</a>
                    <a href="Loops.php?send=<?php echo $_GET['send']; ?>">Loops</a>
                    
                 </div>
                </div>
                <button class="Compete" onclick="window.location.href = 'http://192.168.43.136:80/Compiler/home.php?send=<?php echo $send ?>';">Compete</button>
                <button class="LeaderBoard" onclick="window.location.href = 'http://192.168.43.136:80/test/Leaderboard.php?send=<?php echo $send ?>';">LeaderBoard</button>
                <button class="Logout" onclick="window.location.href = 'http://192.168.43.136:80/test/Logout.php'">Log Out</button>
            

        </div>
        <div class="para1">
            Creating a variable reserves a memory location, or a space in memory for storing values. The compiler requires that you provide a data type for each variable you declare.
        </div>
        <div class="para2">
            C++ offer a rich assortment of built-in as well as user defined data types.
        </div>
        <div class="para3">
            <b>Integer</b>, a built-in type, represents a whole number value. Define integer using the keyword int. C++ requires that you specify the <b>type</b> and the <b>identifier</b>  for each variable defined. An <b>identifier</b> is a name for a variable, function, class, module, or any other user-defined item. An identifier starts with a letter (A-Z or a-z) or an underscore (_), followed by additional letters, underscores, and digits (0 to 9)
        </div>
        <div class="para4">
            Watch the following video to grab more knowledge. And you can practice doing some problems which we are already provided.
        </div>
        <video class="tutorial" src="Resources\Variables.mp4" width="1280" type="video/mp4" controls></video>
        <button class = "TryNow" onclick="GoToCompiler()">Try Now</button>
    </body>
</html>

