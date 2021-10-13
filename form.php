<?php

//$data = array_map('trim',$_POST);//

$lastNameErr = $firstNameErr = $emailErr = $phoneErr = $subjectErr = $msgErr = "";
$lastName = $firstName = $email = $phone = $subject = $msg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
      $lastNameErr = "Il faut renseigner un nom";
    } else {
      $lastName = test_input($_POST["lastname"]);
    }
  
    if (empty($_POST["firstname"])) {
      $firstNameErr = "Il faut renseigner un prénom";
    } else {
      $firstName = test_input($_POST["firstname"]);
    }
  
    if (empty($_POST["user_email"])) {
      $emailErr = "L'Email est obligatoire";
    } else {
      $email = test_input($_POST["user_email"]);
    }
  
    if (empty($_POST["phone_number"])) {
      $phoneErr = "Renseignez un numéro de télephone";
    } else {
      $phone = test_input($_POST["phone_number"]);
    }
  
    if (empty($_POST["subject"])) {
      $sujetErr = "Il faut mettre un thème.";
    } else {
      $sujet = test_input($_POST["subject"]);
    }

    if (empty($_POST["user_message"])) {
        $msgErr = "N'oubliez pas d'incrire votre message.";
      } else {
        $msg = test_input($_POST["user_message"]);
      }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };

  if($userName = $firstName = $email = $phone = $sujet = $message != ""){
      include('thanks.php');
  }

  filter_var($email, FILTER_VALIDATE_EMAIL);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
<form action="form.php" method="post">
    <div>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="tel" name="phone_number" id="phone">
    </div>
    <div>
        <label for="subject">Sujet</label>
        <select name="subject_message" id="subject">
            <option value="theme_1">theme 1</option>
            <option value="theme_2">theme 2</option>
            <option value="theme_3">theme 3</option>
            <option value="theme_4">theme 4</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="bouton">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
    
</body>
</html>