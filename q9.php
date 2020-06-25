<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> Questão 9</h3>
            <h3><br>9. Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, dívida em
10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.</h3>
        </div>

<?php
    $preco    =   $_POST['valor'];
    $valoraumento = ($preco*0.16);
    $soma = ($valoraumento+$preco);
    $valorparcela = ($soma/10);
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
                                    <label for="exampleInputUsername1">Valor do Produto:</label>
                                    <input type="number" class="form-control" id="valor" name="valor" required>
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
                            <p><?php echo "Valor do Produto : R$ ".$preco.;?></p><br>
                            <p><?php echo "Valor Total com aumento: R$ ".$soma.;?></p><br>
                            <p><?php echo "Valor da parcela: R$ ".$valorparcela.;?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>        

<?php
    include "pages/footer.php";
?>