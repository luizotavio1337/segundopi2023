<?php

   if(isset($_POST['submit']))
   {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $mensagem = $_POST['mensagem'];
 
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,sexo,mensagem) 
    VALUES ('$nome','$email','$sexo','$mensagem')");
    }

   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="forum.css">
    <title>Fórum</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
            .box{
                position: absolute;
                top: 55%;
                left: 50%;
                transform: translate(-50%,-50%);
                background-color: rgba(0,0,0,0.6);
                padding: 15px;
                border-radius: 15px;
                width: 20%;
                color: white;
            }
            fieldset{
                border: 3px solid dodgerblue;
            }
            legend{
                border: 1px solid dodgerblue;
                padding: 10px;
                text-align: center;
                background-color: dodgerblue;
                border-radius: 8px;
            }
            .inputBox{
                position: relative;
            }
            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }
            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput{
                top: -20px;
                font-size: 12px;
                color: dodgerblue;
            }
            #submit{
                background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
            }
            #submit:hover{
                background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
            }

            .echo{
                color:black;
            }
    </style>
</head>
<body>
    <header>
        <nav class="conteudo">         
            <h1 class="titulo">MUSCULOFIT<span class= "textoColorido">TREINO</h1></span>
            <ul class="nav-list">
            <li><a href="../index.html">Início</a></li>
            <li><a href="../index.html">Dicas Alimentares</a></li>
            <li><a href="./forum.php">Fórum</a></li>
            </ul>
            </nav>
        </header>
    <div class="box">
        <form action="forum.php" method="POST">
            <fieldset>
                <legend><b>Cadastro do Fórum</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label>Mensagem</label>
                <br><br>
                <textarea name="mensagem" id="mensagem "cols="15" rows="5" placeholder="Digite sua mensagem"></textarea>
                <input type="submit" name="submit" id="submit">
<br>

        </fieldset>
        <?php
if(isset($_POST['submit']))
{
    echo"Agradecemos muito pelo seu feedback,
    em breve entraremos em contato!";
}
?>
    </form>
</body>
</html>


        