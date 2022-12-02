<?php
require 'config/conexion.php';
$query = mysqli_query($con, "SELECT * FROM notebooks");

$document = 'notebooks.xls';

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=' . $document);
header('Pragma: no-cache');
header('Expires: 0');

echo '<table border = 1>';
echo '<tr>';
echo '<th colspan = 13>Notebooks</th>';
echo '</tr>';
echo
'<tr>
            <th>Nro Inv</th>
            <th>Cod Rec</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>SN</th>
            <th>Estado</th>
            <th>Ubicacion</th>
            <th>Fecha de ingreso</th>
            <th>VGA</th>
            <th>HDMI</th>
            <th>Adicionales</th>
            <th>Sistema Operativo</th>
            <th>Lectora DVD</th>
        </tr>';
while($row = mysqli_fetch_array($query)){
    echo '<tr>';
    echo '<td>'.$row['nro_inv'].'</td>';
    echo '<td>'.$row['cod_rec'].'</td>';
    echo '<td>'.$row['marca'].'</td>';
    echo '<td>'.$row['modelo'].'</td>';
    echo '<td>'.$row['sn'].'</td>';
    echo '<td>'.$row['estado'].'</td>';
    echo '<td>'.$row['ubicacion'].'</td>';
    echo '<td>'.$row['fecha_Ingreso'].'</td>';
    echo '<td>'.$row['vga'].'</td>';
    echo '<td>'.$row['hdmi'].'</td>';
    echo '<td>'.$row['adicionales'].'</td>';
    echo '<td>'.$row['s_op'].'</td>';
    echo '<td>'.$row['lectora_DVD'].'</td>';
    echo '</tr>';
}
echo '</table>';

