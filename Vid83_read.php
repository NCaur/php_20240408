<?php
include('./Vid83_config.php');
$gettickets=$conn->prepare("Select * from ost_ticket__cdata");
$gettickets->execute();
$tickets=$gettickets->fetchAll();
// echo "<pre>";
// print_r($tickets);
echo "<table border ='1'>";
echo "<tr>";
echo "<th>Ticket_id</th><th>Subject</th>";
echo "</tr>";
foreach($tickets as $ticket){
  
    echo "<tr>";
    echo "<td>".$ticket['ticket_id']."</td>";
   
    echo"<td>".$ticket['subject']. "</td>";
    echo "</tr>";
}
echo "</table>";
?>