<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="templates/lib.css">
    <link rel="stylesheet" href="templates/start.css">
    <link rel="stylesheet" href="templates/general.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link" accesskey="h">HOME</a>
        </div>
    </header>
    <div id="show_name">
        <?php
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            if (isset($_SESSION['user']) && $_SESSION['user'] != $_POST['username']) {
                session_unset();
            }
            if (isset($_SESSION['user'])) {
                echo 'Jugador: ' . $_SESSION['user'];
            } else {
                $_SESSION['user'] = $username;

                echo 'Jugador: ' . $_SESSION['user'];
            }
        } else {
            if (isset($_SESSION['user'])) {
                echo 'Jugador: ' . $_SESSION['user'];
            }
        }
        if (isset($_SESSION['lvl'])) {
            if ($_GET["do"] == "next") {
                $_SESSION['lvl'] = $_SESSION['lvl'] + 1;
            }
        } else {
            $_SESSION['lvl'] = 0;
        }
        $archivo = file('templates/config.txt');
        $nivel = explode(";", $archivo[$_SESSION['lvl']]);
        $filas = explode("x", $nivel[1]);
        $randArray = [];
        $randNum = [];
        echo "</br>Nivel: " . $nivel[0];
        ?>
    </div>
    <script src="js/playing.js"></script>
    <div class=" maxwd just-cont-center ds-flex">
        <div>
            <?php

            for ($m = 1; $m <= $nivel[2]; $m++) {
                $randNum = rand(0, ($filas[0] * $filas[1]) - 1);
                if (in_array($randNum, $randArray)) {
                    $m = $m - 1;
                } else {
                    array_push($randArray, $randNum);
                }
            }
            //echo "<PRE>" . print_r($_SESSION['lvl'], true) . "</PRE>";
            //0. NOM, 1. MATRIU, 2. PINTAR 3. SEGS, 4.CODI 

            $cont = 0;
            //echo "<PRE>" . var_export($nivel, true) . "</PRE>";

            echo " <table class='tg'><tbody>";
            for ($i = 1; $i <= $filas[0]; $i++) {
                echo "<tr>";
                for ($x = 1; $x <= $filas[1]; $x++) {
                    if (in_array($cont, $randArray)) {
                        echo "<td class='tg plus'  id='. $cont . ' onclick='choose(this.id)' '></td>";
                        $cont = $cont + 1;
                    } else {
                        echo "<td class='tg' id='. $cont . ' onclick='choose(this.id)'></td>";
                        $cont = $cont + 1;
                    }
                }
                echo "</tr>";
            }
            echo " </tbody> </table>";
            //echo "<PRE>" . print_r($filas, true) . "</PRE>";
            ?>

            <div class=" ds-flex just-space-around">
                <a class="btn-start" onclick="showNices()" accesskey="i">INICIAR PARTIDA</a>
                <a class="btn-start" onclick="winorlose()" accesskey="s">RESOLVER</a>
            </div>
        </div>
    </div>
    <footer>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>