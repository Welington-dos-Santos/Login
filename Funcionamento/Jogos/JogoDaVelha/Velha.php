<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Velha.css">
    <title>Jogo da Velha</title>
</head>
<body>
    <div>
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="velha.css" />
    </div>   
    <main class="container">
        <h1>JOGO DA VELHA</h1>
            <hr />
        <div class="game">
            <button data-i="1"></button>
            <button data-i="2"></button>
            <button data-i="3"></button>
            <button data-i="4"></button>
            <button data-i="5"></button>
            <button data-i="6"></button>
            <button data-i="7"></button>
            <button data-i="8"></button>
            <button data-i="9"></button>
        </div>
            <h2 class="currentPlayer"></h2>
    </main>
    <script src="Velha.js"></script>
</body>
</html>