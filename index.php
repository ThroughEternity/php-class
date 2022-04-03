<?

include $_SERVER['DOCUMENT_ROOT'] . '/class/InterfaceTransport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Transport.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Traktor.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/Tank.php';
include $_SERVER['DOCUMENT_ROOT'] . '/class/SportCar.php';
function setInterface(InterfaceTransport $interfaceTransport)
{
    $interfaceTransport->specAction();
}
$traktor = new Traktor ('Беларус', 'Красный', '100%', '60', true);
$traktor->getName();
$traktor->getColor();
$traktor->getHP();
$traktor->getMaxSpeed();
$traktor->goForward();
$traktor-> Beeb();
$traktor->turnWipers();
setInterface($traktor);

$tank = new Tank('Танк', 'Зелёный', '70%', '80', true);
$tank->getName();
$tank->getColor();
$tank->getHP();
$tank->getMaxSpeed();
$tank->goReverse();
setInterface($tank);
$sportCar = new SportCar('Nissan', 'Ораньжевый', '100%', '250', true);
$sportCar->getName();
$sportCar->getColor();
$sportCar->getHP();
$sportCar->getMaxSpeed();
$sportCar->goForward();
$sportCar-> Beeb();
$sportCar->turnWipers();
setInterface($sportCar);


ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);