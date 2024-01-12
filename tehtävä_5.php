<?php include 'header.php';?>

<h2>Harjoitus 5: Arvosana</h2>

<?php
    if(isset($_GET['arvosana'])){
        $arvosana = htmlspecialchars($_GET['arvosana']);
        if($arvosana == 1) {
            echo "Paranna hiukan";
        } elseif($arvosana == 2) {
            echo "Ihan ok";
        } elseif($arvosana == 3) {
            echo "Hienoa";
        }
    }
?>

<form action="tehtävä_5.php" method="get">
    
    <label for="arvosana">Valitse kokeen arvosana:</label> 
    <input type="number" name="arvosana" id="arvosana" min="1" max="3"><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>