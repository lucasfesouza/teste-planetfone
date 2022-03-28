<?php

$name = $_POST['Fname'];
$birthday = $_POST['birthday'];

date_default_timezone_set("America/Sao_Paulo");
$newDate = date("d/m/Y", strtotime($birthday));

$dateNow = new DateTime();
$dateBirthday = new DateTime($birthday);

$result = $dateBirthday->diff($dateNow);

echo "Meu nome é " .$name, ", nasci em " .$newDate, " e tenho " .$result->format("%y"), " anos.";

?>
