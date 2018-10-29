<?php
require_once "config.php";

$output = '';

if(isset($_POST['search'])) {
  $search = $_POST['query'];


$query = mysqli_query($link, "SELECT * from artikelen WHERE titel LIKE '%$search%' ") or die ("Could not search");


$count = mysqli_num_rows($query); 
    
if ($count == "0") {
  $output = "Geen gevonden resultaten";

} else {

    while ($row = mysqli_fetch_array($query)) {
        $titel = $row['titel'];
        $text = $row['text']; 

       
        $output ='<div>' .$titel. $text. '</div><br>';
    }
}
}

echo "test" . $output;



