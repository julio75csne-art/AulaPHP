<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1A</title>
</head>
    <?php
        if(isset($_REQUEST["Enviar"])){
            $cliente=$_REQUEST['cliente'];
            $sexo=$_REQUEST['sexo'];
            $valorcompra=$_REQUEST['valorcompra'];

            if($sexo == Masculino){
                $desconto = 0.15;
            }
            else if($sexo == Feminino){
                $desconto = 0.20;
            }
            $valor_desconto = $valorcompra*$desconto;
            $valor_Total = $valorcompra-$valor_desconto;

        echo "<br> nome do cliente:  $cliente" ; 
        echo "<br> sexo:  $sexo" ; 
        echo "<br> valor da compra é de: $valortotal" ; 
        }
    ?>
</body>
</html>