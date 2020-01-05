<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gosup";
$nom = $_POST['nom'];
$prenom  =$_POST['prenom'];
$role = $_POST['role'];
$sendpassword = $_POST['password'];
$email = $_POST['email'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO membres (id, nom, prenom, role, email, password, membredepuis)
    VALUES (null , '$nom' , '$prenom' , '$role', '$email', '$sendpassword', current_date )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>