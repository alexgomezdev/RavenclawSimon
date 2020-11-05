<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/success.css">
    <link rel="stylesheet" href="templates/general.css">
    <audio id="lose" src="templates/assets/audio/success.mp3" autoplay></audio>
</head>

<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link" accesskey="h"><underline class="accesskey">H</underline>OME</a>
        </div>
    </header>
    <main>
        <div id="show_name">
            <?php
            $archivo = file('templates/config.txt');
            $nivel = explode(";", $archivo[$_SESSION['lvl']]);
            if (isset($_SESSION['user'])) {
                echo 'Jugador: ' . $_SESSION['user'];
            }
            if (isset($_SESSION['rankPoints']) && isset($_GET['tiempo']) ) {
                $_SESSION['rankPoints'] = $_SESSION['rankPoints'] - $_GET['tiempo'];
            }
            ?>
        </div>
        <div class="container">
            <div id="scroll">
                <h1 class="ani"><span>¡</span><span>N</span><span>I</span><span>V</span><span>E</span><span>L</span><span> </span><span>S</span><span>U</span><span>P</span><span>E</span><span>R</span><span>A</span><span>D</span><span>O</span><span>!</span></h1>
            </div>
            <div id="code">
                <?php echo '<p> Código: ' . $nivel[4] . '</p>' ?>
            </div>
        </div>

        <div id="button_div">
            <button class="button_play" onclick="location.href='start.php?do=tryagain' accesskey="v">
                <h3><underline class="accesskey">V</underline>OLVER A PROVAR</h3>
            </button>
            <button class="button_play" onclick="location.href='start.php?do=next'" accesskey="n">
                <h3>SIGUIENTE <underline class="accesskey">N</underline>IVEL</h3>
            </button>
            <button class="button_play" onclick="location.href='ranking.php?do=save'" accesskey="g">
                <h4><underline class="accesskey">G</underline>UARDAR PUNTUACIÓN</h4>
            </button>
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