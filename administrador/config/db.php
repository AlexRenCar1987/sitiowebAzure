
<?php

/*
$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "dbarctechology.mysql.database.azure.com", "arc_technology@dbarctechology", {your_password}, {your_database}, 3306);
*/

$host = "dbarctechology.mysql.database.azure.com";
$bd = "arc_technology";
$usuario = "arc_technology@dbarctechology";
$contraseña = "Alex093020";

try {
    //conexion a base de datos

    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

                

} catch (Exception $ex) {
    //error de conexion
    echo $ex->getMessage();

}

?>

