<?php   
session_start();
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Fahrzeugliste</title>
</head>
<body>
    <?php
    error_reporting(0);
    if(isset($_SESSION["login"]))
    {
        $c = oci_connect("system", "oracle", "localhost/orcl", "AL32UTF8");
        $sql = "select * from view_fahrzeuge";
        $s1 = oci_parse($c, $sql);
        oci_execute(($s1));

        echo "<table border='5'>\n";
        $ncols = oci_num_fields($s1);
        echo "<tr>\n";
        for ($i = 1; $i <= $ncols; ++$i) {
            $colname = oci_field_name($s1, $i);
            echo " <th>" . htmlentities($colname, ENT_QUOTES) . "</th>\n";
        }
        echo "<th>Ausleihen</th>";
        echo "</tr>\n";

        while (($row = oci_fetch_array($s1, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
            echo "<tr>\n";
            foreach ($row as $item) {
                echo " <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td>\n";
            }
            echo "</tr>\n";
        }

        echo "</table>\n";

        
        echo"<form method=\"post\"><button type = \"submit\" formaction= \"index.php\"> Zurück </button>
             </form>   ";
    
    }
    else
    {
        echo"Sie haben keine ausreichende Berechtigung! <meta http-equiv=\"refresh\" content=\"3; URL=login.php\" />";
    }


oci_close($c);
?>



</body>


</html>