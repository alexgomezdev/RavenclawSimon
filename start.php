<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="templates/lib.css">
    <link rel="stylesheet" href="templates/start.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="js/playing.js"></script>
    <div class=" maxwd just-cont-center ds-flex">
        <div>
            <?php
            $archivo = file('datos/prueba.txt');
            $nivel = explode(";", $archivo[0]);
            $filas = explode("x", $nivel[1]);
            $randArray = [];
            $randNum = [];
            for ($m = 1; $m <= $nivel[2]; $m++) {
                $randNum = rand(0, ($filas[0] * $filas[1]) - 1);
                if (in_array($randNum, $randArray)) {
                    $m = $m - 1;
                } else {
                    array_push($randArray, $randNum);
                }
            }
            //echo "<PRE>" . print_r($randArray, true) . "</PRE>";
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
                        echo "<td class='tg' id='. $cont . '></td>";
                        $cont = $cont + 1;
                    }
                }
                echo "</tr>";
            }
            echo " </tbody> </table>";
            //echo "<PRE>" . print_r($filas, true) . "</PRE>";
            ?>

            <div class=" ds-flex just-space-around">
                <a class="btn-start" onclick="showNices()">INICIA PARTIDA</a>
                <a class="btn-start">RESOLDRE</a>
            </div>
        </div>
    </div>
</body>

</html>