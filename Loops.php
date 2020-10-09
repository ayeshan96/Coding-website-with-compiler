
<html>
    <head>
        <title>Loops</title>
        <link rel="stylesheet" type="text/css" href="Loops.css">
        <script  type="text/javascript">
            
             
             function GoToCompiler(){
                 window.location.href="http://192.168.43.136:80/Compiler/home.php?send=<?php echo $_GET['send']; ?>";
             }
             </script>
        
    </head>
    <body>
        
    
        <div id="strip">
            <h1 >Loops </h1>
          
            
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
           Think you want to looping something, some condition for some times you can use looping statesments.
        </div>
        <div class="para2">
            There are different ways to looping something. Like,
            <ul>
                <li>while loops</li>
                <li>for loops</li>
                <li>do...while loops</li>
            </ul>
        </div>
        
        <div class="para4">
            Watch the following video to grab more knowledge. And you can practice doing some problems which we are already provided.
        </div>
        <video class="tutorial" src="Resources\Loops.mp4" width="1280" type="video/mp4" controls></video>
        <button class = "TryNow" onclick="GoToCompiler()">Try Now</button>
    </body>
</html>

