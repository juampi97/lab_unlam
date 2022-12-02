<?php
require 'config/conexion.php';
$query = mysqli_query($con, "SELECT * FROM instrumentos");

$document = 'instrumentos.xls';

header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=' . $document);
header('Pragma: no-cache');
header('Expires: 0');

echo '<table border = 1>';
echo '<tr>';
echo '<th colspan = 14>Instrumentos</th>';
echo '</tr>';
echo
'<tr>
            <th>Nro Inv</th>
            <th>Cod Rec</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>SN</th>
            <th>AB - Rango</th>
            <th>Cod. Manual</th>
            <th>Especificaciones</th>
            <th>Estado</th>
            <th>Ubicacion</th>
            <th>Adicionales</th>
            <th>Fecha de ingreso</th>
        </tr>';
while($row = mysqli_fetch_array($query)){
    echo '<tr>';
    echo '<td>'.$row['nro_inv'].'</td>';
    echo '<td>'.$row['cod_rec'].'</td>';
    echo '<td>'.$row['tipo'].'</td>';
    echo '<td>'.$row['descripcion'].'</td>';
    echo '<td>'.$row['marca'].'</td>';
    echo '<td>'.$row['modelo'].'</td>';
    echo '<td>'.$row['sn'].'</td>';
    echo '<td>'.$row['ab_rango'].'</td>';
    echo '<td>'.$row['cod_manual'].'</td>';
    echo '<td>'.$row['especificaciones'].'</td>';
    echo '<td>'.$row['estado'].'</td>';
    echo '<td>'.$row['ubicacion'].'</td>';
    echo '<td>'.$row['adicionales'].'</td>';
    echo '<td>'.$row['fecha_ingreso'].'</td>';
    echo '</tr>';
}
echo '</table>';
