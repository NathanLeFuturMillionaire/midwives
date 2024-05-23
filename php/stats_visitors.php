<?php

function dbConnection()
{
  // On se connecte à la base de données
  try {
    $database = new PDO("mysql:host=localhost;dbname=id22192082_midwives;charset=utf8", "id22192082_root", "Ee2001FfuAaBdZz*");
    // $database = new PDO("mysql:host=localhost;dbname=midwives;charset=utf8", "root", "root");
  } catch (Exception $e) {
    // S'il y a eu une erreur, eh bah on le fait savoir
    die('Erreur : ' . $e->getMessage());
  }
  return $database;
}

function countVisitors() : int
{
  // On se connecte à la base de données
  $database = dbConnection();

  // On compte le nombre de visiteurs
  $query = $database->prepare("SELECT COUNT(*) FROM visitors");
  $query->execute();
  $count = $query->fetchColumn();
  return $count;
}

function displayFeedBacks()
{
  $database = dbConnection();
  $statement = $database->prepare("SELECT * FROM feedbacks");
  return $statement->fetchAll();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Nombre de visites</h1>
    <p><?php echo countVisitors();?></p>
    <h2>Messages</h2>
    <?php foreach(displayFeedBacks() as $message): ?>
      <p><?= $message["feed"]; ?></p>
    <?php endforeach; ?>
  </div>
</body>
</html>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Jersey+25+Charted&family=Manrope:wght@200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  }

  .container {
    width: fit-content;
    padding: 10px;
    margin: 10% auto;
    background-color: #f7f7f7;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    text-align: center;
  }

  .container p {
    font-size: 1.7rem;
    margin-top: 10px;
  }
</style>