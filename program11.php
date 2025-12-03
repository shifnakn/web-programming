<<?php
$indianPlayers = array("MS Dhoni", "Sachin Tendulkar", "Virat kohli", "Ravindra Jadeja", "Mohammed Shami");
echo "<table border='1'>
          <tr>
           <th>SL NO</th>
           
           <th>Player Name</th>
         </tr>";
$i=1;
foreach ($indianPlayers as $player) {

    echo "<tr>
             <td>$i</td>
            <td>$player</td>
           </tr>";
           $i++;
}

echo "</table>";
?>
