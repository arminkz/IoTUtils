<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>WIFI Controlled LED</title>
</head>
       <body>
       <center><b><font size = '20'>Control LED:</b>
         <form method="get" action="">
                 <input type="submit" style = "font-size: 16 pt" value="OFF" name="off">
                 <input type="submit" style = "font-size: 16 pt" value="ON" name="on">
         </form>
         <?php
         shell_exec("/usr/local/bin/gpio mode 15 out");
         if(isset($_GET['off']))
         {
		       echo "LED is off";
		       shell_exec("/usr/local/bin/gpio -g write 17 0");
         }
	       else if(isset($_GET['on']))
	       {
		       echo "LED is on";
		       shell_exec("/usr/local/bin/gpio -g write 17 1");
	       }
        ?>
        </center></font>
   </body>
 </html>
