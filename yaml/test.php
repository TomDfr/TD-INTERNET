<?php
$data=yaml_parse_file("test.yaml");
echo "<p>".$data["prenom"]."".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo '<img src="'.$data["photo"].'" />';
?>