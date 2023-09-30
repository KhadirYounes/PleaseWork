<!DOCTYPE html>
<html>
<head>
	<title>affectation des thémes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box" style="background-color:rgba(255, 255, 255, 0.5);padding:60px;text-align:center;">
  <h1>جامعة وهران للعلوم و التكنولوجيا محمد بوضياف<br>
  Université des Sciences et de la Technologie d'Oran Mohamed-Boudiaf</h1>
  <img src="USTO-MB__logo.jpg" width="12%" id="left">
  <img src="USTO-MB__logo.jpg" width="12%" id="right">
</div>
<table>
		<thead>
			<tr>
				<th>nom etudiant</th>
				<th>prenom etudiant</th>
				<th>nom de prof</th>
				<th>le theme</th>
			</tr>
		</thead>
		<tbody>
			<?php 
      $servername = "localhost";
      $username = "root";
      $password = "younes";
      $dbname = "projet";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      $sql = "SELECT nom_etud, prenom_etud, enc, th FROM etudiant";
      $result = mysqli_query($conn, $sql);
      
      mysqli_close($conn); ?>
      
			<?php while ($row = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?php echo $row['nom_etud']; ?></td>
				<td><?php echo $row['prenom_etud']; ?></td>
				<td><?php echo $row['enc']; ?></td>
				<td><?php echo $row['th']; ?></td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>