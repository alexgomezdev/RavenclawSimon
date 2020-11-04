<!DOCTYPE html>
<html>
<?php
//prueba
session_start();
?>

<head>
    <meta charset="UTF-8">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/index.css">
</head>

<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link" accesskey="h"><span class='accesskey'>H</span>OME</a>
        </div>
        <div id="ranking_link_div">
            <a href="ranking.php" id="ranking_link" accesskey="r"><span class='accesskey'>R</span>ANKING</a>
        </div>
    </header>
    <main>
        <div id="title">
            <h1>Ravenclaw Simon</h1>
        </div>
        <div class="container">
            <div id="img">
                <img src="templates/assets/home_img.png" alt="Simon Game">
            </div>
            <div id="manual">
                <p id="manual_paragraph">
                    ¡Bienvenido al mejor juego de destreza visual!
                    <br>
                    <br>
                    1. Introduce tu nombre y clica a "Jugar".
                    <br>
                    2. En pantalla aparecerá una tabla. Clica a "Iniciar partida" para empezar.
                    <br>
                    3. Memoriza las casillas que se iluminan durante un tiempo determinado.
                    <br>
                    4. Clica en las casillas que creas que se han iluminado y pincha en "Resolver".
                    <br>
                    <br>
                    ¡Diviertete!
                </p>
            </div>
        </div>
        <form method="POST" action="start.php">
            <div id="name_introduction">
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<label for='username'>Introduce tu nombre: </label><input type='text' id='username' name='username' placeholder='Ej. Iker' value='" . $_SESSION['user'] . "' required oninvalid='this.setCustomValidity(\"Introduce un nombre\")' onchange='this.setCustomValidity(\"\")'>";
                } else {
                    echo '<label for="username">Introduce tu nombre: </label><input type="text" id="username" name="username" placeholder="Ej. Iker" required oninvalid="this.setCustomValidity(\'Introduce un nombre\')" onchange="this.setCustomValidity(\'\')">';
                }
                ?>
            </div>
            <div id="button_div">
                <button id="button_play" accesskey="j">
                    <h3>JUGAR</h3>
                </button>
            </div>
        </form>
    </main>
    <footer>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
</body>

</html>