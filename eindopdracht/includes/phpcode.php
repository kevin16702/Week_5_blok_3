<?php


function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mysql";
$db = "databank_php";
try{
$conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
return $conn;
}
$conn = OpenCon();


$idsql = "SELECT id FROM characters ORDER BY name ASC";
$idresult = $conn->query($idsql);
$idanswer = $idresult->fetchall(PDO::FETCH_ASSOC);
$idcount = count($idanswer)-1;
  ?>