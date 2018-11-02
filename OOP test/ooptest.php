<?php
    include 'oopconfig.php';
    include 'oopsearch.php';
    include 'oopviewsearch.php';
?>     

<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>

<?php 
    $search = new viewSearch();
    $search->showAllArtikelen();
?>    

</body>
</html>
