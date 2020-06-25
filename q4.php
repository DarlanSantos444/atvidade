<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> Questão 4 </h3>
            <h3><br>4. Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h. </h3>
        </div>

<?php
    
    $n1 = $_POST['num'];
    $resultado = 0;
    
    $resultado = ($n1*3.6);
    
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
                                    <label for="exampleInputUsername1">Número</label>
                                    <input type="number" class="form-control" id="num" name="num" required>
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
                            <p>Número em km/h: <?php echo $resultado;?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>        

<?php
    include "pages/footer.php";
?>