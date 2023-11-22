<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php foreach($hotels[0] as $key => $value) {
                        ?>
                        <th class="text-center" scope="col"><?php echo $key ?></th>
                        <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) {
                    ?>
                    <tr>
                        <?php foreach($hotel as $key => $detail) {
                            ?>
                            <td class="text-center"><?php 
                                if($key === 'parking') {
                                    if($detail) echo 'yes';
                                    else echo 'no';
                                }
                                else {
                                    echo $detail;
                                    if($key === 'distance_to_center') echo ' km';
                                }
                            ?></td>
                            <?php
                        }
                        ?>
                    </tr>
                    <?php
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>