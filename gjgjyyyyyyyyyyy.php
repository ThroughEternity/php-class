<?
include $_SERVER['DOCUMENT_ROOT'] . '/class/InterfaceTransport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/SportCar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Transport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Traktor.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Tank.php';

function setInterface(InterfaceTransport $interfaceTransport){
    $interfaceTransport->specAction();
}
$traktor = new Traktor ('Беларус', 'Красный', '100%', '60', true);


ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);