<?php 
$basketball_teams = [
    "Los Angeles Lakers",
    "Golden State Warriors",
    "Chicago Bulls",
    "Boston Celtics",
    "Miami Heat",
    "New York Knicks",
    "San Antonio Spurs",
    "Philadelphia 76ers",
    "Houston Rockets",
    "Dallas Mavericks"];


    /* Array indicizzato di partite
            contentente array associativi: uno per la squadra ospite e uno per la squadra di casa
                    contentente un altro array associativo: un valore è il nome della squadra, l'altro è lo score
     */
    $matches = [
        [
            'host_team' =>[
                'name'=> 'Los Angeles Lakers',
                'score' => '85'
            ],
            'guest_team'=> [
                'name'=> 'Golden State Warriors',
                'score' => '90'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Chicago Bulls',
                'score' => '95'
            ],
            'guest_team'=> [
                'name'=> 'Boston Celtics',
                'score' => '100'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Miami Heat',
                'score' => '105'
            ],
            'guest_team'=> [
                'name'=> 'New York Knicks',
                'score' => '110'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'San Antonio Spurs',
                'score' => '115'
            ],
            'guest_team'=> [
                'name'=> 'Philadelphia 76ers',
                'score' => '120'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Houston Rockets',
                'score' => '125'
            ],
            'guest_team'=> [
                'name'=> 'Dallas Mavericks',
                'score' => '130'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Miami Heat',
                'score' => '135'
            ],
            'guest_team'=> [
                'name'=> 'Golden State Warriors',
                'score' => '140'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Boston Celtics',
                'score' => '145'
            ],
            'guest_team'=> [
                'name'=> 'San antnonio Spurs',
                'score' => '150'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Philadelphia 76ers',
                'score' => '155'
            ],
            'guest_team'=> [
                'name'=> 'Los Angeles Lakers',
                'score' => '160'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'Dallas Mavericks',
                'score' => '165'
            ],
            'guest_team'=> [
                'name'=> 'Chicago Bulls',
                'score' => '170'
            ]
            ],
        [
            'host_team' =>[
                'name'=> 'New York Knicks',
                'score' => '175'
            ],
            'guest_team'=> [
                'name'=> 'Houston Rockets',
                'score' => '180'
            ]
            ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container-sm vh-100 d-flex flex-column justify-content-center ">

        <h1 class="text-center mb-5 ">Elenco partite:</h1>
        <ul class="row row-cols-4 row-gap-5 list-unstyled ">
        <!-- Itero tra le partite -->
        <?php foreach($matches as $index => $match) : ?>
            <li class="col">
            <!-- Stampo l'indice della partita iniziando a contare da 1 -->
                <h2 class="text-danger">Partita <?= $index + 1 ?></h2>
                <ul>
                <!-- Itero tra le due squadre giocanti -->
                <?php foreach($match as $team_key => $team) : ?>
                    <li class="my-3">
                        <!-- Stampo il tipo di squadra: se ospite o di casa -->
                        <h4><?= $team_key ?>: </h4>
                        <ul class="list-unstyled">
                        <!-- Itero tra i dettagli della singola squadra: nome e punteggio -->
                        <?php foreach($team as $detail_key => $detail) : ?>
                            <li>
                                <!-- Stampo coppia chiave valore -->
                                <em><?= $detail_key ?>: </em>   
                                <strong><?= $detail?></strong>
                            </li>
                        <?php endforeach ; ?>
                        </ul>
                    </li>
                <?php endforeach ; ?>
                </ul>
            </li>
        <?php endforeach ;?>
        </ul>
            
        </div>
        </body>
</html>