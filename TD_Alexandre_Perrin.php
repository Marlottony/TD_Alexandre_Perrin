<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$link = mysqli_connect("localhost", "root", "root", "bibliotheque");
if(!$link){
  echo "Erreur : Impossible de se connecter a SQL " . PHP_EOL;
  echo "Errno de debogage : " .mysqli_connect_errno(). PHP_EOL;
  echo "Erreur de debogage ".mysqli_connect_error(). PHP_EOL;
  exit;
}
echo "Succès : Une connexion correcte à MYSQL a té faite ! La base de donnée de bibliothèque à été ouverete.<br>";
echo "information d'hote : " . mysqli_get_host_info($link)."<br>";
?>
</body>
</head>
