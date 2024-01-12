<?php include 'header.php';?>

<h2>Harjoitus 8: Pienempi tai suurempi</h2>

<?php
    if(isset($_GET['luku_1'], $_GET['luku_2'], $_GET['valinta'])){
        $luku_1 = htmlspecialchars($_GET['luku_1']);
        $luku_2 = htmlspecialchars($_GET['luku_2']);
        

        if($_GET["valinta"] == "pienempi") {
            if($luku_1 < $luku_2) {
                echo "$luku_1";
            } elseif ($luku_1 > $luku_2) {
                echo "$luku_2";
            }   
        } elseif ($_GET["valinta"] == "suurempi"){
            if($luku_1 > $luku_2) {
                echo "$luku_1";
            } elseif ($luku_1 < $luku_2) {
                echo "$luku_2";
            }  
        }
    }
?>

<form action="tehtävä_8.php" method="get">
    
    <label for="luku_1">Anna luku 1:</label> 
    <input type="text" name="luku_1" id="luku_1"><br>

    <label for="luku_2">Anna luku 2:</label> 
    <input type="text" name="luku_2" id="luku_2"><br>

    <input type="radio" id="valinta" name="valinta" value="pienempi">
    <label for="valinta">Pienempi</label><br>

    <input type="radio" id="valinta" name="valinta" value="suurempi">
    <label for="valinta">Suurempi</label><br>
    
    <input type="submit" value="Lähetä">
</form>

<?php include 'footer.php';?>