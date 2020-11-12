<!DOCTYPE html>
<?php
session_start();
if (isset($_POST['lier'])){
    if (!isset($_SESSION['mode'])){
        $_SESSION['mode'] = 1;
    }
}else {
    if (isset($_SESSION['mode'])){
        $_SESSION['mode'] = 1;
    }else{
        $_SESSION['mode'] = 0;
    }
}
$archivo = file('templates/config.txt');

if (isset($_POST['level'])) {
    $code = $_POST['level'];
    foreach ($archivo as $linea){
        if (!empty($code)){
            $pos = strpos($linea, $code) ;
            if ($pos !==  false){
                //echo "<PRE>" . print_r('La cadena se encontro', true) . "</PRE>";
                $keyCode = array_search($linea, $archivo);
                unset($_POST['level']);
                unset($code);
                break;
    
            }
            
        }

        //echo "<PRE>" . print_r($linea, true) . "</PRE>";
    }
    

    
}  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/lib.css">
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/start.css">
    <audio id="start" src="templates/assets/audio/start.wav"></audio>
    <audio id="select" src="templates/assets/audio/select.mp3"></audio>
    <audio id="solve" src="templates/assets/audio/revelio.mp3"></audio>
    <script src="js/colorblind.js"></script>
</head>
<?php 
    if (isset($_POST['colorblind_data'])) {
            $_SESSION['colorblind-data'] = $_POST['colorblind_data'];
        }
?>
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
            <a href="index.php" id="home_link" accesskey="h">
                <underline class="accesskey">H</underline>OME
            </a>
        </div>
        <div class="colorblind_button_div" title="MODO DALTÓNICO" onclick="click_colorblind()">
            <img src="templates/assets/icono_daltonico.png" alt="Modo daltónico" id="colorblind_icon">
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
                if ($username == 'Harry' && !isset($harryValidation)){
                    $harryValidation = 1;
                    echo '<br>Por las barbas de Merlin!, tenemos aqui a harry, toma 1000 zafiros extra.';
                }
            }
        } else {
            if (isset($_SESSION['user'])) {
                echo 'Jugador: ' . $_SESSION['user'];
            }
        }
        if (isset($keyCode)){   
            $_SESSION['lvl'] = $keyCode;
            unset($keyCode);
        }else{
            if (isset($_SESSION['lvl'])) {
                if (isset($_GET["do"]) && $_GET["do"] == "next") {
                    $_SESSION['rankPoints'] = $_SESSION['rankPoints'] + 1000;
                    $_SESSION['lvl'] = $_SESSION['lvl'] + 1;
                } else if (isset($_GET["do"]) && $_GET["do"] == "tryagain") {
                    $_SESSION['rankPoints'] = $_SESSION['rankPoints'] - 50;
                }
            } else {
                $_SESSION['lvl'] = 0;
            }
        }
        if (!isset($_SESSION['rankPoints'])) {
            if (isset($_SESSION['user']) && isset($_SESSION['$harryValidation']) && $harryValidation == 1 ){
                $_SESSION['rankPoints'] = $_SESSION['rankPoints'] = $_SESSION['rankPoints'] + 1000;
                $harryValidation = 2;
            }else{
                $_SESSION['rankPoints'] = 1000;
            }
        }
       
        $nivel = explode(";", $archivo[$_SESSION['lvl']]);    
        $filas = explode("x", $nivel[1]);
        $randArray = [];
        $randNum = [];
        $segons = $nivel[3] * 1000;
        echo "</br>Nivel: " . $nivel[0];
        ?>
         <script type="text/javascript">
            var lier = <?php echo $_SESSION['mode']; ?>
        </script>
        <script type="text/javascript">
            var segons = <?php echo $segons; ?>
        </script>
        <div class="timer">
            <p>Tiempo: <span id="countdown"></span></p>
        </div>
    </div>
    <div id="timer">
        <div id="progress">
            <div id="bar">
                <div id="label"></div>
            </div>
        </div>    
    </div>
    <script src="js/playing.js"></script>
    <div class="maxwd just-cont-center ds-flex">
        <div class="table">
            <?php
            
            for ($m = 1; $m <= $nivel[2]; $m++) {
                $randNum = rand(0, ($filas[0] * $filas[1]) - 1);
                if (in_array($randNum, $randArray)) {
                    $m = $m - 1;
                } else {
                    array_push($randArray, $randNum);
                }
            }

            // echo "<PRE>" . print_r($arrayprueba, true) . "</PRE>";
            //0. NOM, 1. MATRIU, 2. PINTAR 3. SEGS, 4.CODI 

            $cont = 0;
            //echo "<PRE>" . var_export($nivel, true) . "</PRE>";
            
            echo " <table class='tg'><tbody>";
            for ($i = 1; $i <= $filas[0]; $i++) {
                echo "<tr>";
                for ($x = 1; $x <= $filas[1]; $x++) {
                    if (in_array($cont, $randArray)) {
                        echo "<td class='tg plus'  id='. $cont . ' ' '></td>";
                        $cont = $cont + 1;
                    } else {
                        echo "<td class='tg' id='. $cont . ' '></td>";
                        $cont = $cont + 1;
                    }
                }
                echo "</tr>";
            }
            echo " </tbody> </table>";
            //echo "<PRE>" . print_r($filas, true) . "</PRE>";
            ?>
        </div>
        <div class=" ds-flex just-space-around">
            <div id="button_div">
                <button class="button_play" id="start_game_button" onclick="showNices(); updateClock(); move(); start()" accesskey="i">
                    <h3><underline class="accesskey">I</underline>NICIAR PARTIDA</h3>
                </button>
                <button class="button_play" id="solve_button" onclick="winorlose()" onmouseover="solve()" accesskey="s" disabled>
                    <h3>RE<underline class="accesskey">S</underline>OLVER</h3>
                </button>
            </div>
        </div>
    </div>
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