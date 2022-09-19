<?php
    session_start();

    //retornar em forma de session e depois destruir(unset)
    
    require '../Controller/DAO/conexao.php';
    


    $formulario = [
        "nome" => $_POST['nome'],
        "rm" => $_POST['rm'],
        "email" => $_POST['email'],
        "curso" => $_POST['curso'],
        "periodo" => $_POST['periodo']];

    $_SESSION['rm'] = $_POST['rm'];
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['curso'] = $_POST['curso'];
    $_SESSION['periodo'] = $_POST['periodo'];



        if (strlen($_POST['rm']) == 0) {

            $_SESSION['msg'] = "prencha o campo RM";
           header("Location: ../View/index.php");

        } else {

            if (strlen($_POST['nome']) == 0){
                $_SESSION['msg'] = "prencha o campo Nome";
                header("Location: ../View/index.php");

            }else{

                if (strlen($_POST['email']) == 0){
                $_SESSION['msg'] = "prencha o campo Email";
                    header("Location: ../View/index.php");

                }else {

                    if (strlen($_POST['curso']) == 0){                        
                        $_SESSION['msg'] = "prencha o campo Curso";
                        header("Location: ../View/index.php");

                    }else {

                        if (strlen($_POST['periodo']) == 0){
                            $_SESSION['msg'] = "prencha o campo Período";
                            header("Location: ../View/index.php");                        
                        
                        }else{
                            //verificação de campos concluida

                            $sql = "Insert into usuario(rm, nome email, curso, periodo) values (:rm, :nome, :email, :curso, :periodo);";
                            $res = $pdo->prepare($sql);
                            $res->bindParam(':rm', $_POST['periodo']);
                            $res->bindParam(':nome', $_POST['periodo']);
                            $res->bindParam(':email', $_POST['periodo']);
                            $res->bindParam(':curso', $_POST['periodo']);
                            $res->bindParam(':periodo', $_POST['periodo']);
                            $res->execute();
                            echo "tudo certo";
                        }
                    }
                }

            }
        }






        


?>