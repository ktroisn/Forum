    <?php

        /* Stockage des données dans une variable ces données sont issues de ForumController.php (function deatilTopic)
        les données recus par ForumController sont recus grace a la function findAllByIdAndTableDep dans Manager.php */
        $messages = $result["data"]['messages'];
    
        
        /* Condition if, pour permettre de gérer le cas ou un utilisateur se retrouve sur un topic vide (ex. : topic de test) 
           On verifie si le tableau $messages n'est pas vide, si c'est le cas on rentre dans un foreach qui affichera chaque
           chaque message                                                                                                   */
        if($messages != NULL){
            foreach($messages as $message){

    ?>

        <!-- Affichage du titre de la page -->

        <h1>Contenus du sujet : <?=$message->getTopic()->getTitle()?></h1>

    
                <!-- Affichage des posts/messages -->
                <p><?=$message->getMessageText()?></p>
                
        <?php
            // Fermeture de la boucle foreach
            }

        } else {
            // On rentre dans cette condition sulement si la condition if n'est pas remplie, c'est a dire $messages == NULL
        ?>
            <p>Oups... Tu viens d'arriver sur une page qui n'existe pas ! Clique-ici pour être redirigé.</p>

        <?php
        // Fermeture de la condition else, qui retourne un message lorsque un topic est vide
        }

        ?>


  
