<?php


error_reporting(0);
if (isset($_POST['Passwort'], $_POST['Nachname'])){
$c = oci_connect("system", "oracle", "localhost/orcl", "AL32UTF8");
$sql = "select func_PasswortCheck('$_POST[Nachname]','$_POST[Passwort]') as ergebnis from dual";
$s1 = oci_parse($c, $sql);
oci_execute(($s1));
$ergebnis = oci_fetch_array($s1,OCI_ASSOC);
if($ergebnis['ERGEBNIS'] == "korrekt"){
    session_start();
    $_SESSION["login"]=true;
}    
}


?>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Passwortgeschützter Bereich</title>
</head>
<body>

<?php
if(isset($_SESSION["login"]))
{
    echo"Sie sind erfolgreich eingeloggt!<meta http-equiv=\"refresh\" content=\"3; URL=index.php\" />";
}
else
{
echo"Name oder Passwort falsch! <meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";
}

oci_close($c);
?>
</body>
</html>