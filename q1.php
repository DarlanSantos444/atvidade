<?php

include "pages/header.php";

?>

<section class="content">
      <div class="container-fluid">
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span>Questão 1</h3>
            <h3><br>1. Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</h3>
        </div>

        <?php

            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];
            $resultado = $n1 + $n2;
            $nresultado = $resultado * $n1;

            
        ?>

            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Calcular<i class="mdi mdi-calculator"></i></h4>
                                <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                            </div>
                            <!--Conteudo do card-->
                            
                            <form class="forms-sample" id="formSoma" name="formSoma" action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Número 1</label>
                                    <input type="number" class="form-control" id="numero1" name="numero1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Número 2</label>
                                    <input type="number" class="form-control" id="numero2" name="numero2" required>
                                </div>
                                
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
                            <p>Primeiro Número = <?php echo $n1 ?></p>
                            <p>Segundo Número = <?php echo $n2 ?></p>
                            <p>-</p>
                            <p><p>Valor da Soma = <?php echo $resultado ?></p></p>
                            <p>(N1 + N2) * N1 = <?php echo $nresultado ?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>  

            </div><!-- /.container-fluid -->
    </section>      

<?php include('footer.php'); ?>