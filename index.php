<?php require "head/header.php"; ?>
    <!--création du bloc principal -->
    <div class=div2>

      <div class="row">

        <div class="column3" style="background-color:#F95074;">
        <h2>5 BD CULTES !</h2>
        </div>

        <div class="column" style="background-color: snow;">
        <a href="page/page1.php"><img class="bd1" src="image/9782012101449.png" height="400" width="275" alt="Astérix aux jeux olympique (1968)"   title="Astérix aux Jeux Olympiques(1968)"></a>
        <ul class="livre1" >
            <?php
            $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne  = Personne.id JOIN role ON Auteur.idROLE=Role.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Livre.genre = genre.id JOIN
            Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre LIKE 'Astérix aux jeux Olympiques'AND auteur.idPersonne=2; ";
            $result =mysqli_query($link,$req);
              if ($result) {
                //echo "SELECT a retourné ".mysqli_num_roxs($result)." lignes.<br>";
                while($row = mysqli_fetch_array($result, MYSLI_ASSOC)) {
                  echo "<li>Code ISBN: " . $row["isbn"] ."</li>";
                  echo "<li>Type: " . $row["libelle"] ."</li>";
                  echo "<li>Année: " . $row["annee"] ."</li>";
                  echo "<li>Scénariste: " . $row["nom"] ."</li>";

              }
                    myqli_free_result($result);
              }?>
        </ul>
       </div>
       <!--************ Lucky Luke ******************-->
 <div class="column" style="background-color:snow;">
  <a href="page/page2.php"><img class="bd1" src="image/9782884710367.jpg" height="400" width="275" alt="Lucky Luke : Daisy Town"  title="Lucky Luke Daisy Town"></a>
  <ul class="livre1" >
      <li>BD: Lucky Luke  </li>
      <li>Titre: Daisy Town</li>
      <li>Tome: 21</li>
      <li>Scénario : Goscinny</li>
      <li>Dessin : Morris</li>
      <li>Editeur : Dargaud </li>
      <li>Publié en : <time datetime="1972-04-01">01 Mars 1972</time></li>
      <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782884710367</li>
    </ul>
    </div>
               <!--************ Tintin ******************-->
 <div class="column" style="background-color:snow">
  <a href="page/page3.php"><img class="bd1" src="image/220300102X.jpg" height="400" width="275" alt="Tintin en Amérique (1932)" title="Tintin en Amérique"/></a>
<ul class="livre1">
  <li>BD: Tintin </li>
  <li>Titre: Tintin en Amérique</li>
  <li>Tome: 2 </li>
  <li>Scénario : Hergé</li>
  <li>Dessin : Hergé</li>
  <li>Editeur : Casterman</li>
  <li>Publié en : <time datetime="1993-05-01">01 Mai 1993</time></li>
  <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 220300102X</li>
</ul>
</div>

<!--** Boule & Bill **-->
   <div class="column2" style="background-color:snow;">
     <a href="page/page4.php"><img class="bd1" src="image/9782800141879.jpg" height="400" width="275" alt="Boule & Bill: Tel Boule, tel Bill"  title="Tel Boule, tel Bill !"></a>
     <ul class="livre1" >
         <li>BD: Boule et Bill  </li>
         <li>Titre: Tel Boule, tel Bill</li>
         <li>Tome: 1</li>
         <li>Dessin : Jean Roba</li>
         <li>Editeur : Dargaud</li>
         <li>Publié en : <time datetime="2008-05-07">7 mai 2008</time></li>
         <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782800141879</li>
       </ul></div>

           <!--** LES SCHTROUMPFS **-->
   <div class="column2" style="background-color:snow;">
   <a href="page/page5.php"><img class="bd1" src="image/9782803612161.jpg" height="400" width="300" alt="LES SCHTROUMPFS LOMBARD: DOCTEUR SCHTROUMPF"  title="DOCTEUR SCHTROUMPF"></a>
   <ul class="livre1" >
       <li>BD: LES SCHTROUMPFS LOMBARD  </li>
       <li>Titre: DOCTEUR SCHTROUMPF</li>
       <li>Tome: 18</li>
       <li>Dessin : ALAIN MAURY</li>
       <li>Editeur : LE LOMBARD</li>
       <li>Publié en : <time datetime="1998-01-20">20 janvier 1998</time></li>
       <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782803612161</li>
     </ul> </div>

     <div class="column3" style="background-color:#F95074;">
  <h2>5 BD A DECOUVRIR !</h2>
</div>

<!--**Donjon de Naheulbeuk**-->
   <div class="column" style="background-color:snow;">
     <a href="page/page6.php"><img class="bd1" src="image/2913714676.jpg" height="400" width="275" alt="Donjon de Naheulbeuk Tome 1"   title="Donjon de Nhaeulbeuk Tome 1"></a>
     <ul class="livre1" >
         <li><u>BD</u>: Le Donjon de Naheulbeuk </li>
         <li>Titre:Le Donjon de Naheulbeuk Tome 1</li>
         <li>Tome: 1</li>
         <li>Scénario : John Lang</li>
         <li>Dessin : Poinsot</li>
         <li>Editeur : Clair de Lune</li>
         <li>Publié en : <time datetime="2011-03-24">24 mars 2011</time></li>
         <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 2913714676</li>
       </ul></div>

                       <!--**Les Tuniques Bleues**-->
    <div class="column" style="background-color:snow;">
      <a href="page/page7.php"><img class="bd1" src="image/9782800186887.jpg" height="400" width="275" alt="Les Tuniques Bleues: tome 46"   title="Requiem pour un bleu (Les Tuniques Bleues)"></a>
      <ul class="livre1" >
          <li><u>BD</u>: Les Tuniques Bleues</li>
          <li>Titre:Requiem pour un bleu</li>
          <li>Tome: 46</li>
          <li>Scénario : Raoul Cauvin</li>
          <li>Dessin : Willy Lambil</li>
          <li>Editeur : DUPUIS</li>
          <li>Publié en : <time datetime="2010-03-26">26 mars 2010</time></li>
          <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782800186887</li>
        </ul></div>

                       <!--**Kid Paddle**-->
        <div class="column" style="background-color:snow;">
           <a href="page/page8.php"><img class="bd1" src="image/9782800132594.jpg" height="400" width="275" alt="Paddle my name is Kid Paddle"   title="Paddle my name is Kid Paddle"> </a>
           <ul class="livre1" >
               <li><u>BD</u>: Kid Paddle</li>
               <li>Titre:Paddle my name is Kid Paddle</li>
               <li>Tome: 8</li>
               <li>Scénario : Midam</li>
               <li>Dessin : Midam</li>
               <li>Editeur : DUPUIS</li>
               <li>Publié en : <time datetime="2002-11-19">19 novembre 2002</time></li>
               <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782800132594</li>
             </ul>  </div>

                      <!--**Malgès nous**-->
            <div class="column2" style="background-color:snow;">
               <a href="page/page9.php"><img class="bd1" src="image/9782302007314.jpg" height="400" width="275" alt="Malgré nous, Tome 1  Elsaß"   title="Malgré nous, Tome 1  Elsaß"></a>
               <ul class="livre1" >
                   <li><u>BD</u>: Malgré nous</li>
                   <li>Titre:Elsaß</li>
                   <li>Tome: 1</li>
                   <li>Scénario : Thierry Gloris</li>
                   <li>Dessin : Marie Terray</li>
                   <li>Editeur : QUADRANTS</li>
                   <li>Publié en : <time datetime="2009-09-23">23 septembre 2009</time></li>
                   <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782302007314</li>
                 </ul></div>


                      <!--**Arabe du Futur**-->
                <div class="column2" style="background-color:snow;">
                     <a href="page/page10.php">  <img class="bd1" src="image/9782370730145.jpg" height="400" width="275" alt="Arabe du futur tome 1"   title="Arabe du futur tome 1"></a>
                     <ul class="livre1" >
                         <li><u>BD</u>: Arabe du futur</li>
                         <li>Titre:Une Jeunesse au Moyen Orient (1978-1984)</li>
                         <li>Tome: 1</li>
                         <li>Scénario : Riad Sattouf </li>
                         <li>Dessin : Riad Sattouf</li>
                         <li>Editeur : ALLARY EDITIONS</li>
                         <li>Publié en : <time datetime="2014-05-07">07 Mai 2014</time></li>
                         <li><abbr title="Numéro d'identification attestant l'enregistrement international d'un livre">ISBN</abbr>: 9782370730145</li>
                       </ul></div>




                              </div>

        </div>
<!-- Bloc de Fin -->
<?php require "foot/footer.php"; ?>

<!--*************************************************FIN*************************************************-->

  </body>
</html>
