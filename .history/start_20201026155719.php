<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/lib.css">
    <link rel="stylesheet" href="templates/start.css">
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
                $_SESSION['user'] = $_POST['username'];
                if (isset($_SESSION['user']))
                    echo 'Jugador: '.$_SESSION['user'];
            ?>
        </div>
        <div class="container maxwd just-cont-center ds-flex">
            <div>
                <table class="tg">
                    <tbody>
                        <tr>
                            <td class="tg nice"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg nice"></td>
                            <td class="tg"></td>
                        </tr>
                        <tr>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg nice"></td>
                            <td class="tg nice"></td>
                        </tr>
                        <tr>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg nice"></td>
                            <td class="tg"></td>
                        </tr>
                        <tr>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg nice"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                        </tr>
                        <tr>
                            <td class="tg"></td>
                            <td class="tg nice"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                            <td class="tg"></td>
                        </tr>
                    </tbody>
                </table>
                <div class=" ds-flex just-space-around">
                    <a class="btn-start">INICIAR PARTIDA</a>
                    <a class="btn-start">RESOLVER</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
</body>
</html>