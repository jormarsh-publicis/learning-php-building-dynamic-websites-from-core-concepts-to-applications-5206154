<?php
$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Moana 2"; //Italics
$friends = "Lou and Abby"; //Bold
$candy = "Jelly Beans";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Challenge 1</title>
  <meta name="author" value="Jordan Marshall">
</head>

<body>
  <?php

  echo "<h1>Hello $name</h1>";

  echo "<p> You will be seeing <em>$movie</em> today in $city";

  echo "<p> $friends are also invited";

  echo "<p> They are bringing <strong>$candy</strong> </p>"
  ?>
</body>

</html>