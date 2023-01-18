<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="calculadora.css">
    </head>

    <body>
    <div>
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="calculadora.css" />
    </div>
        <div class="container">
            <div class="result">
                <span>0</span>
            </div>
            <div class="buttons">
                <button class="item item1 clear">AC</button>
                <button class="item item1 negative" value="+/-">+/-</button>
                <button class="item percent sign" value="%">%</button>
                <button class="item item3 sign" value="/">/</button>
                <button class="item numbers" value="7">7</button>
                <button class="item numbers" value="8">8</button>
                <button class="item numbers" value="9">9</button>
                <button class="item item3 sign" value="x">x</button>
                <button class="item item numbers" value="4">4</button>
                <button class="item item numbers" value="5">5</button>
                <button class="item item numbers" value="6">6</button>
                <button class="item item3 sign" value="/">-</button>
                <button class="item item numbers" value="1">1</button>
                <button class="item item numbers" value="2">2</button>
                <button class="item item numbers" value="3">3</button>
                <button class="item item3 sign" value="+">+</button>
                <button class="item itemZero numbers" value="0">0</button>
                <button class="item comma">,</button>
                <button class="item item3 equals">=</button>
            </div>
        </div>

        <script src="IndexCalculadora.js"></script>

    </body>

</html>