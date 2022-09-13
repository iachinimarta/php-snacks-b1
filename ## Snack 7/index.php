<?php
    $arrayAlunni = 
    [
        [
            'name' => 'Marta',
            'lastname' => 'Iachini',
            'vote' => [4,7,9,6]
        ]
    ];

    for ($i = 0; $i < count($arrayAlunni); $i++) {
        $alunno = $arrayAlunni[$i];

        $mediaVoti = array_sum($alunno['vote']) / count($alunno['vote']);
    }
?>