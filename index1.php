<?php
    date_default_timezone_set("America/Fortaleza");
    $agora = date("d/m/Y H:i");
    echo $agora;
    echo("<br>"); // Pular uma linha

    $hora = date("H");
    
    if ($hora > 0 && $hora < 12) {
      echo "Olá bom dia!";
    }
    elseif ($hora >= 12 && $hora < 18){
        echo "Olá boa tarde!";
    }
    else{
        echo "Olá boa noite!";
    }

    echo("<br>"); // Pular uma linha
    echo("<br>"); // Pular uma linha
?>

<?php
    $frutas  =   array("Maça","Uva","Banana","Abacate","Melão","Morango");
    var_dump($frutas); //DEBUGAR
    echo("<br>"); // Pular uma linha

    echo("Exibindo com FOR"); // Pular uma linha
    for($i=0; $i<sizeof($frutas) ;$i++){
        echo "<br>indice=".$i." - posição=".($i+1)." = ".$frutas[$i];
    }
    echo("<br>"); // Pular uma linha
    echo("Exibindo com FOREACH"); // Pular uma linha
    echo("<br>"); // Pular uma linha
    
    
    //Estruta de repetição para array
    foreach ($frutas as $fruta) {
        //echo "$fruta <br>"; //mostra na tela o que desejar

        if ($fruta == "Uva") {
            echo "<br><b></b>Na compra de uma caixa de uvas você recebe 50% OFF.<b></b><br>";
          }
      }
?>


<?php
    echo "<br> Estrutura WHILE - ENQUANTO<br>";
    $x = 6;

    while($x <= 5) {
        echo "X é = $x <br>";
        //$x++;
        $x=$x+1;
    }

    echo "<br> Estrutura DO WHILE - FAÇA ENQUANTO<br>";
    $y = 6;

    do {
    echo "Y é = $y <br>";
    $y++;
    } while ($y <= 5);


    echo "<br> Estrutura FOR - PARA<br>";
    for($i=1;$i<=5;$i++){
        echo "i é = $i <br>";
    }
    
    
    
    echo "<br> Estrutura SWITCH CASE - CASO SEJA<br>";
    $frutas = "Abacate";
   
    switch ($frutas) {
    case "Uva":
        echo "Sua fruta preferida é Uva!";
        break;
    case "Maça":
        echo "Sua fruta preferida é Maça!";
        break;
    case "Banana":
        echo "Sua fruta preferida é Banana!";
        break;
    default:
        echo "Sua fruta preferida está em falta!!!";
    }
?>