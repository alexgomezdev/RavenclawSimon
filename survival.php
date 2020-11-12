<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/failcode.css">
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
            <a href="index.php" id="home_link" accesskey="h"><underline class='accesskey'>H</underline>OME</a>
        </div>
        <div class="colorblind_button_div" title="MODO DALTÓNICO" onclick="click_colorblind()">
            <img src="templates/assets/icono_daltonico.png" alt="Modo daltónico" id="colorblind_icon">
        </div>
    </header>
    <main>
    <div id="show_error">
        <p id="error">Aún no has encontrado todos los horrocruxes, vuelve más tarde.</p>
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