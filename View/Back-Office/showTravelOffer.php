<?php

include __DIR__.'/../../Controller/TravelOfferController.php';

$travelOfferC=new TravelOfferController();
$list=$travelOfferC->listOffers();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>DESTINATION</th>
            <th>DEPARTURE DATE</th>
            <th>RETURN DATE</th>
            <th>PRICE</th>
            <th>DISPONIBILITY</th>
            <th>CATEGORY</th>

        </tr>

    </table>
</body>
</html>