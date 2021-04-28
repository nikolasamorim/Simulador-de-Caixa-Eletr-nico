<?php
header("content-type: text/html; charset=utf-8");
//variaveis
$banco=$_POST["banco"];
$agencia=$_POST["agencia"];
$conta=$_POST["conta"];
$saque=$_POST["saque"];
$n100=0;
$n50=0;
$n20=0;
$n10=0;
$n5=0;
$n2=0;
$n1=0;
$resto=0;
//validação
if (isset($_POST["banco"]) && empty($_POST["banco"])
    && isset($_POST["agencia"]) && empty($_POST["agencia"])
    &&isset($_POST["conta"]) && empty($_POST["conta"])
    &&isset($_POST["saque"]) && empty($_POST["saque"])){
header("location:index.html");

}

//calculo quantidade de notas
$n100 = intval($saque / 100);
$resto = $saque % 100;

$n50 = intval($resto / 50);
$resto = $resto % 50;

$n20 = intval($resto / 20);
$resto = $resto % 20;

$n10 = intval($resto / 10);
$resto = $resto % 10;

$n5 = intval($resto / 5);
$resto = $resto % 5;

$n2 = intval($resto / 2);
$resto = $resto % 2;

$n1 = intval($resto / 1);
$resto = $resto % 1;

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/c5163c8d04.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/money.png">
    <meta charset="UTF-8">
    <title>Saque Virtual</title>
</head>
<body>
<div class="container">
        <div class="box">
    <h1 class="title">Resultado - R$<?php echo number_format($saque,2);?></h1>
<div class="org-section">
<?php if ($n100 > 0){ ?>
    <img src="img/100reais.jpg" alt="100 reais"> 
    <label><?php echo $n100 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n50 > 0){ ?>
    <img src="img/50reais.jpg" alt="50 reais"> 
    <label><?php echo $n50 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n20 > 0){ ?>
    <img src="img/20reais.jpg" alt="20 reais"> 
    <label><?php echo $n20 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n10 > 0){ ?>
    <img src="img/10reais.jpg" alt="10 reais">
    <label><?php echo $n10 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n5 > 0){ ?>
    <img src="img/5reais.jpg" alt="5 reais"> 
    <label><?php echo $n5 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n2 > 0){ ?>
    <img src="img/2reais.jpg" alt="2 reais"> 
    <label><?php echo $n2 ; ?> cédula(s)</label>
<?php } ?>

<?php if ($n1 > 0){ ?>
    <img class="um-real" src="img/1real.png" alt="1 real">
    <label><?php echo $n1 ; ?> cédula(s)</label>
<?php } ?>
</div>

</div>
</div>
</body>
</html>

