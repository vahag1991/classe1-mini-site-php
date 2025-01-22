<?php
# public\index.php

// Front Controller
<<<<<<< HEAD

// chargement des données (les dépendances)
include "../datas/datas.php";

// vérification si on a bien importer les données
//var_dump($datas);

// Appel du router
include "../controller/router.php";


// Appel de la vue
include "../view/MyView.php";
=======
include "../datas/datas.php";
var_dump($datas) ; 
include "..controller/router.php";
>>>>>>> fe4febb61e3988a3e4b157bebe7d2ebc2a3ceb8e
