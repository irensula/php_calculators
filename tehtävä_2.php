<?php include 'header.php';?>

<h2>Harjoitus 2: Rahaa takaisin</h2>

<?php
    if(isset($_GET['raha'], $_GET['loppunsumma'])){
        $rahaa = htmlspecialchars($_GET['raha']);
        $loppunsumma = htmlspecialchars($_GET['loppunsumma']);
        $laskuri = round($rahaa - $loppunsumma, 2);
        echo "Takaisin: $laskuri €.";
    }
?>

<form action="tehtävä_2.php" method="get">
    <label for="raha">Rahanmäärä:</label> 
    <input type="text" name="raha" id="raha" maxlength=30><br>

    <label for="loppunsumma">Loppusumma:</label> 
    <input type="text" name="loppunsumma" id="loppunsumma" maxlength=30><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>