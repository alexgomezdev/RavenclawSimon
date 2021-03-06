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
    <link rel="stylesheet" href="templates/ranking.css">
    <audio id="lose" src="templates/assets/audio/ranking.mp3" autoplay></audio>
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
        <div class="container">
            <table id="table">
                <caption> La clasificación de los zafiros aportados a Ravenclaw va asi:</caption>
                <thead>
                    <tr id="row_head">
                        <th>NOMBRE</th>
                        <th>PUNTUACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($_GET["do"]) && $_GET["do"] == "save"){
                            if (isset($_SESSION['user']) && isset($_SESSION['rankPoints']) ){
                                $rankToWrite = fopen('ranking.txt',"a");
                                $toWrite=htmlspecialchars($_SESSION['user']).";".$_SESSION['rankPoints']."\r\n";
                                fwrite($rankToWrite,$toWrite);
                                fclose($rankToWrite);
                            }
                        }
                        $users =[];
                        $rank = file('ranking.txt', FILE_IGNORE_NEW_LINES);
                        foreach ($rank as $player) {
                            list($user, $punctuation) = explode(";", $player);
                            intval($punctuation);
                            array_push($users, ["user" => $user, "punctuation" => $punctuation]);
                        }
                        usort($users, function ($item1, $item2) {
                            return $item2['punctuation'] > $item1['punctuation'];
                        });
                        foreach ($users as $data) {
                            echo "<tr><td>".$data["user"]."</td><td>".$data["punctuation"]." <img src='templates/assets/sapphire.png' alt='Sapphire' id='sapphire'></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
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