<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Utgivelser | ABM-media AS</title>
    <link rel="stylesheet" href="abm.css?v=4" type="text/css">
    <script src="jquery-1.12.4.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="jquery.tablesorter.min.js" type="text/javascript" charset="utf-8"></script>
    </head>

<body>
<?php include 'inc_header.php'; ?>
<?php include 'inc_nav.php'; ?>
    <main class="contain">
        <h1 id="title">Utgivelser fra ABM-media as</h1>
        <p>For bestilling, send e-post til <strong><a href="mailto:post@abm-media.no">post@abm-media.no</a></strong></p>
        <?php include 'inc_booklist_table.php';?>

        <h2>Utgivelser</h2>
        <?php include 'inc_booklist.php';?>
    </main>
<?php include 'inc_footer.php'; ?>
<script>
$(document).ready(function() { $("#booklistTBL").tablesorter(); } ); 
$("#booklistTBL th").keyup(function(e){
    var code = e.keyCode;
    if(code == 13) {
        e.target.click();
    }
});
</script>
</body>

</html>