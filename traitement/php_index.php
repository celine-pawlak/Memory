<?php

if (App::getAuth()->user()) {
    ?>
    <a class="btn btn-primary jeu" href="memory.php">Nouvelle partie</a>
    <?php
} else {
    ?>
    <p class="text-white text-center"><a href="inscription.php" class="index_link">Inscris toi</a> si ce n'est pas déjà fait</p>
    <p>Sinon <a href="connexion.php" class="index_link">connecte</a>-toi pour jouer</p>
    <?php
}

?>