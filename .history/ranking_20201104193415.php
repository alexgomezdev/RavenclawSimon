<!DOCTYPE html>
<html>
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>Ravenclaw Simon</title>
    <link rel="stylesheet" href="templates/general.css">
    <link rel="stylesheet" href="templates/ranking.css">
</head>
<body>
    <header>
        <div id="home_link_div">
            <a href="index.php" id="home_link" accesskey="h"><span class="accesskey">H</span>OME</a>
        </div>
    </header>
    <main>
        <div class="container">
            <table>
                <caption> La clasificación de los puntos aportados a Ravenclaw va asi:</caption>
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
                            echo "<tr><td>".$data["user"]."</td><td>".$data["punctuation"]." <img src='templates/assets/sapphire.png' alt='Sapphire'></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <div id="footer_content">
            &#0169 2020 - Creado por: Silvia de la Cruz, Álex Gomez e Iker Cayero
        </div>
    </footer>
</body>
</html>