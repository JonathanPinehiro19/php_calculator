<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="index.css">
    <style>
        
    </style>
</head>

<body >
    

    <div class="container">
        <h1>Calculadora PHP</h1>
        <form method="post" action="ex1r.php">
            <label for="base">BASE:</label>
            <input type="text" id="base" name="base" required>
            <br>
            <label for="exp">EXPOENTE:</label>
            <input type="text" id="exp" name="exp" required>
            <br>
            <label for="operation">OPERAÇÃO:</label>
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
    </div>
    

    
</body>

</html>
