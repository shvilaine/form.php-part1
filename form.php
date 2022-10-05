

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Formulaire de contact</title>
</head>
<body>
    <form action="/thanks.php" method="POST">
    <h1>Contacte-moi</h1>
    <div>
      <label for="name">Nom:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="phone">Téléphone:</label>
            <input type="text" id="phone" name="phone">
    </div>
    <div>
        <label for="email">Email:</label>
            <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="object"><Object>Objet</Object></label>
            <select id="object" name="object">
                <option value="info">Demande d'information</option>
                <option value="job">Me proposer une offre d'emploi</option>
                <option value="mommy">Es-tu ma maman?</option>
                <option value="other">Autres</option>
            </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>