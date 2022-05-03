<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Funções</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: #B586E3;
        }

        main {
            width: 1000px;
            height: 2000px;
            margin: 50px auto 100px auto;
            padding: 50px;
            border: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 5px 3px 20px rgba(0, 0, 0, 0.48);
        }

        main h1 {
            font-family: 'Josefin Sans', sans-serif;
            text-align: center;
            padding: 10px;
            margin: 20px auto auto auto;
        }

        main p.descricao {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            text-indent: 40px;
            
        }

        main h2 {
            margin: 20px;
            font: normal normal 2em 'Bebas Neue', monospace;
        }

        p {
            font: normal normal 1em Arial;
            margin: 10px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Exercício de Funções</h1>
        <p class="descricao">Faça uma calculadora, usando funções para cada opção, utilizando no final um switch ou um if.</p>
        <hr>
        <h2>Criando as Funções</h2>
        <?php 
            function Adicao($arg1, $arg2) {
                $res = $arg1 + $arg2;
                return $res;
            }

            function Subtracao($arg1, $arg2) {
                $res = $arg1 - $arg2;
                return $res;
            }

            function Multiplicar($arg1, $arg2) {
                $res = $arg1 * $arg2;
                return $res;
            }

            function Divisao($arg1, $arg2) {
                $res = $arg1 / $arg2;
                return $res;
            }

            $sinal = "+"; // aqui escolhe qual operação irá ser feita

            switch ($sinal) {
                case "+": 
                    // vou retornar o valor da função para uma variável e assim conseguirei imprimi-la na tela
                    $res = Adicao(5, 5);
                    print($res);
                break;

                case "-":
                    $res = Subtracao(5, 5);
                    print($res);
                break;

                case "*":
                    $res = Multiplicar(5, 5);
                    print($res);
                break;

                case "/":
                    $res = Divisao(5, 5);
                    print($res);
                break;

                default: 
                    print("Sinto muito, colega, isso não dá.");
                break;
            }
        ?>
    </main>
</body>
</html>