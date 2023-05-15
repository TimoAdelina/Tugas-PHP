<?php 
$dbname='dbtoko';
$dsn='mysql:dbname='.$dbname.';host:localhost';
$user='root';$password='';



function getConection()
{

    $host = "localhost";
    $port = 3306;
    $database = "dbtoko";
    $username = "root";
    $password = "";

    return  new PDO("mysql:port=$host:$port;dbname=$database", $username, $password);
    
}

try{
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "koneksi suses";
}catch(PDOException $e){
   
   
   
    // echo 'database tidak konek'.$e->getMessage();
}