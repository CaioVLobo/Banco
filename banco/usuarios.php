<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        ul {
            display: flex;
            list-style: none;
            background-color: black;
            font-size: 21px;
        }

        li {
            padding: 5px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            background: lightcoral;
            color: black;
            padding: 10px;
        }

        img {
            width: 30%;
            height: 30%;
            background-color: lightskyblue;
        }

        main {
            margin: 10px;
        }

        #dados {
            background-color: black;
            width: 80%;
            height: 80%;
            color: white;
            border: 2px solid;
            border-radius: 10px;
            padding: 10px;
        }
        p{
            color: black;
            background-color: grey;
            margin: 10px;
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contatos</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Login</a></li>

        </ul>
    </header>
    <main>
        <div id="img">
            <img src="Arrasca.jpg">
        </div>
        <div id="dados">
        <?php
            include "conecta.php";

            $sql = "SELECT id, nome, senha, email FROM usuario";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<p> id: " . $registro["id"] . " nome: " . $registro["nome"] .
                        " senha: " . $registro["senha"] . "email:" . $registro["email"] . "</p>";
                }
            } else {
                echo "Nenhum registro encontrado!";
            }
            ?>
        </div>
    </main>
</body>

</html>