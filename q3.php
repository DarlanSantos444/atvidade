<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> QUESTÃO 3 </h3>
            <h3><br>3. Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados
e mostre o resultado.</h3>
        </div>

        <?php

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            $qn1 = $n1 * $n1;
            $qn2 = $n2 * $n2;

            $somaq = $qn1 + $qn2;
            
        ?>

            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Quadrado <i class="mdi mdi-calculator"></i></h4>
                                <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                            </div>
                            <!--Conteudo do card-->
                            
                            <form class="forms-sample" id="formSoma" name="formSoma" action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Número 1</label>
                                    <input type="number" class="form-control" id="n1" name="n1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Número 2</label>
                                    <input type="number" class="form-control" id="n2" name="n2" required>
                                </div>
                                
                                <button type="submit" class="btn btn-info">Calcular</button>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Resultados <i class="mdi mdi-file-document-box"></i></h4>
                            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                            <p>Número 1: <?php echo $n1;?></p>
                            <p>Número 2: <?php echo $n2;?></p>
                            <p>Soma dos Quadrados: <?php echo $somaq;?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>        

<?php
    include "pages/footer.php";
?>