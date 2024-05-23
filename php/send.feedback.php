<?php

header('Content-Type: application/json');

function saveFeedBack()
{
  $database = dbConnection();
  
  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $feed = htmlspecialchars($_POST['message']);

  // Insère les données dans la base de données
  $statement = $database->prepare("INSERT INTO feedbacks(lastname, firstname, email, feed, date_added) VALUES(?, ?, ?, ?, NOW())");
  $success = $statement->execute([$lastname, $firstname, $email, $feed]);

  if ($success) {
    echo json_encode([
      "success" => true,
      "message" => "J'ai reçu ton message",
    ]);
  }
}

saveFeedBack();

function dbConnection()
{
  // On se connecte à la base de données
  try {
    $database = new PDO("mysql:host=localhost;dbname=midwives;charset=utf8", "root", "root");
  } catch (Exception $e) {
    // S'il y a eu une erreur, eh bah on le fait savoir
    die('Erreur : ' . $e->getMessage());
  }

  return $database;
}
