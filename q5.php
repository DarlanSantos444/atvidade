<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> Questão 5 </h3>
            <h3><br>5. Um funcionário recebe aumento salarial anualmente. Sabe-se que: 
• Esse funcionário foi contratado em 2015, com salário inicial de R$1000,00; 
• Em 2016 recebeu aumento de 1,5% sobre seu salário inicial; 
• A partir de 2017 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior. Exiba o salário atual desse funcionário. </h3>
        </div>

        <?php
    
    $ano2015 = 1000;

    function pri_ano($ano2015){
      $ano2015 =  $ano2015;
      return $ano2015;
    }

    function ano2016($ano2015){
      $A2016 = ($ano2015*0.015);
      $resul2016 = ($ano2015+$A2016);
      return $resul2016;
    }

    function ano2017($resul2016){
      $perc  = (0.015*2);
      $valor = ( ($perc*1015) + 1015);
      return $valor;
    }

    function ano2018($ano2015){
      $perc = (0.03*2);
      $valor = ( ($perc*1045.45) + 1045.45);
      return $valor;
    }

    function ano2019($ano2015){
      $perc = (0.06*2);
      $valor = ( ($perc*1108.17) + 1108.17);
      return $valor;
    }

    function ano2020($ano2015){
      $perc = (0.12*2);
      $valor = ( ($perc*1241.15) + 1241.15);
      return $valor;
    }

    
    
?>

            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-left">Média <i class="mdi mdi-calculator"></i></h4>
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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Número 3</label>
                                    <input type="number" class="form-control" id="n3" name="n3" required>
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
                            <p>Primeiro Número: <?php echo $n1;?></p>
                            <p>Segundo Número: <?php echo $n2;?></p>
                            <p>Terceiro Número: <?php echo $n3;?></p>
                            <p>Média: <?php echo number_format($media, 2);?></p>
                        </div>
                        <!--Conteudo do card-->


                    </div>
                </div>
            </div>        

<?php
    include "pages/footer.php";
?>