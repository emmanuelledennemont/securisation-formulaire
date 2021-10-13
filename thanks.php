<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>
        Merci <?= $_GET['firstname']; ?> <?= $_GET['lastname']; ?> de nous avoir contacté à propos de <?= $_GET['subject']; ?>.
    </h2>
    <p>
        Un de nos conseiller vous contactera soit à l’adresse <?= $_GET['email'];?> ou par téléphone au <?= $_GET['phone'];?> dans les plus brefs délais pour traiter votre demande :
        <br><?= $_GET['message']; ?>
    </p>
</body>
</html>