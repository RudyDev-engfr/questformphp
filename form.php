<?php var_dump($_POST) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">

<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="user_lastname">

</div>

<div>

  <label  for="prenom">Prénom :</label>

  <input  type="text"  id="prenom"  name="user_name">

</div>
<div>

  <label  for="courriel">Mail</label>

    <input  type="email"  id="courriel"  name="user_email">

</div>

<div>

  <label  for="message">Message :</label>

  <textarea  id="message"  name="user_message"></textarea>

</div>

<div>
<label for="phone">Numéro de téléphone</label>
<input type="tel" id="phone" name="user_phone">
</div>

<div>
<label for="sujet">Sujet de la demande</label>
<select id="sujet" name="user_subject">
<option value="panne">Panne de téléphone</option>
<option value="remerciement">Remercier le staff</option>
<option value="mars">Partir sur Mars</option>
</select>
</div>

<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>
</body>
</html>
