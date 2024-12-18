<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&family=Press+Start+2P&display=swap" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="./css/main.css">
    <title>Document</title>
    <script type="text/javascript" src="./js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="menu">
      <div class="menu-time">
        <h2 style="color: red;">Time Left</h2>
        <h2 id="time-left">0</h2>
      </div>
      <div class="menu-score">
        <h2 style="color: red;">Your Score</h2>
        <h2 id="score">0</h2>
      </div>
      <div class="menu-lives">
        <img src="./images/player.png" alt="foto do jogador" height="60px" />
        <h2>x3</h2>
      </div>
    </div>

    <div class="panel">
      <div class="panel-row">
        <div class="square " id="1"></div>
        <div class="square" id="2"></div>
        <div class="square" id="3"></div>
      </div>

      <div class="panel-row">
        <div class="square enemy" id="4"></div>
        <div class="square" id="5"></div>
        <div class="square" id="6"></div>
      </div>

      <div class="panel-row">
        <div class="square" id="7"></div>
        <div class="square" id="8"></div>
        <div class="square" id="9"></div>
      </div>
    </div>
  </div>
</body>

</html>