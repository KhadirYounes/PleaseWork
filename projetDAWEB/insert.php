<?php
$nom_etud=$_POST["nom_etud"];
$email_etud=$_POST["email_etud"];
$prenom_etud=$_POST["prenom_etud"];
$NumId=$_POST["NumId"];
$dateN=$_POST["dateN"];
$th=$_POST["th"];
$enc=$_POST["enc"];

$conn = mysqli_connect("localhost", "root", "younes", "projet");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO  etudiant (nom_etud, email_etud, prenom_etud, NumId, dateN, th, enc) VALUES ('$nom_etud', '$email_etud', '$prenom_etud', '$NumId', '$dateN','$th', '$enc')";

if (mysqli_query($conn, $sql)) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
