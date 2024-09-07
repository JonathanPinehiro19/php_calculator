<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA PHP - Resultados</title>
    <style>
        body {
            color: #161623;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #161623;
        }

        .container {
            text-align: center;
            margin-top: 50px;
            z-index: 5;
        }

        h1 {
            color: #161623;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .operation-result {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            margin: 10px 0;
        }

        .operation-result h1 {
            margin: 0 10px;
        }

        input[type="text"] {
            width: 100px;
            padding: 4px;
            margin: 0 10px;
            font-size: 2em;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        label {
            font-size: 1.5em;
            color: #161623;
        }

        /* Estilos do botão */
        input[type="submit"] {
            width: 90%;
            height: 90%;
            padding: 17px 40px;
            border-radius: 50px;
            cursor: pointer;
            border: 0;
            background-color: #161623;
            box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 15px;
            transition: all 0.5s ease;
        }

        input[type="submit"]:hover {
            letter-spacing: 3px;
            background-color: hsl(261deg 80% 48%);
            color: hsl(0, 0%, 100%);
            box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
        }

        input[type="submit"]:active {
            letter-spacing: 3px;
            background-color: hsl(261deg 80% 48%);
            color: hsl(0, 0%, 100%);
            box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
            transform: translateY(10px);
            transition: 100ms;
        }

        /* Estilização dos loaders */
        .loader {
            z-index: 10;
            width: 400px;
            height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px auto;
        }

        .loader_cube {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 30px;
        }

        .loader_cube--glowing {
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .loader_cube--color {
            z-index: 1;
            filter: blur(2px);
            background: linear-gradient(135deg, #1afbf0, #da00ff);
            animation: loadtwo 2.5s ease-in-out infinite;
        }

        .copyright {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 0.9em;
            color: #fff;
        }

        @keyframes loadtwo {
            50% {
                transform: rotate(-90deg);
            }
        }
    </style>
</head>

<body>

    <div class="loader">

        <div class="container">
            <?php
            include_once('functions.php');

            $n1 = $_POST['base'];
            $n2 = $_POST['exp'];
            $op = $_POST['operation'];

            $base = (int)$n1;
            $exp = (int)$n2;

            switch ($op) {
                case '1': ?>
                    <h1>SOMA</h1>
                    <div class="operation-result">
                        <input type="text" value="<?php echo ($n1) ?>" readonly>
                        <h1>+</h1>
                        <input type="text" value="<?php echo ($n2) ?>" readonly>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo (soma($base, $exp)) ?></h1>
                <?php break;

                case '2': ?>
                    <h1>SUBTRAÇÃO</h1>
                    <div class="operation-result">
                        <input type="text" value="<?php echo ($n1) ?>" readonly>
                        <h1>-</h1>
                        <input type="text" value="<?php echo ($n2) ?>" readonly>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo (sub($base, $exp)) ?></h1>
                <?php break;

                case '3': ?>
                    <h1>MULTIPLICAÇÃO</h1>
                    <div class="operation-result">
                        <input type="text" value="<?php echo ($n1) ?>" readonly>
                        <h1>X</h1>
                        <input type="text" value="<?php echo ($n2) ?>" readonly>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo (multi($base, $exp)) ?></h1>
                <?php break;

                case '4': ?>
                    <h1>DIVISÃO</h1>
                    <div class="operation-result">
                        <input type="text" value="<?php echo ($n1) ?>" readonly>
                        <h1>÷</h1>
                        <input type="text" value="<?php echo ($n2) ?>" readonly>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo (div($base, $exp)) ?></h1>
                <?php break;

                case '5': ?>
                    <h1>MÉDIA</h1>
                    <div class="operation-result">
                        <input type="text" value="<?php echo ($n1) ?>" readonly>
                        <input type="text" value="<?php echo ($n2) ?>" readonly>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo (med($base, $exp)) ?></h1>
                <?php break;

                case '6': ?>
                    <h1>EXPONENCIAÇÃO</h1>
                    <div class="operation-result">
                        <h1><?php echo ($n1) ?><sup><?php echo ($n2) ?></sup></h1>
                    </div>
                    <label for="operation">Resultado:</label>
                    <h1><?php echo pow($n1, $n2) ?></h1>
            <?php break;

                default:
                    echo "<h1>Operação inválida</h1>";
                    break;
            }
            ?>
        </div>

        <div class="loader_cube loader_cube--color"></div>
        <div class="loader_cube loader_cube--glowing"></div>

    </div>
    <div class="copyright">
        <p>© 2024 Jonathan Pinheiro | Calculadora desenvolvida para fins acadêmicos.</p>
    </div>
</body>

</html>
