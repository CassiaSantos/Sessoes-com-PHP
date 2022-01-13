<?php
    #Função que inicia sessão na página logar.php - deve estar antes de qualquer tag HTML:
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Estou logado?</title>
    </head>
    <body>
        
        <?php
        	#Exige o arquivo menu.php antes do final da tag de fechado do html na página logar.php: 
        	require 'menu.php';
       
			#Atribue a string "ok" na variável de sessão "logado":
            $_SESSION["logado"] = "ok";
            echo "<h4>Eu me loguei com sucesso!</h4>";
        ?>
    </body>
</html>
