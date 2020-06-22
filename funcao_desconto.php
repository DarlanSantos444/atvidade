<?php
    //Função para calcular desconto na loja virtual
    function calcular_desconto($valor_produto,$desconto){
        $valor_desconto = $valor_produto * ($desconto/100);    
        $valor_final = $valor_produto - $valor_desconto;
        return $valor_final;
    }

?>