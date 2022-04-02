<?
class Tank extends Transport implements InterfaceTransport
{
    public function __construct($name,$color,$hp,$maxSpeed,$key){

        $this->name = $name;
        $this->color = $color;
        $this->hp = $hp;
        $this->maxSpeed = $maxSpeed;
        $this->key = $key;

    }

    public function specAction(){
        echo 'Выстрел!';
    }


    
}