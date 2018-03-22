<?php
include 'vendor/autoload.php';

//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);

#con
$con = new Eerison\Sqli\Connection();
#sqlTest
$sqlTest = new Eerison\Sqli\SqlTest($con->getConnection());


################################################
echo '<pre>';
$id = 0;
if(isset($_GET['id']))
	$id = $_GET['id'];

#list
//$sqlTest->ListFail();

#find
echo $sqlTest->findFail($id);

#insert
//$sqlTest->insert();
echo '<pre>';



##################################################
#Descriptions
//echo "<h3>Sql : {$sqlTest->sql}</h3>";
//echo "<h3>Object :</h3>";
//var_dump($sqlTest->getObjectCon());