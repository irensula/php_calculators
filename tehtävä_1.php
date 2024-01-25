<?php include 'header.php';?>

<h2>Harjoitus 1: Bensalaskuri</h2>

<?php
    if(isset($_GET['raha'])){
        $rahaa = htmlspecialchars($_GET['raha']);
        $hinta = 1.97;
        $laskuri = round($rahaa / $hinta, 2);
        echo "Saat rahalla  $laskuri litraa bensaa.";
    }
?>

<form action="tehtävä_1.php" method="get">
    <label for="raha">Rahanmäärä:</label> 
    <input type="text" name="raha" id="raha" maxlength=30><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>