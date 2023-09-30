<!DOCTYPE html>
<html>
<head>
	<title>thémes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
button {
  padding: 5px 10px;
  border: none;
  border-radius: 10px;
  background-color: #3498DB;
  color: white;
  font-size: 15px;
  cursor: pointer;
}
button:hover {
  background-color: #566573;
}
</style>
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
				<th>nom prof</th>
				<th>prenom prof</th>
				<th>theme</th>
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
      
      $sql = "SELECT nom_prof, prenom_prof, theme, description FROM prof";
      $result = mysqli_query($conn, $sql);
      
      mysqli_close($conn); ?>
      
			<?php while ($row = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?php echo $row['nom_prof']; ?></td>
				<td><?php echo $row['prenom_prof']; ?></td>
				<td><?php echo $row['theme']; ?> <button onclick="alert('<?php echo $row['description']; ?>')">description</button></td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>