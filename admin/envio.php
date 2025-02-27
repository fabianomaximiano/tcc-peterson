<?php 

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$address = $_POST["address"];
echo "Meu nome é " . $nome . " sobrenome " . $sobrenome . ".</br>";
echo "Email de contato: " . $email . ".</br>";
echo "Data: " . $dob . ".</br>";
echo "Moro neste endereço: " . $address . ".</br>";
exit;



?>