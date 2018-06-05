<?php 
	// include_once('Abc.php');
	// include_once('Xyz.php');

	// $myobj1=new Abc();
	// echo '<br>';
	// $myobj2=new Xyz();
	// echo "<br>";
	// new Abc();

require_once __DIR__ . '/vendor/autoload.php';

$obj =new Dompdf\Dompdf();
$obj->loadHtml("<h1>My PDF FILE</h1>");
$obj->render();
$obj->stream();