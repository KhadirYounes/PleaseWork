<!DOCTYPE html>
<html>
<head>
  <meta charset= utf-8>
<link rel="stylesheet" type="text/css" href="style.css">
  <title>etudiants</title>
  <link rel="stylesheet" type="text/css" href="etudiants.css">
  <script>
    function is_majuscule(inputtxt){
        var letters = /^[A-Z]+$/;
        if(inputtxt.value.match(letters)) return true;
          else return false;
   
      }
      function is_majuscule_letter(inputtxt){
        var letters = /^[A-Z][a-z]+$/;
        if(inputtxt.value.match(letters)) return true;
          else return false;
   
      }
      function is_tel(inputtxt){
        var phoneNumber = /^0(5|6|7)[0-9]{8}$/;
        if(inputtxt.value.match(phoneNumber)) return true;
          else return false;
      }
      function is_mail(inputtxt){
        var email = /^[A-Z|a-z]+[@][A-Z|a-z]+[.][A-Z|a-z]+$/;
        if(inputtxt.value.match(email)) return true;
          else return false;
      }
    function check_first_name(){
      var input=document.getElementById("nom_etud");
      if ( !is_majuscule(input))
        //alert("nom doit être alphabétique et en majuscule");
          msg_error_name.style.visibility="visible";
          else msg_error_name.style.visibility="hidden";
    }
    function check_last_name(){
      var input=document.getElementById("prenom_etud");
      if ( !is_majuscule_letter(input))
        msg_error_prenom.style.visibility="visible";
          else msg_error_prenom.style.visibility="hidden";
    }
    function check_telephone(){
      var input=document.getElementById("telephone");
      if ( !is_tel(input))
        msg_error_phone.style.visibility="visible";
          else msg_error_phone.style.visibility="hidden";
    }
    function check_email(){
      var input=document.getElementById("email_etud");
      if ( !is_mail(input))
        msg_error_email.style.visibility="visible";
          else msg_error_email.style.visibility="hidden";
    }
  </script>
</head>
<body style="color:black;">
 <div class="box" style="background-color:rgba(255, 255, 255, 0.5);padding:60px;text-align:center;">
  <h1>جامعة وهران للعلوم و التكنولوجيا محمد بوضياف<br>
  Université des Sciences et de la Technologie d'Oran Mohamed-Boudiaf</h1>
  <img src="USTO-MB__logo.jpg" width="12%" id="left">
  <img src="USTO-MB__logo.jpg" width="12%" id="right">
</div>
<h1>Student Information Form</h1>
  <form method="post" action="insert.php">
    <fieldset>
      <legend>Vos Coordonnées</legend>
      <label for="nom">Nom</label>
      <input type="text" name="nom_etud" required placeholder="your first name" id="nom_etud" onblur="check_first_name();">
      <span id="msg_error_name" style="visibility:hidden;">Nom doit être alphabétique et en majuscule</span><br>
      <label for="prenom">Prenom</label>
      <input type="text" name="prenom_etud" required placeholder="your last name" id="prenom_etud" onblur="check_last_name();">
      <span id="msg_error_prenom" style="visibility:hidden;">La première lettre doit être en majuscule, les autres en miniscules</span><br>
      <label for="email">email</label>
      <input type="text" name="email_etud" required placeholder="your email" id="email_etud" onblur="check_email();">
      <span id="msg_error_email" style="visibility:hidden;">email doit suivre le format xxxxxx@xxxx.xx</span><br>
      <label>Telephone</label>
      <input type="tel" name="telephone" required placeholder="your phone number"id="telephone" onblur="check_telephone();">
      <span id="msg_error_phone" style="visibility:hidden;">Numéro de téléphone doit suivre le format 06|05|07 xxxx xxxx </span><br>
      <label for="adresse">la carte etudiant</label>
      <input type="text" name="NumId" required placeholder="numero la carte etudiant" id="NumId"><br>
      <label for="dateN">Date de naissance</label>
      <input type="date" name="dateN" id="dateN"><br>
      <label>Genre</label>
      <label class="radio">Feminin
        <input type="radio" name="genre" value="feminin">
      </label>
      <label class="radio">Masculin
        <input type="radio" name="genre" value="masculin">
      </label>
      <br>
    </fieldset>
    <fieldset>
      <legend>les thémes</legend>
      <label>veuillez choisir votre thème</label>
        <br>
        <label class="select">thèmes proposés</label>
        <select id="th" name="th">
  <?php
    $db = new mysqli('localhost', 'root', 'younes', 'projet');

    $query = "SELECT id_prof, theme FROM prof";
    $result = $db->query($query);

    
    while ($row = $result->fetch_assoc()) {
      echo '<option value="' . $row['id_prof'] . '">' . $row['theme'] . '</option>';
    }

    $db->close();
  ?>
</select>

        <br>
         <label for="enc">Enseignants: </label>
      <input type="text" name="enc" required placeholder="NOM et Prenom de prof" id="enc">
    <input type="submit" name="Validate" value="Validate &#x2714;">
    <input type="reset" name="Cancel" value="Cancel &times;">
    <button onclick="document.location='accueil.html'">accueil</button>
  </form>
</body>
</html>