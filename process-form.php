<?php

$Nume = $_POST["Nume"];
$Prenume = $_POST["Prenume"];
$Varsta = filter_input(INPUT_POST, "Varsta", FILTER_VALIDATE_INT);
$Marime = $_POST["Marime"];
$Email = $_POST["Email"];
$Telefon = filter_input(INPUT_POST, "Telefon", FILTER_VALIDATE_INT);
$gender = filter_input(INPUT_POST, "gender", FILTER_VALIDATE_BOOL);
$Afiliere=$_POST["Afiliere"];
$Traseu=$_POST["Traseu"];
$parola=$_POST["parola"];

if(filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
   
}
else{
    die("Invalid Email !");
}


$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO message (Nume, Prenume, Varsta, Marime , Email, Telefon, gender ,Traseu, Afiliere, parola)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt, "ssississss",
                       $Nume,
                       $Prenume,
                       $Varsta,
                       $Marime,
                       $Email,
                       $Telefon,
                       $gender,
                       $Traseu,
                       $Afiliere,
                       $parola);


mysqli_stmt_execute($stmt);

header("Location: formular.html");
exit();
?>