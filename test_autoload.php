<?php

require_once 'vendor/autoload.php';

$class = 'Acme\TunisiaGovernoratesBundle\TunisiaGovernoratesBundle';
if (class_exists($class)) {
    echo "Classe trouvée !\n";
    $bundle = new $class();
    var_dump($bundle);
} else {
    echo "Classe non trouvée.\n";
}