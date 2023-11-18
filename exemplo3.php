<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exemplo3</title>
    <style>
        body{
            box-sizing: border-box;
            margin: 20px;
            text-align: center;
        }
        form{
            background-color: rgba(155,100,200,150);
            padding: 10px;
            margin: 5px;
            width: 40%;
        }
        label,input{
            padding: 6px;
            margin: 1px;
            width: 70%;
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    <h2>Exemplo 3</h2>
    <h3>Utilizando formulários</h3>
    <form action="index.php" >
        <label for= "nome">Nome:</label><br>
        <input id="nome" type="text" name="nome"><br>
        <label for="senha">Senha:</label><br>
        <input id="senha" type="password" name="senha"><br>
        <br><input type="submit">
    </form>
</body>
</html>