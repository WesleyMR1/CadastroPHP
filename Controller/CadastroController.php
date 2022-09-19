<?php

    //retornar em forma de session e depois destruir(unset)
    
    include '../Controller/DAO/conexao.php';
    $sql = "Insert into usuario(rm, nome email, curso, periodo) values (:rm, :nome, :email, :curso, :periodo);";
    $res = $pdo->prepare($sql);
    $res->bindParam(":rm", $formulario['rm']);
    $res->bindParam(":nome", $formulario['nome']);
    $res->bindParam(":email", $formulario['email']);
    $res->bindParam(":curso", $formulario['curso']);
    $res->bindParam(":periodo", $formulario['periodo']);



    $formulario = [
        "nome" => $_POST['nome'],
        "rm" => $_POST['rm'],
        "email" => $_POST['email'],
        "curso" => $_POST['curso'],
        "periodo" => $_POST['periodo']];
    
    
    
        if (!isset($_POST['rm']) == 0){
            if (!isset($_POST['nome']) == 0){
                if (!isset($_POST['email']) == 0){
                    if (!isset($_POST['curso']) == 0){
                        if (!isset($_POST['periodo']) == 0){
    
    
                            $formulario = [
                                "nome" =>$_POST['nome'],
                                "rm" =>$_POST['rm'],
                                "email" =>$_POST['email'],
                                "curso" =>$_POST['curso'],
                                "periodo" =>$_POST['periodo']];
    
    
                        }else{
                            echo "prencha o campo Período";
                        }
                    }else{
                        echo "prencha o campo Curso";
                    }
                }else{
                    echo "prencha o campo Email";
                }
            }else{
                echo "prencha o campo Nome";
            }
        }else{
            echo "prencha o campo RM";
        }

?>