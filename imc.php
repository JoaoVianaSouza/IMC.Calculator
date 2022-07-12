<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel= "stylesheet" href="imc.css">
    <title>Calculo IMC</title>
</head>
<body>
    <?php
    //variaveis
    $name = $_POST['name'];
    $age = $_POST['age'];

    //mensagem dependendo da idade
    if ($age >=0 && $age <= 1) {
        $agemsg = "Bebê";
    }    
        elseif ($age >= 2 && $age <= 12){
            $agemsg = "Criança";
    }
        elseif ($age >=13 && $age <= 18){
            $agemsg = "Adolescente";
    }
        elseif ($age >= 19 && $age <= 59){
            $agemsg = "Adulto";
    }
       elseif ($age >= 60 && $age <= 119){
            $agemsg = "Idoso";
    }
    ?>
    <h1>Você é</h1>
    <h2 class= "agemsg" ?>
        <?php echo "$agemsg" ?>
    </h2>
    <?php
    //variaveis
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $imc = $weight / $height **2;

    //message depending on the mic
    if ($imc >=1 && $imc < 18.5){
        $imcmsg = "Abaixo do peso";
    }
        elseif ($imc >=18.6 && $imc < 24.9){
            $imcmsg = "Peso ideal (Parabéns)";
    }
        elseif ($imc >=25 && $imc < 29.9){
            $imcmsg = "Levemente acima do peso";
    }
        elseif ($imc >= 30 && $imc < 34.9){
             $imcmsg = "Obesidade Grau 1";
    }
        elseif ($imc >=35 && $imc < 39.9){
            $imcmsg = "Obesidade Grau 2 (severa)";
    }
        elseif ($imc >40){
            $imcmsg = "Obesidade Grau 3 (mórbida)";
    }
    //mostrar apenas 4 caracteres
    if(strlen($imc) > 4 ){
      $nimc = substr($imc, 0, 4);      
    } else{
        $nimc= $imc;
    }
    ?>
    <h1>Seu IMC é: </h1>
    <h3 class= "agemsg" ?>
        <?php echo "$nimc ($imcmsg)" ?>
</body>  
</html>  