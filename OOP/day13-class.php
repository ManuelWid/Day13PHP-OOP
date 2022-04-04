<?php

class Vehicles {
    function __construct(private $name, private $model, private $makeYear, private $color, private $fuelType){}
    public function nameModel(){
        return "This is a $this->name model $this->model.";
    }
    public function yearMade(){
        return "This $this->name $this->model was made in $this->makeYear.";
    }
    public function returnAll(){
        $str = "$this->name, $this->model, $this->makeYear, $this->color, $this->fuelType";
        return $str;
    }
    public function age(){
        $age = date("Y") - $this->makeYear;
        return "This $this->name is $age years old.";
    }
}
$obj = new Vehicles("Audi", "A4", "1995", "red", "diesel");
echo $obj->nameModel()."<br/>";
echo $obj->returnAll()."<br/>";

$obj = new Vehicles("BMW", "1", "2015", "silver", "diesel");
echo $obj->nameModel()."<br/>";
echo $obj->yearMade()."<br/>";

$obj = new Vehicles("Tesla", "X", "2018", "black", "money");
echo $obj->nameModel()."<br/>";
echo $obj->age()."<br/>";

class Ships extends Vehicles {
    function __construct(private $name, private $model, private $makeYear, private $color, private $fuelType,private $type, private $masts){
        parent::__construct($name, $model, $makeYear, $color, $fuelType);
    }
    public function shipType(){
        return "This is a $this->type.";
    }
    public function doSomething(){
        return "This $this->type has $this->masts masts.";
    }
}

$obj = new Ships("Queen", "X4", "1848", "red/silver", "diesel", "Motorship", "0");
echo $obj->doSomething()."<br/>";

$obj = new Ships("Raid", "M423", "2011", "red/blue", "diesel", "Yacht", "1");
echo $obj->shipType()."<br/>";

$obj = new Ships("Lara", "Croft", "1999", "green", "diesel", "Sailing ship", "2");
echo $obj->returnAll()."<br/>";
echo $obj->age()."<br/>";