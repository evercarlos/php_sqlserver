<?php
/**
 * Created by PhpStorm.
 * User: ECR
 * Date: 03/05/2018
 * Time: 11:07 PM
 */
$conn = require_once 'app/connection.php';

$sql = "SELECT * FROM ERP_marcas";
$result = sqlsrv_query($conn, $sql);
while ($row = sqlsrv_fetch_array($result)) {
    $dat[] = [
        'description' => $row['description']
    ];
}


echo json_encode([
    'data' => $dat
]);