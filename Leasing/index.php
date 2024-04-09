<?php   
session_start();
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>
        Autoverleih Imkakpamale
     </title>
</head>
<body>




<?php

if(isset($_SESSION["login"]))
{
    echo"<h1>Wilkommen beim Autoverleih Imkakpamale</h1><br>";
    echo"Hier kommen Sie zur Autoauswahl <form style=\"display: inline;\" method=\"post\"><button type = \"submit\" formaction= \"fahrzeuge.php\"> Autoauswahl</button></form>";
    echo"<form method=\"post\"><button type = \"submit\" formaction= \"logout.php\"> Logout </button>
         </form>   ";

}
else
{
    echo"Sie haben keine ausreichende Berechtigung! <meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";
}

?>

</body>
</html>
