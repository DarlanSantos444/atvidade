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