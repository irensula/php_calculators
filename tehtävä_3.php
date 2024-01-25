<?php include 'header.php';?>

<h2>Harjoitus 3: ALV-laskuri</h2>

<?php
    if(isset($_GET['hinta'], $_GET['alv'])){
        $hinta = htmlspecialchars($_GET['hinta']);
        $alv = htmlspecialchars($_GET['alv']);
        $laskuri = round($hinta + (($hinta * $alv) / 100), 2);
        echo "Verollinen hinta: $laskuri €.<br>";
        echo "ALV-%: $alv €.";
    }
?>

<form action="tehtävä_3.php" method="get">
    <label for="hinta">Hinta:</label> 
    <input type="text" name="hinta" id="hinta" maxlength=30><br>

    <label for="alv">ALV-%:</label> 
    <input type="text" name="alv" id="alv" maxlength=30><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>