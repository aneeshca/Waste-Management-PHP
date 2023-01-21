


<html>
<body>
<?php

include "db.php";

echo "<h1>"; echo "sum() aggregate  Demo "; echo"</h1>";
echo "<h2>";echo " Find the total cost of food items ";echo "</h2>";

$sql = "SELECT  SUM(ewaste) from collection";
$result =mysqli_query($con, $sql) or die (mysqli_errno($con));

while($row = mysqli_fetch_array($result)){
    echo " Total cost: ". $row['SUM(ewaste)'];
    echo "<br>";
}


 

?>
</body>
</html>
