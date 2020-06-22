<?php
    include "pages/header.php";
    require "funcao_desconto.php";
?>

<?php
    //DADOS DO BANCO DE DADOS DAS AMERICAS
    $cliente = "Wellington";
    
    $produtos_nome = array("Smartphone Samsung Galaxy A10","Lavadora Turbo Electrolux 17 Kg","Smart TV LED 55” Philco","Fritadeira Grand Family ");
    $produtos_descricao = array("Smartphone Samsung Galaxy A10 32GB Dual Chip Android 9.0 Tela 6.2' Octa-Core 4G Câmera 13MP - Preto",
                                "Lavadora Turbo Electrolux 17 Kg Branca com Capacidade Premium e Cesto Inox (LPR17)",
                                "Smart TV LED 55” Philco PTV55Q20SNBL Ultra HD 4k HDR Borda Infinita Com Aplicativos E Audio Dolby",
                                "Af-55 I - Fritadeira Grand Family Inox-5,5l 127v - Mondial");
    $produtos_valor = array(899,1799,2249.99,520.56);
    $desconto = array(5,10);
?>


<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5 mb-5" style="text-align:center">Produtos</h1>
        
        <div class="row">

            <div class="card col-sm" style="width: 18rem;">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img7/01/00/item/134253/9/134253960_1GG.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos_nome[0]?></h5>
                    <p class="card-text"><?php echo $produtos_descricao[0]?></p>
                    <p class="card-text">Preço R$ <?php echo number_format($produtos_valor[0],2)?></p>
                    <p class="card-text">Desconto <?php echo $desconto[1]."%"?></p>
                    <p class="card-text">Total R$ <?php echo number_format(calcular_desconto($produtos_valor[0],$desconto[1]),2)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="card col-sm ml-2" style="width: 18rem;">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img/49655/4/49655456_1GG.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos_nome[1]?></h5>
                    <p class="card-text"><?php echo $produtos_descricao[1]?></p>
                    <p class="card-text">Preço R$ <?php echo number_format($produtos_valor[1],2)?></p>
                    <p class="card-text">Desconto <?php echo $desconto[0]."%"?></p>
                    <p class="card-text">Total R$ <?php echo number_format(calcular_desconto($produtos_valor[1],$desconto[0]),2)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="card col-sm ml-2" style="width: 18rem;">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img/1441079/5/1441079560_1GG.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos_nome[2]?></h5>
                    <p class="card-text"><?php echo $produtos_descricao[2]?></p>
                    <p class="card-text">Preço R$ <?php echo number_format($produtos_valor[2],2)?></p>
                    <p class="card-text">Desconto <?php echo $desconto[1]."%"?></p>
                    <p class="card-text">Total R$ <?php echo number_format(calcular_desconto($produtos_valor[2],$desconto[0]),2)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="card col-sm ml-2" style="width: 18rem;">
                <img src="https://images-americanas.b2w.io/produtos/01/00/img/133855/7/133855766_1GG.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos_nome[3]?></h5>
                    <p class="card-text"><?php echo $produtos_descricao[3]?></p>
                    <p class="card-text">Preço R$ <?php echo number_format($produtos_valor[3],2)?></p>
                    <p class="card-text">Desconto <?php echo $desconto[0]."%"?></p>
                    <p class="card-text">Total R$ <?php echo number_format(calcular_desconto($produtos_valor[3],$desconto[0]),2)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        
        
        
        <?php
            //Função NATIVA PHP - RAND
            echo(rand(1,12));
            echo "<br>";
            
            //Função SEM RETORNO
            //Função com ou sem argumento/parametro
            function msg($nome="Visitante"){
                echo "Olá ".$nome.", seja bem vindo!<br>";
            }

            msg();
            
            //Função COM RETORNO
            //Função com ou sem argumento/parametro
            function soma($n1,$n2){
                //Diversas contas...
                return $n1+$n2;
            }

            echo "Resultado = ".soma(3,6);



            //Função COM RETORNO


        ?>


    </div>
</main>

<?php
    include "pages/footer.php";
?>