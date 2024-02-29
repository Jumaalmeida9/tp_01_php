<body>
  <?php

    $questao1 = $_POST["questao1"];
    $questao2 = $_POST["questao2"];
    $questao3 = $_POST["questao3"];
    $questao4 = $_POST["questao4"];
    $questao5 = $_POST["questao5"];
    $questao6 = $_POST["questao6"];

    echo "<b>Questao 1</b> = ".$questao1."<br>";
    echo "<b>Questao 2</b>= ".$questao2."<br>";
    echo "<b>Questao 3</b> = ".$questao3."<br>";
    echo "<b>Questao 4</b> = ".$questao4."<br>";
    echo "<b>Questao 5</b> = ".$questao5."<br>";
    echo "<b>Questao 6</b> = ".$questao6."<br>";
    
     
    $resposta1 = "Azul";
    $resposta2 = "4 Litros";
    $resposta3 = "Descartes";
    $resposta4 = "a";
    $resposta5 = "c";
    $resposta6 = "a";
 
     
    $acertou = 0;
    $errou = 0;
     
    if ($questao1 == $resposta1)
{
    $acertou++;
    echo "<font color = blue> Questao 1 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 1 errada<br></font>";
}
 
if ($questao2 == $resposta2)
{
    $acertou++;
    echo "<font color = blue> Questao 2 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 2 errada<br></font>";
}
 
if ($questao3 == $resposta3)
{
    $acertou++;
    echo "<font color = blue> Questao 3 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 3 errada<br></font>";
}
 
if ($questao4 == $resposta4)
{
    $acertou++;
    echo "<font color = blue> Questao 4 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 4 errada<br></font>";
}
 
if ($questao5 == $resposta5)
{
    $acertou++;
    echo "<font color = blue> Questao 5 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 5 errada<br></font>";
}
 
if ($questao6 == $resposta6)
{
    $acertou++;
    echo "<font color = blue> Questao 6 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 6 errada<br></font>";
}
 
    ?>
 </body>