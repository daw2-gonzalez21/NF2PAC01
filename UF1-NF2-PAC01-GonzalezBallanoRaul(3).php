<?php
session_unset();
setcookie("cookie","Rodolfo",time()+60);
$mirefresco = "Monster Azul"
?>
<html>
 <head>
  <title>Introduce los datos</title>
 </head>
 <body>
  <form method="post" action="UF1-NF2-PAC01-GonzalezBallanoRaul.php?edad=19">
   <p>Introduce tu nombre de usuario: 
    <input type="text" name="user"/>
   </p>
   <p>De que color tienes el pelo?: 
    <input type="text" name="pelo"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>