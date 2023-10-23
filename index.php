<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vartotojo forma</title>
</head>
<body>
<form action="" method="get">
        <label for="vardas">Vardas:</label>
        <input type="text" id="vardas" name="vardas" required><br><br>
        
        <label for="pavarde">Pavardė:</label>
        <input type="text" id="pavarde" name="pavarde" required><br><br>
        
        <label for="komentaras">Komentaras:</label><br>
        <textarea id="komentaras" name="komentaras" required></textarea><br><br>
        
        <input type="submit" value="Siųsti">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $vardas = $_GET["vardas"];
    $pavarde = $_GET["pavarde"];
    $komentaras = $_GET["komentaras"];
    
    
    echo "<h2>Vartotojo informacija:</h2>";
    echo "Vardas: $vardas<br>";
    echo "Pavardė: $pavarde<br>";
    echo "Komentaras: $komentaras<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prisijungimoVardas = $_POST["prisijungimoVardas"];
    $slaptazodis = $_POST["slaptazodis"];

    
    $teisingasSlaptazodis = strtolower(substr($vardas, 0, 3) . substr($pavarde, 0, 3));

    
    if ($prisijungimoVardas == "jusu@pastas" && $slaptazodis == $teisingasSlaptazodis) {
        echo "Prisijungta sėkmingai";
    } else {
        echo "Blogi prisijungimo duomenys";
    }
}
?>

    
</body>
</html>
