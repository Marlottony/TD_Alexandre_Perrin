<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "pokedex");
    if(!$link){
      echo "Erreur : Impossible de se connecter a SQL " . PHP_EOL;
      echo "Erreur de debogage ".mysqli_connect_error(). PHP_EOL;
      exit;
    }
    $req = "SELECT DISTINCT * FROM pokemon;";
    $result = mysqli_query($link,$req);
    if($result)
    {
      ?>
    <h1>My Pokedex</h1>
       <table>
         <thead>
           <tr>
             <th>Sprite</th>
             <th>ID</th>
             <th>Name</th>
             <th>Height</th>
             <th>Weight</th>
             <th>Base exp</th>
           </tr>
         </thead>
         <tbody>

    <?php

         while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
          {
           $id = $row["id"];
           $nom = $row["identifier"];
           $height = $row["height"];
           $weight =  $row["weight"];
           $bs_experience = $row["base_experience"];
          }
         if($bs_experience>=200) {
      ?>

        <tr>
          <td><img src="sprites/bulbasaur.png" alt="bulbasaur"></td>
          <td>1</td>
          <td>bulbasaur</td>
          <td>7</td>
          <td>69</td>
          <td>64</td>
        </tr>
        <tr>
          <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
          <td>2</td>
          <td>ivysaur</td>
          <td>10</td>
          <td>130</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
