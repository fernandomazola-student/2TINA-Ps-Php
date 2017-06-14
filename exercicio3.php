<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 3 - RM76541</title>
</head>
<body>
    <?php
        
        function exerc3(){        
            for ($i=1;$i <= 6; $i++){ 
                $n[] = rand(1, 100); 
            }        
            rsort($n);        
            echo "Ordem decrescente: " . implode(' - ', $n);
        }
        exerc3();
    ?>    
</body>
</html>