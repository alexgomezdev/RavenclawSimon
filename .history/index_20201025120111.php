<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/index.css">
</head>
<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link">HOME</a>
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
        <form  method="POST" action="success.php">
            <div id="name_introduction">
                <label for="username">Introduce tu nombre: </label><input type="text" id="username" name="username" placeholder="Ej. Iker" required oninvalid="this.setCustomValidity('Introduce un nombre')" onchange="this.setCustomValidity('')">
            </div>
            <div id="button_div">
                <button id="button_play"><h3>JUGAR</h3></button>
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