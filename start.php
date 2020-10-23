<link rel="stylesheet" href="templates/lib.css">
<link rel="stylesheet" href="templates/start.css">
<div class=" maxwd just-cont-center ds-flex">
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
            <a class="btn-start">INICIA PARTIDA</a>
            <a class="btn-start">RESOLDRE</a>
        </div>
    </div>
</div>
<?php
//0. NOM, 1. MATRIU, 2. PINTAR 3. SEGS, 4.CODI 
$archivo = file('datos/prueba.txt');
$nivel = explode(";", $archivo[0]);
$cont = 0;
//echo "<PRE>" . var_export($nivel, true) . "</PRE>";
$filas = explode("x", $nivel[1]);
echo " <table class='tg'><tbody>";
for ($i = 1; $i <= $filas[0]; $i++) {
    echo "<tr>";
    for ($x = 1; $x <= $filas[1]; $x++) {
        echo "<td class='tg'><span class='tg' id=" . $cont . "></span></td>";
        $cont = $cont + 1;
    }
    echo "</tr>";
}
echo " </tbody> </table>";
//echo "<PRE>" . print_r($filas, true) . "</PRE>";
?>