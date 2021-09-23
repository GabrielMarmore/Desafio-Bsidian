<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($titulo); ?></title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header,main,footer{
            font-family: Arial, Helvetica, sans-serif;
            margin: 10px 0;
        }
        main{
            max-width: 800px;
            min-width: 600px;
            margin: auto;

            padding: 15px;
        }
        h1,h2{
            font-size: 2.5rem;
            text-align: center;
            color: #8993C1;

            margin: 5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
        }
        table, table tr, table th, table td{
            border: 1px solid #000;
            padding: 5px;
        }
        table{
            margin: 5px;
        }
        a{
            font-size: 1.2rem;
            padding: 5px;
        }
        input{
            width:100%;
            margin: 3px 0;
            padding: 10px;
        }

        input[type="submit"]{
            width: auto;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid rgb(0, 0, 0);
            border-radius: 6px;
        }

        footer{
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Controle de Alunos</h1>
        <hr>
    </header>

