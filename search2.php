<?php
require_once "config.php";

$output = '';

if(isset($_POST['search'])) {
  $search = $_POST['search'];


$query = mysqli_query ("SELECT * from artikelen WHERE titel LIKE '%$search%' ") or die ("Could not search");

$count = mysqli_num_rows($query);
    
if($count == 0){
  $output = "Geen gevonden resultaten";

}else{

    while ($row = mysqli_fetch_array($query)) {
        $titel = $row ['titel'];
        $text = $row ['text']; 

       
        $output .='<div> '.$titel.''.$text.'</div>';
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
</form>
<?php print ("$output");?>
</body>
</html>