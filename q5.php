<?php
    include "pages/header.php";
?>

    <div class="main-panel">
        <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-library-books"></i>
            </span> Questão 5</h3>
            <h3><br>5. Um funcionário recebe aumento salarial anualmente. Sabe-se que:<br> 
            • Esse funcionário foi contratado em 2015, com salário inicial de R$1000,00; <br> 
            • Em 2016 recebeu aumento de 1,5% sobre seu salário inicial; <br> 
            • A partir de 2017 (inclusive), os aumentos salariais sempre corresponderam ao dobro do percentual do ano anterior. Exiba o salário atual desse funcionário. </h3>
        </div>

<?php
    
    $salario15 = 1000;
    $salario16 = (1000+15);
    $salario17 = (1015+30.45);
    $salario18 = (1045.45+62.72);
    $salario19 = (1108.17+132.98);
    $salario20 = 1241.15;  

?>

            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Resultado<i class="mdi mdi-file-document-box"></i></h4>
                            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                            <p>Salário 2015: <?php echo $salario15;?></p>
                            <p>Salário 2016: <?php echo $salario16;?></p>
                            <p>Salário 2017: <?php echo $salario17;?></p>
                            <p>Salário 2018: <?php echo $salario18;?></p>
                            <p>Salário 2019: <?php echo $salario19;?></p>
                            <p>Salário 2020: <?php echo $salario20;?></p>
                        </div>
                    </div>
                </div>

            </div>        

<?php
    include "pages/footer.php";
?>