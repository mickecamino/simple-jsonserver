<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db_name = "somedatabase";
$conn = new mysqli($servername, $username, $password, $db_name);
$date = date("Y-m-d");
$sql = "SELECT datum, namnsdag FROM namnsdagar WHERE datum='" . $date . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$svar = $result->fetch_assoc();
echo '{"datum":"'.$svar[datum].'","namnsdag":'.$svar[namnsdag].'}';
}
?>
