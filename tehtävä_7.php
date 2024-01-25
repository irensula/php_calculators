<?php include 'header.php';?>

<h2>Harjoitus 7: Alennuslaskuri</h2>

<?php
    if(isset($_GET['maara'], $_GET['hinta'], $_GET['prosentti'])){
        $maara = htmlspecialchars($_GET['maara']);
        $hinta = htmlspecialchars($_GET['hinta']);
        $prosentti = htmlspecialchars($_GET['prosentti']);

        $kokonaishinta = $maara * $hinta;
        $alennusmaara = ($kokonaishinta * $prosentti) / 100;
        $alennettuhinta = $kokonaishinta - $alennusmaara;

        echo "Kokonaishinta: $kokonaishinta €.<br>";
        echo "Alennusmäärä: $alennusmaara €.<br>";
        echo "Alennettu hinta: $alennettuhinta €.<br>";
    }
?>

<form action="tehtävä_7.php" method="get">
    
    <label for="maara">Määrä:</label> 
    <input type="text" name="maara" id="maara"><br>

    <label for="hinta">Yksikköhinta:</label> 
    <input type="text" name="hinta" id="hinta"><br>

    <label for="prosentti">Alennusprosentti:</label> 
    <input type="text" name="prosentti" id="prosentti"><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>