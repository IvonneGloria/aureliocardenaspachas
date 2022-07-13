<?php
$sqlAct = 'SELECT * FROM cargo';
$queryAct = mysqli_query($conn, $sqlAct);
while ($rowAct = mysqli_fetch_array($queryAct)) {
    $idcargoAct = $rowAct['idCargo'];
    $nombreCargoAct = $rowAct['nombre'];
?>
    <option value="<?php echo $idcargo ?>"><?php echo $nombreCargoAct ?></option>
<?php
}
?>