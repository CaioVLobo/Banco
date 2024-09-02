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
            width: 200px;
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

        p {
            color: black;
            background-color: palegreen;
            margin: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: grey;
        }
        th {
            background-color: black;
            color: white;
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
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php
                include "conecta.php";
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($registro = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $registro["id"] . "</td>";
                        echo "<td>" . $registro["nome"] . "</td>";
                        echo "<td>" . $registro["email"] . "</td></tr>";
                    }
                } else {
                    echo "Nenhum registro encontrado!";
                }
                ?>
            </table>

        </div>
    </main>
</body>

</html>