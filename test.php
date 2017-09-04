<?php 
include_once("config.php");

$conn = new mysqli($servername, $username, $password, $dbname3);
/*                                      // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}*/

$sql = "SELECT * FROM `MenuItems` WHERE 1";
if(!$result = $conn->query($sql)){
echo"<h2>YEA BAD</h2>";
//die('There was an error running the query [' . $conn->error . ']');
}                
/*while ($row = $result->fetch_assoc()) {
echo "<h2>Results: $row</h2>";
$name = $row['Name'];
$cost = $row['Price'];
if (substr($cost, -3, -2) != ".") {
$cost = $cost.".00";
}
$id = substr($name, 0,2);
echo '<tr>
<th><label class="labelItem">'.$name.'</label></th>
<th><label class="labelItem">$'.$cost.'</label></th>
<th><div class="buttonAdd" id="'.$id.'">Add</div></th>
</tr>';
}*/
?>