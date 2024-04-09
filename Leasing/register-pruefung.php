<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registrierung</title>
</head>
<body>


<?php
error_reporting(0);

if (isset($_POST['Nachname'], $_POST['Vorname'], $_POST['PLZ'], $_POST['Perso'], $_POST['Fuehrer'], $_POST['Passwort'])){
$c = oci_connect("system", "oracle", "localhost/orcl", "AL32UTF8");
$sql = "call proc_NeuerKunde('$_POST[Nachname]', '$_POST[Vorname]', '$_POST[PLZ]', '$_POST[Perso]', '$_POST[Fuehrer]', '$_POST[Passwort]')";
$s1 = oci_parse($c, $sql);

if(oci_execute($s1))
{
    oci_execute($s1);
    echo"Sie sind erfolgreich registriert!<meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";
}

else
{
echo"Versuchen sie es nochmal! <meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";
}

}

oci_close($c);
?>
</body>
</html>