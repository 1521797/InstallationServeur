<h1>Je le test!</h1>
<h4>Tentative de connexin MySQL depuis PHP </h4>

<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error){
    die("La connexion a échoué : " . $conn->connect_error);
}
echo "Connexion réussi à MySQL!";
?>