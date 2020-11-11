<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/gameOver.css">
    <audio id="lose" src="templates/assets/audio/avadakedavra.mp3" autoplay></audio>
    <script src="js/colorblind.js"></script>
</head>

<body id="body" <?php if (isset($_SESSION['colorblind-data']) && $_SESSION['colorblind-data'] == "True") {
            echo "class = 'body-blindcolor'";
        } else {
            echo "class = 'body'";
        } ?>>
    <header id="header" <?php if (isset($_SESSION['colorblind-data']) && $_SESSION['colorblind-data'] == "True") {
            echo "class = 'header-blindcolor'";
        } else {
            echo "class = 'header'";
        } ?>>
        <div id="home_link_div">
            <a href="index.php" id="home_link" accesskey="h"><underline class="accesskey">H</underline>OME</a>
        </div>
        <div class="colorblind_button_div" title="MODO DALTÓNICO" onclick="click_colorblind()">
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
            <button class="button_play" onclick="location.href='ranking.php?do=save'" accesskey="g" <?php if (isset($_SESSION['rankPoints'])){
                $_SESSION['rankPoints'] = $_SESSION['rankPoints'] - 1000;
            }?>>
                <h4><underline class="accesskey">G</underline>UARDAR PUNTUACIÓN</h4>
            </button>
        </div>
    </main>
    <footer id="footer" <?php if (isset($_SESSION['colorblind-data']) && $_SESSION['colorblind-data'] == "True") {
            echo "class = 'footer-blindcolor'";
        } else {
            echo "class = 'footer'";
        } ?>>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
</body>

</html>