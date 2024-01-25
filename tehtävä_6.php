<?php include 'header.php';?>

<h2>Harjoitus 6: Palkkalaskuri</h2>

<?php
    if(isset($_GET['tunnit'], $_GET['tuntipalkka'], $_GET['veroprosentti'])){
        $tunnit = htmlspecialchars($_GET['tunnit']);
        $tuntipalkka = htmlspecialchars($_GET['tuntipalkka']);
        $veroprosentti = htmlspecialchars($_GET['veroprosentti']);

        $bruttopalkka = $tunnit * $tuntipalkka;
        $vero = ($bruttopalkka * $veroprosentti) / 100;
        $nettopalkka = $bruttopalkka - $vero;

        echo "Bruttopalkka: $bruttopalkka €.<br>";
        echo "Vero: $vero €<br>.";
        echo "Nettopalkka: $nettopalkka €.<br>";
    }
?>

<form action="tehtävä_6.php" method="get">
    
    <label for="tunnit">Anna tehdyt tunnit:</label> 
    <input type="text" name="tunnit" id="tunnit"><br>

    <label for="tuntipalkka">Anna tuntipalkka:</label> 
    <input type="text" name="tuntipalkka" id="tuntipalkka"><br>

    <label for="veroprosentti">Anna veroprosentti:</label> 
    <input type="text" name="veroprosentti" id="veroprosentti"><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>