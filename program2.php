<?php
$indianplayers=array("MS Dhoni","Sachin Tendulkar","Virat Kohli","Rvindra jadeja",);
echo"<table border='1'>
<tr>
<th>SL NO</th>
<th>PLAYERS</th>
</tr>";
$i=1;
foreach($indianplayers as $player){
echo"<tr>
<td>$i</td>
<td>$player</td>
</tr>";
$i++;
}
echo"</table>";
?>