<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA PHP</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <style>
        body {
            background-image: url('https://iili.io/d86TiQe.md.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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

        input[type="text"] {
            align-items: center;
            width: 150px;
            padding: 4px;
            margin: 10px 0;
            font-size: 3em;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        select {
            width: 200px;
            padding: 8px;
            margin: 10px 0;
            font-size: 1em;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        input[type="submit"] {
            align-items: center;
            width: 90%;
            height: 90%;
            padding: 17px 40px;
            border-radius: 50px;
            cursor: pointer;
            border: 0;
            background-color: white;
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





        /* Estilização */
        /* From Uiverse.io by mobinkakei */
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

        .copyright {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 0.9em;
            color: #fff;
        }

        .loader_cube--color {
            z-index: 1;
            filter: blur(2px);
            background: linear-gradient(135deg, #2193b5, #b51d39);
            animation: loadtwo 2.5s ease-in-out infinite;
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
            <h1 style="font-size: 200%;">CALCULADORA PHP</h1>
            <form id="calc-form" method="post" action="ex1r.php">
                <!-- <label for="base">BASE</label> -->
                <input style="font-size: 30px;" type="text" id="base" name="base" placeholder="BASE" required>
                <br>
                <!-- <label for="exp">EXPOENTE</label> -->
                <input style="font-size: 30px;" type="text" id="exp" name="exp" placeholder="EXP" required>
                <br>
                <label for="operation">OPERAÇÃO</label>
                <br>
                <select id="operation" name="operation">
                    <option value="1">Soma</option>
                    <option value="2">Subtração</option>
                    <option value="3">Multiplicação</option>
                    <option value="4">Divisão</option>
                    <option value="5">Média</option>
                    <option value="6">Exponenciação</option>
                </select>
                <br>
                <input type="submit" value="Calcular">
            </form>

            <!-- Loader sempre ativo -->

        </div>
        <div class="loader_cube loader_cube--color"></div>
        <div class="loader_cube loader_cube--glowing"></div>
    </div>
    <div class="copyright">
        <p>© 2024 Jonathan Pinheiro</p>
    </div>




</body>

</html>