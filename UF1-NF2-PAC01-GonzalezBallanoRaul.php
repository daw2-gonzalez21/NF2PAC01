<?php
    session_start();
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['colorPelo'] = $_POST['pelo'];
    $_SESSION['authuser'] = 0;
    

    if (($_SESSION['colorPelo'] == 'moreno') or
        ($_SESSION['colorPelo'] == 'MORENO')){
        $_SESSION['authuser'] = 1;
    }
    else{
        echo "No tienes permiso para visitar la pagina.";
        exit();
    }
?>
<html>
 <head>
  <title>Quieres saber como me llamo.></title>
 </head>
 <body>
<?php
echo "Bienvenido a mi pagina, ";
echo $_SESSION["username"];
echo "! <br/>";
echo "Me llamo Raul Gonzalez y tengo ";
echo $_GET['edad'] ?? 18;
echo " años.";
echo "<br>";
echo "La pagina web de mi cole es: ";
echo "<a href='www.fpllefia.com'>";
echo "www.fpllefia.com.";
echo "</a>";
echo "<br>";
echo "El valor de la cookie es: ";
echo $_COOKIE["cookie"];
echo "<br>";
$dia = date('d');
$mes = date('m');
$anyo = date('Y');
echo "Hoy es: ";
echo $dia;
echo "/";
echo $mes;
echo "/";
echo $anyo;
echo ".";
?>
 </body>
</html>