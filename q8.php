<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> Questão 8 </h3>
            <h3><br>8. Crie um algoritmo em que o usuário escolha uma operação (soma, subtração, multiplicação ou
divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em
cada um dos números.</h3>
        </div>

        <?php
        
        $n1 = filter_input(INPUT_POST, "n1");
        $n2 = filter_input(INPUT_POST, "n2");
        $op = filter_input(INPUT_POST, "op");
        
        if($n1  && $n2){
        switch($op){
            case "+":
            $resultado = ($n1 + $n2);
            break;
            case "-":
            $resultado = ($n1 - $n2);
            break;
            case "*":
            $resultado = ($n1 * $n2);
            break;
            case "/":
            $resultado = ($n1 / $n2);
            break;
        }
        }
        
        ?>

            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Informe os números<i class="mdi mdi-calculator"></i></h4>
                                <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                            </div>
                            <!--Conteudo do card-->
                                
                                <form method="post">
                                    <label>Número 1: <input type="text" name="n1"/></label><br>
                                    <label>Número 2: <input type="text" name="n2"/></label><br>
                                    <label>Operação:
                                    <select name="op">
                                        <option value="+">Adição</option>
                                        <option value="-">Subtração</option>
                                        <option value="*">Multiplicação</option>
                                        <option value="/">Divisão</option>
                                    </select>
                                    </label><br>
                                    <button type="submit" class="btn btn-info">Calcular</button>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Resultado<i class="mdi mdi-file-document-box"></i></h4>
                            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                            <p>Primeiro Número: <?php echo $n1;?></p>
                            <p>Segundo Número: <?php echo $n2;?></p>
                            <p>Resultado: <?php echo $resultado;?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>        

<?php
    include "pages/footer.php";
?>