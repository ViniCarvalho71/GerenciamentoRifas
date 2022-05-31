
<?php 
/*$hostname = "sql102.epizy.com";
$dbname = "epiz_31454026_RIFAS";
$username = "epiz_31454026";
$password = "RLvpAkgFJNv";*/

$hostname = "localhost";
$dbname = "rifa";
$username = "root";
$password = "";

try {
    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexão realizada com sucesso';
} catch(PDOException $e) {
    echo 'Erro:'.$e->getMessage();
}