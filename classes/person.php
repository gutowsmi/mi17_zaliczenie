<?php
class Company{
    private String $name;
    private String $owner;
    private Int $capital;
    # constructor
    function __construct($name,$owner,$capital){
        $this->name = $name;
        $this->owner = $owner;
        $this->capital = $capital;
    }
    # setters
    public function SetName($name){
        $this->name = $name;
    }
    public function SetOwner($owner){
        $this->owner = $owner;
    }
    public function SetCaptial($ammount){
        $this->capital = $capital;
    }
    # getters
    public function GetName(){
        return $this->name;
    }
    public function GetOwner(){
        return $this->owner;
    }
    public function GetCapital(){
        return $this->capital;
    }
    public function __toString() {
        return "Name:$this->name\nOwner: $this->owner\nCapital: $this->captial";
    }
    public function AddCapital($capital){
        $holder = $this->capital + $capital
        $this->capital = $holder
    }
    
    
}

?>