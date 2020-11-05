<!DOCTYPE html>
<?php
session_start();
?>
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
            <a href="index.php" id="home_link" accesskey="h"><underline class="accesskey">H</underline>OME</a>
        </div>
        <div id="colorblind_button_div">
            <img src="templates/assets/icono_daltonico.png" alt="Modo daltónico" id="colorblind_icon">
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
            ?>
        </div>
        <div class="container">
            <div id="scroll">
                <span>G</span><span>A</span><span>M</span><span>E</span><span>&nbsp;</span><span>O</span><span>V</span><span>E</span><span>R</span>
            </div>
            <div id="code">
                <?php echo '<p> Código: ' . $nivel[4] . '</p>' ?>
            </div>
        </div>
        <div id="button_div">
            <button class="button_play" onclick="location.href='start.php?do=tryagain'" accesskey="v">
                <h3><underline class="accesskey">V</underline>OLVER A PROVAR</h3>
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