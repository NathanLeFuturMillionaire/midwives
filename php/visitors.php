<?php

function isVisitorExist(string $visitor_ip): int
{
  $database = dbConnection();
  $statement = $database->prepare("SELECT * FROM visitors WHERE visitor_ip =?");
  $statement->execute([$visitor_ip]);
  return $statement->rowCount();
}

function execute()
{
  $visitor_ip = $_SERVER["REMOTE_ADDR"];
  if (isVisitorExist($visitor_ip) === 0) {
    createVisitor($visitor_ip);
  }
}
execute();

function createVisitor(string $visitor_ip)
{
  $database = dbConnection();
  $statement = $database->prepare("INSERT INTO visitors(visitor_ip, date_visited) VALUES(?, NOW())");
  $statement->execute([$visitor_ip]);
}

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
