<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Tarefas</title>
    <style>


        /*
           Paletas de Cores
        https://www.colourlovers.com/palette/4895301/Goodbye_January

        */

        /*Google fontes */
        /*Titulos*/
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap');

        /*Fonte paragrafos*/
        @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap');


        *{
            margin: 0;
            padding: 0;
        }
        h1, h2, h3{
            font-family: 'Kanit', sans-serif;

        }
        p{
            font-family: 'Cabin', sans-serif;
        }
        header.cabecalho{
            width: 100%;
            height: 150px;
            text-align: center;
            background-color: #770A07;
            margin-bottom: 15px;
        }
        header.cabecalho h1{
            padding-top: 45px;
            color: #fff;
        }
             fieldset{
            border: none;
        }  
        form{
            background-color: red;
            text-align: center;
            font-size: 20px;
            font-style: normal;
            font-weight: bolder;
        }

        table{
            text-align: center;
            width: 850px;
            height: 40px;
            background-color: #fff;
        }
        input.botao{
            padding: 5px 10px 5px  10px ;
            margin-left: 5px;
            border-radius: 40px;
            background-color: blue;
            color: #fff;
        }
         section.resultado{
             width: 850px;
            height: 250px;
       
            margin: auto;
            background-color: #ccc;
        } 
       footer.rodape{
        margin-top: 25px;
            width: 100%;
            height: 150px;
            background-color: blue;
            color: #fff;
        }
        footer.rodape h2{
            padding-top: 25px;
            text-align: center;
            font-size: 45px;
            font-weight: bolder;
            font-style: normal;
        }
        footer.rodape p{
            text-align: center;
            font-size: 25px;

        }
    </style>
</head>
<body>
    
    <header class="cabecalho">
        <h1>Gerencioador de Tarefas</h1>
    </header>


    <section class="resultado">
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Nome da Tarefa: 
                <input type="text" name="nome">
            </label>
            <input class="botao" type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php
       $lista_tarefas = array();

       if (isset($_GET['nome'])) {
        $_SESSION['lista_tarefas'] [] = $_GET['nome'];
       }

       $lista_tarefas = array();


       if (isset($_SESSION['lista_tarefas'])) {
           $lista_tarefas = $_SESSION['lista_tarefas'];
       }
    ?>
    

    <table>
   <tr>
            <th>Tarefas</th>
            <?php foreach ($lista_tarefas as $tarefas) : ?>
                <tr>
                    <td><?php echo $tarefas; ?></td>
                </tr>
                <?php endforeach; ?>
        </tr>          
    </table>
    </section>


    <footer class="rodape">
            <h2>Aqgoes</h2>
            <p>Desenvolvimento</p>
    </footer>
</body>
</html>