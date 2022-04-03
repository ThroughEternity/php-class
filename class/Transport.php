<?
abstract class Transport
{   

    public function getName(){
        echo $this->name;
    }
    public function getColor(){
        echo $this->color;
    }
    public function getHP(){
        echo $this->hp;
    }
    public function getMaxSpeed(){
        echo $this->maxSpeed;
    }
    public function turnOn(){
        if($this->key){        
            return true;
        }else{           
            return false;
        }
        
    }
    public function showInterior(){

    }




    public function goForward(){
        if($this->turnOn()){
            echo'ЖЖЖЖЖ полный в перёд! ';
        }else{
            echo 'Не ЖЖЖЖЖ ';
        }
    }

    
    public function goReverse(){
        if($this->turnOn()){
            echo'ЖЖЖЖЖ полный назад! ';
        }else{
            echo 'Не ЖЖЖЖЖ ';
        }
    }
    
    
    public function Beeb(){
        echo'Биииб! ';
    }
    
    public function turnWipers(){
        echo'Очистка стекла ';
    }

}





