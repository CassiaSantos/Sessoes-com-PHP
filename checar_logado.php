<?php
	#ativa sessão PHP na página checar_logado.php: A Função deve estar antes de qualquer tag HTML:
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Estou logado?</title>
    </head>

    <body>
        
        <?php
        	#Exige o arquivo menu.php antes do final da tag de fechado do html na página checar_logado.php:
        	require 'menu.php';
     
     		#Checagem de login:
            if ($_SESSION["logado"] == "ok") {
                echo "<h4>Eu estou logado =]<h4>";
            } else {
                echo "<h4>Eu não estou logado =[</h4>";
            }
        ?>
    </body>
</html>
