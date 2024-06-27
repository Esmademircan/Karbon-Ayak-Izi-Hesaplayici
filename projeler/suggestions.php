<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öneriler</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="suggestions-container">
    <h1>Doğayı Korumak İçin Yapılması Gerekenler</h1>
    <?php
    $total_carbon = $_GET['total'];

    if ($total_carbon > 1000) {
        echo "<p>Karbon ayak izinizi azaltmak için aşağıdaki önerilere göz atabilirsiniz:</p>";
        echo "<ul>
                    <li>Toplu taşıma veya bisiklet kullanarak ulaşımınızı sağlayın.</li>
                    <li>Evde enerji tasarrufu sağlayacak önlemler alın (LED ampuller kullanma, enerji tasarruflu cihazlar satın alma).</li>
                    <li>Et tüketiminizi azaltın ve bitkisel besinlere yönelin.</li>
                    <li>Geri dönüşüm yapın ve atıkları azaltın.</li>
                    <li>Uçak seyahatlerinizi azaltın ve mümkünse tren veya otobüs kullanın.</li>
                    <li>Daha fazla yerel ve mevsimsel gıdalar tüketin.</li>
                    <li>Evde ısınma ve soğutma için enerji verimliliğini artıracak yalıtım malzemeleri kullanın.</li>
                </ul>";
    } else {
        echo "<p>Karbon ayak izinizi daha da azaltmak için şunları deneyebilirsiniz:</p>";
        echo "<ul>
                    <li>Daha az araç kullanarak veya yürüyerek ulaşım sağlayın.</li>
                    <li>Evde enerji tasarrufu sağlayacak daha fazla önlem alın (güneş enerjisi kullanma, enerji verimliliği yüksek cihazlar kullanma).</li>
                    <li>Haftalık et tüketiminizi daha da azaltın.</li>
                    <li>Kompost yaparak organik atıklarınızı değerlendirin.</li>
                    <li>Uçak seyahatlerinizi minimuma indirin.</li>
                    <li>Daha fazla organik ve sürdürülebilir gıdalar tüketin.</li>
                    <li>Evde ısınma ve soğutma için daha çevreci çözümler kullanın (örneğin, akıllı termostatlar).</li>
                </ul>";
    }
    ?>
    <a href="index.html" class="back-button">Geri Dön</a>
</div>
</body>
</html>

