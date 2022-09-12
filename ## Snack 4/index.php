<?php
    $arrayNumeri = [];

    for ($i = 0; count($arrayNumeri) < 15; $i++ ) {
        $numCasuale = rand(1, 30);

        if (!in_array($numCasuale, $arrayNumeri)) {
            $arrayNumeri[] = $numCasuale;
        }
    }

    var_dump($arrayNumeri);
?>