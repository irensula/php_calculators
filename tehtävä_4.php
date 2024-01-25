<?php include 'header.php';?>

<h2>Harjoitus 4: Arpa</h2>

<?php
    if(isset($_GET['luku'])){
        $luku = htmlspecialchars($_GET['luku']);
        $satunnaisluku = round(rand(1,10));
        if($luku == $satunnaisluku) {
            echo "Onnittelut.";
        } else {
            echo "Tämä arpa ei voittanut.";
        }
    }
?>

<form action="tehtävä_4.php" method="get">
    
    <label for="luku">Anna luku välitä 1-10:</label> 
    <input type="number" name="luku" id="luku" min="1" max="10"><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>