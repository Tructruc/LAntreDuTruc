<?php
     require 'menu.php';
?>


    <div >
      <h1>Je met ici les exercices que je ré&alise lors du cour PHP My SQL de Pierre Giraud</h1>
    </div>
    <div>
      <h1>Cour 03 : les bases</h1>
      <p>Ceci est un paragraphe en HTML</p>
      <?php
        echo "Ceci à été écrit en php </br>";
        print "Ceci est affiché en PHP grace à print";
        //je suis un commentaire mono-ligne
        /*Je suis un
        commentaire
        multi-ligne*/
      ?>
    </div>
    <div>
      <h1>Cour 04 : les variables</h1>
      <?php //cour 02, variables
        $departement = "var";
        $chiffre = "83";
        $pi = 3.14;
        $variable1 = true;
        $variable2 = false;
        echo "Le $departement est un département de France.</br>";
        echo 'Le '.$departement.' est un département de France. </br>';
        echo $chiffre.'</br>';
      ?>

      <?php
        $nombre1 = 5;
        $nombre2 = 3;

        $addition = $nombre1 + $nombre2;
        $soustraction = $nombre1 - $nombre2;
        $multiplication = $nombre1 * $nombre2;
        $division = $nombre1 / $nombre2;
        $modulo = $nombre1 % $nombre2;

        echo 'Addition : '.$addition.'</br>';//Affiche 8
        echo 'Soustraction : '.$soustraction.'</br>';//Affiche 2
        echo 'Multiplication : '.$multiplication.'</br>';//Affiche 15
        echo 'Division : '.$division.'</br>';//Affiche 1.6667
        echo 'Modulo : '.$modulo.'</br>';//Affiche 2

        echo $nombre1.'+'.$nombre2.'</br>';

        $addition = 20;
        $soustraction = $soustraction - $soustraction;
        $multiplication= $addition;

        echo 'Nouvelle valeur addition : '.$addition.'</br>';
        echo 'Nouvelle valeur soustraction : '.$soustraction.'</br>';
        echo 'Nouvelle valeur multiplication : '.$multiplication.'</br>';
      ?>
    </div>

    <div>
      <h1>Cour 05 : Les conditions</h1>
      <?php

      ?>
    </div>
<?php
     require 'footer.php';
?>
