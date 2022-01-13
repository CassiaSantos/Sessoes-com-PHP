<?php
    #Função que inicia sessão na página deslogar.php - deve estar antes de qualquer tag HTML:
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Estou logado?</title>
    </head>

    <body>

        <?php 
        	#Exige o arquivo menu.php antes do final da tag de fechado do html na página deslogar.php:
        	require 'menu.php';

            #Apaga todas as variáveis de sessão e destrua-a - funções session_unset() e session_destroy():
            session_unset();
            session_destroy();
            echo "<h4>Eu me desloguei com sucesso!</h4>";
        ?>
    </body>
</html>
