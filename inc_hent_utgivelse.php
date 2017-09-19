<?php 
    $isbn = ($_GET["isbn"]);
    $utgivelse = "utgivelser/isbn" . $isbn . ".php";
    echo "<a class=\"tilbake\" href=\"utgivelser.php#$isbn\">Tilbake til utgivelsesoversikten.</a>";
    include $utgivelse;
?>