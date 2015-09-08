<?php 
    $isbn = ($_GET["isbn"]);
    $utgivelse = "utgivelser/isbn" . $isbn . ".php";
    echo "<a href=\"utgivelser.php#$isbn\">Tilbake til utgivelsesoversikten &#8230;</a>";
    include $utgivelse;
?>