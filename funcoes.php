
<?php
    include "pages/header.php";
?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
<div class="container">
    <h1 class="mt-5">O que já foi...</h1>
    <h4>Estruturas de Controle(If e Else, For, While, Do While, Switch, Estrutura Ternários)</h4>
    <h4>Funcões basicas (Include, Require, Var_dump, number_format, Funcões de String)</h4>
    <h4>Funcões de Data (date) - Soma com datas</h4>
    <br>
    <br>
    <br>
    <?php
        $idade=8;
        /*
        if ($idade>=18){
            echo "Maior de idade. <br>";
        }else{
            echo "Menor de idade. <br>";
        }
        */
        //condição ? codigoUm : codigoDois;
        echo $idade >= 18 ? "Maior de idade. <br>" : "Menor de idade. <br>";

        //FUNÇÕES PHP STRING
        $texto = "Estamos aprendendo as funções string PHP na aula de hoje.";
        $frase = "funções string PHP.";
        $valor = "140.70";
        $email = "WELLINGTON@GMAIL.COM";
        $nome = "wellington feitoza gonçalves";
        $texto_1 = "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?";
        $cpf="1231231212342314321423143124323";//Deve ter 11 caracteres
        
        echo "<br>Função strtoupper = ".strtoupper($texto);
        echo "<br>Função mb_strtoupper = ".mb_strtoupper($texto,"UTF-8");
        echo "<br>Função strtolower = ".strtolower($email);
        echo "<br>Função ucfirst = ".ucfirst($frase);
        echo "<br>Função ucwords = ".ucwords($nome);
        echo "<br>Função substr = ".substr($texto_1,0,38)." ... Leia mais";
        echo "<br>Função strlen = ".strlen($cpf);
        echo strlen($cpf) == 11 ? "<br>CPF válido. " : "<br>CPF inválido. ";
        echo "<br>Função str_replace = ".str_replace(".",",",$valor);
    ?>
        <br>
        <br>
        <br>
    <?php
     
     //date_default_timezone_set("America/Fortaleza");
     $data = date("Y-m-d H:i");
     echo $data."<br>";

     $data_inicial  = "2020-03-13"; //13/03/2020
     $data_atual    = "2020-05-26";
    
     echo "<br>Data Inicial: ".$data_inicial;
     echo "<br>Data Atual:".$data_atual."<br>";


     $diferenca_seg = strtotime($data_atual) - strtotime($data_inicial);
     echo $diferenca_seg." segundos.<br>";

     $diferenca_dias = $diferenca_seg/86400;
     echo number_format($diferenca_dias,0)." dias. Sem aulas presenciais.<br>";

    ?>

</div>
</main>

<?php
    include "pages/footer.php";
?>

