<?php
$nom_prof=$_POST["nom_prof"];
$email_prof=$_POST["email_prof"];
$prenom_prof=$_POST["prenom_prof"];
$telephone=$_POST["telephone"];
$theme=$_POST["theme"];
$description=$_POST["description"];

$conn = mysqli_connect("localhost", "root", "younes", "projet");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO  prof (nom_prof, email_prof, prenom_prof, telephone, theme, description) VALUES ('$nom_prof', '$email_prof', '$prenom_prof', '$telephone', '$theme', '$description')";

if (mysqli_query($conn, $sql)) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>