<?php 

    $pdo = new PDO("mysql:host=localhost;
    port=3306;
    dbname=bookweb",
    "user",
    "test");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="accueil.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
        <nav class="nav-container" id="navigation">
            <ul class="nav">
                <li><a href="compte.php">Compte</a></li>
                <li><a href="livre.php">Livre</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </header>

        <img class="bienv" src="image/photo-1630343710506-89f8b9f21d31.jpg" alt="bienvenue">

        <table class="sortie">
            <th colspan="2">Sorti cette semaine</th>
            <tr>
                <td> <img src="image/la_jeune_fille_et_la_nuit-1049294-264-432.jpg" height="310px" width="auto"></td>
                <td>Résumé: Un campus prestigieux figé sous la neige

                    Trois amis liés par un secret tragique
                    
                    Une jeune fille emportée par la nuit
                    
                    Cote d'Azur - Hiver 1992
                    
                    Une nuit glaciale, alors que le campus de son lycée est paralysé par une tempête de neige, Vinca Rockwell, 19 ans, l'une des plus brillantes élèves de classes prépas, s'enfuit avec son professeur de philo avec qui elle entretenait une relation secrète. Pour la jeune fille, "l'amour est tout ou il n'est rien".
                    
                    Personne ne la reverra jamais.
                    
                    Cote d'Azur - Printemps 2017
                    
                    Autrefois inséparables, Fanny, Thomas et Maxime -les meilleurs amis de Vinca- ne se sont plus parlé depuis la fin de leurs études. Ils se retrouvent lors d'une réunion d'anciens élèves. Vingt-cinq ans plus tôt, dans des circonstances terribles, ils ont tous les trois commis un meurtre et emmuré le cadavre dans le gymnase du lycée. Celui que l'on doit entièrement détruire aujourd'hui pour construire un autre bâtiment.
                    
                    Dès lors, plus rien ne s'oppose à ce qu'éclate la vérité.
                    
                    Dérangeante
                    
                    Douloureuse
                    
                    Démoniaque... </td>
            </tr>
            <tr>
                <td><img src="image/la_passe_miroir_livre_1_les_fiances_de_lhiver-282811-264-432.jpg"  height="310px" width="auto"></td>
                <td>Résumé:Sous son écharpe élimée et ses lunettes de myope, Ophélie cache des dons singuliers : elle peut lire le passé des objets et traverser les miroirs. Elle vit paisiblement sur l'arche d'Anima quand on la fiance à Thorn, du puissant clan des Dragons. La jeune fille doit quitter sa famille et le suivre à la citacielle, capitale flottante du Pôle. A quelle fin a-t-elle été choisie ? Pourquoi doit-elle dissimuler sa véritable identité ? Sans le savoir, Ophélie devient le jouet d'un complot mortel.</td>
            </tr>
            <tr>
                <td> <img src="image/lassassin_est_au_college-957732-264-432.jpg"  height="310px" width="auto"></td>
                <td>Résumé: Nils Hazard, professeur d'histoire, et Catherine Roque, sa secrétaire, sont appelés par l'inspecteur Berthier pour mener une enquête au collège Saint-Prix. En effet, des événements inquiétants agitent ce collège : des copies sont notées avec du sang humain, des lettres anonymes sont envoyées au directeur et les élèves ont tous des comportements un peu "étranges". Nils et Catherine réussiront-ils à résoudre ces énigmes ? Parviendront-ils à démasquer le véritable coupable ?</td>
            </tr>
            <tr>
                <td> <img src="image/six_of_crows_tome_2_la_cite_corrompue-912730-264-432.jpg"  height="310px" width="auto"> </td>
                <td>Résumé:Après avoir réussi à s’enfuir du Palais des Glaces, Kaz et ses compagnons se sentent invulnérables. Un revirement de situation va cependant changer la donne d’une partie mortelle que devront jouer les jeunes prodiges du crime. Alors que les grandes puissances Grisha s’organisent pour leur mettre la main dessus, Kaz imagine un plan, entre vengeance et arnaque, qui leur assurera la gloire éternelle en cas de réussite, et provoquera la ruine de leur monde s’ils échouent.
                </td>
            </tr>
        </table>

        <footer> 
            <table>
              <tr>  
                <td>Pour toute remarque ou question: bouquinenr@mail.com</td>
                <td>Suivez nous sur <i class="fab fa-twitter"></i> <i class="fa fa-instagram"></i></td>
            </tr>
            </table>
        </footer>
        </nav>
    </body>
</html> 