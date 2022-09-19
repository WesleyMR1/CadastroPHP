<?php

   


    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form method="POST" action="../Controller/CadastroController.php">

            <label>Nome</label>
            <input type="text" name="nome" id="nome"><br><br>

            <label>RM</label>
            <input type="text" name="rm"><br><br>

            <label>Email insitucional</label>
            <input type="text" name="email"><br><br>

            <label>Curso</label>
            <select name="curso">
                <option value=""></option>
                <option value="Administração">Administração</option>
                <option value="Desenvolvimento de sistemas">Desenvolvimento de Sistemas</option>                
                <option value="Nutrição">Nutrição</option>
                <option value="Química">Química</option>
            </select><br> <br>

            <label>Período</label>
            <select name="periodo" >
                <option value=""></option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
                <option value="Integral">Integral</option>
            </select><br><br>

            <button type="submit">Enviar</button>
        </form>


</body>
</html>