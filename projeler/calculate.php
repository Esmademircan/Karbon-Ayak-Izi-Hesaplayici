<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transport = $_POST['transport'];
    $electricity = $_POST['electricity'];
    $meat = $_POST['meat'];
    $flights = $_POST['flights'];
    $food = $_POST['food'];
    $heating = $_POST['heating'];

    $carbon_transport = $transport * 0.21;
    $carbon_electricity = $electricity * 0.527;
    $carbon_meat = $meat * 27;
    $carbon_flights = $flights * 0.254; // kg CO2 per flight hour
    $carbon_food = $food * 2.5; // average kg CO2 per kg of food
    $carbon_heating = $heating * 0.2; // average kg CO2 per TL spent on heating

    $total_carbon = $carbon_transport + $carbon_electricity + $carbon_meat + $carbon_flights + $carbon_food + $carbon_heating;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Karbon Ayak İzi Sonucu</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="result-container">
        <h1>Toplam Karbon Ayak İzi</h1>
        <p class="result"><?php echo round($total_carbon, 2); ?> kg CO2</p>
        <a href="index.html" class="back-button">Geri Dön</a>
        <a href="suggestions.php?total=<?php echo round($total_carbon, 2); ?>" class="suggestions-button">Yapılması Gerekenler</a>
    </div>
    </body>
    </html>
    <?php
}
?>
