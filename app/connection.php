<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 03/05/2018
 * Time: 11:07 PM
 */

$serverName = "localhost"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array("Database" => "00000000000", "UID" => "sa", "PWD" => "123456");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    //echo "Conexión establecida.<br />";
    return $conn;
} else {
    echo "Conexión no se pudo establecer.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>
