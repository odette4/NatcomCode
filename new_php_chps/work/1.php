<?php
$rows = $_POST["row"];
$cols = $_POST["columns"];
$data = "bonheur";
$add_1 = 1;
echo "<table border = '1' >";
for($i = 0; $i<$rows; $i++){
    echo "<tr>";
 for ($j=0; $j < $cols; $j++) { 
     echo "<td> row =". $i+$add_1."cols =".$j+$add_1."</td>";
 }
 echo "</tr>";
}
?>