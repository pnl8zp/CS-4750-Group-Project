<?php
include('session.php');

$Operation = $_GET["op"];

echo "<br><h3 id=\"resultTxt\">Choose $Operation Table</h3>";

$admin = ($permission == 3);
$prof = ($permission == 2);
$reg = ($permission == 1);

if($admin) {
    $table_names = array("Administrator", "Appointment", "Department", "Doctor", "Employee", "Medication", "Nurse", "Occupies", "Patient", "Pharmacist", "Receptionist", "Record", "Room", "User");
}
elseif($prof) {
    $table_names = array("Appointment", "Department", "Doctor", "Medication", "Nurse", "Occupies", "Patient", "Pharmacist", "Receptionist", "Record", "Room");
}
elseif ($reg) {
    $table_names = array("Appointment", "Department", "Occupies", "Patient", "Record");
}

// 

$Redirect = "interface.php?op=$Operation";
// $Redirect = "Appointments.html";

echo "<form id=\"resultTxt\" action=\"$Redirect\" method=\"post\">";

foreach ($table_names as $value) {
    echo "<input id=\"resultTxt\" type=\"radio\" name=\"Table\" value=\"$value\">$value<br>";
}

echo "<br><input type=\"submit\" value=\"Submit\">";
echo "</form>";

?>
