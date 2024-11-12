<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
<h1>Quiz</h1>

<form action="resultat.php" method="post">
    <label>I vilket språk programmerar vi i på kursen?<br>    
        <input type="radio" name="qOne" value="php">PHP<br>
        <input type="radio" name="qOne" value="asp">ASP<br>
        <input type="radio" name="qOne" value="jsp">JSP<br><br>
    </label>
    <label>Vilket språk är ett klientskriptspråk<br>  
        <input type="radio" name="qTwo" value="jsp">JSP<br>
        <input type="radio" name="qTwo" value="js">JavaScript<br>
        <input type="radio" name="qTwo" value="basic">Basic<br><br>
    </label>
    <input type="submit" value="Skicka" />
</form>

<section>
<?php
    include('inc/raknesatt.php'); 

    $produkt = substraktion(2, 5); // Här anropas funktionen sum
    $kvot = division(2, 5);
    
    header('Content-Type: text/html; charset=utf-8');
    echo "Kvoten av 2 och 5 är $kvot<br>";
    echo "Produkten av 2 och 5 är $produkt";
    
?>
</section>

<section>
    <?php
    $namn = array("erik", "ture", "ida", "victor");

    foreach ($namn as $x) {
        echo "$x <br>";
    }
    ?>
</section>

<section>
    <?php
    for ($i = 0.0; $i < 5.0; $i = $i + 0.1) {
        echo "$i <br>";
    }
    ?>
</section>

</body>
</html>