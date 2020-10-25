<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/gameOver.css">
    <link rel="stylesheet" href="templates/general.css">
</head>
<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link">HOME</a>
        </div>
    </header>
    <main>
        <div id="show_name">
            <?php
                $name = $_POST['username'];
                echo "Jugador: ".$name;
            ?>
        </div>
        <div class="container">
            <div id="scroll">
                <span>G</span><span>A</span><span>M</span><span>E</span><span>&nbsp;</span><span>O</span><span>V</span><span>E</span><span>R</span>
            </div>
        </div>
        <div id="button_div">
            <button id="button_play" onclick="location.href='index.php'"><h3>INICIO</h3></button>
        </div>
    </main>
    <footer>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
	<script type="text/javascript" src="main.js"></script>
</body>
</html>