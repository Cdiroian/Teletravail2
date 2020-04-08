<html> 
    <head> 
        <title>Hello World en PHP</title> 
    </head> 
    <body> 

    <!-- Créer un tableau contenant les chiffres de 1 à 10 et un autre 
    tableau contenant les nombres de 11 à 20. Ensuite, créer un autre tableau contenant la somme des deux premiers tableaux et 
    afficher ses valeurs. Il faut utiliser les boucles pour créer ces tableaux. -->
          <?php 
            
            // Exercice 1

            echo "<strong>Exercice 1 </strong>" . "<br />"."<br />";
            $tableau1 = array();
            for ($i=1;$i<=10;$i++)
            {
                $tableau1[$i]=$i;
            }
            $tableau2 = array();
            for ($i=1;$i<=10;$i++)
            {
                $tableau2[$i]=$i+10;
            }
            $tableauSomme = array();
            for ($i=1;$i<=10;$i++)
            {
                $tableauSomme[$i]=$tableau1[$i]+$tableau2[$i];
            }
            for($i=1;$i<=10;$i++)
            {
                echo $tableau1[$i].' | '.$tableau2[$i].' |  = '.$tableauSomme[$i]."<br />";
            }

            // Exercice 2
            echo "<br />"."<strong>Exercice 2 </strong>"."<br /><br />" ;
            $tableau1 = array();
            for ($i=1;$i<=10;$i++) 
            { //tableau de 1 à 10
                $tableau1[$i] = rand(1,100);
            }
            sort($tableau1);
            $valeurs = implode(";",$tableau1);
            echo "Les valeurs sont: ".$valeurs;

            // Exercice 4
            echo "<br /><br />"."<strong>Exercice 4 </strong>"."<br /><br />" ;
            $tableau1= array (6,25,35,61);
            $tableau2= array (12,24,46);
            $somme = 0;
            $nbTableau1 = count ($tableau1);
            $nbTableau2 = count ($tableau2);
            for($i=0; $i <= $nbTableau1 -1;$i++) 
            {
                for($j=0; $j <= $nbTableau2 - 1; $j++)
                {
                    $somme = $somme + $tableau1[$i] * $tableau2[$j];
                }
            }
            echo "La valeur (S) est de : ".$somme;

            // Exercice 5
            echo "<br /><br />"."<strong>Exercice 5 </strong>"."<br /><br />" ;

            $tabBannieres = array(
                1 => array ('https://www.japscan.co/'
                ,'https://www.japscan.co/banniere.gif'.'Description 1'),
                2 => array ('http://www.mon_site.fr2'
                ,'http://www.mon_site.fr2/banniere.gif'.'Description 2'),
                3 => array ('http://www.mon_site.com'
                ,'http://www.mon_site.com/banniere.gif'.'Description 3')
            );
            //choix aléatoire de la bannière
            $choisir = array_rand($tabBannieres, 1);
            //affichage des bannières
            echo '<a href="', $tabBannieres[$choisir][0], '" title="',
            $tabBannieres[$choisir][2], '" > ';
            echo '<img src="', $tabBannieres[$choisir][1], '" alt="',
            $tabBannieres[$choisir][2], '" />';
            echo '</a>';

            //Exercice 3
            echo "<br /><br />"."<strong>Exercice 3 </strong>"."<br /><br />" ;

            $tabCaract_chevalier = array("prénom" => "Philippe",
            "profession" => "Humoriste", "age" => 64);
            $tabCaract_dalton = array("prénom" => "Joe",
            "profession" => "Bandit", "age" => 38);
            $tab_personne['CHEVALIER'] = $tabCaract_chevalier;
            $tab_personne['DALTON'] = $tabCaract_dalton;
            echo '<table border="1">';
            echo '<tr><td>';
            echo 'Clé';
            echo '</td><td colspan ="3">';
            echo 'Valeur';
            echo '</td></tr>';

            foreach($tab_personne as $cle => $val) {
                $nbLigne = count ($val)+1;

                echo'<tr><td rowspan="'.$nbLigne.'">';
                echo $cle;
                echo '</td>';
                echo '<td>Clé</td><td>Valeur</td></tr>';

                foreach($val as $cle2 => $val2) {
                    echo '<tr>';
                    echo '<td>'.$cle2.'</td>';
                    echo '<td>'.$val2.'</td>';
                    echo '</tr>';
                }
            }

            echo '</table>';
          ?> 
    </body> 
</html>