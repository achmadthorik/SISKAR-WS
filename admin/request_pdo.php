<?php
$provider = 'mysql';
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'kebakaran';

header("Content-Type: application/json", true);

try {
    $conn = new PDO("{$provider}:host={$hostname};dbname={$database}", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlCommand = 'SELECT `api`, `asap`, `status`, `waktu` FROM `api` ORDER BY `waktu` DESC LIMIT 1';

    $stmt = $conn->prepare($sqlCommand);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    echo json_encode($result[0]);
} catch (Exception $e) {
    echo ', gagal ->  :(((';
}