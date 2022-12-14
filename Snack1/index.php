<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php
    $matches = [
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Cantù',
            'punteggio' => '55-60'
        ],
        [
            'squadraCasa' => 'Olimpia Milano',
            'squadraOspite' => 'Virtus Segafredo Bologna',
            'punteggio' => '70-100'
        ],
        [
            'squadraCasa' => 'GeVi Napoli Basket',
            'squadraOspite' => 'Virtus Segafredo Bologna',
            'punteggio' => '50-70'
        ],
        [
            'squadraCasa' => 'GeVi Napoli Basket',
            'squadraOspite' => 'Cantù',
            'punteggio' => '85-30'
        ]
    ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 1</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($matches); $i++) { ?>
            <li><?php echo $matches[$i]['squadraCasa']; ?> - <?php echo $matches[$i]['squadraOspite']; ?> | <?php echo $matches[$i]['punteggio']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>