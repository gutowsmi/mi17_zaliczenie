<?php
class Company{
    protected String $name;
    protected String $founder;
    protected Int $capital;
    # constructor
    function __construct($name,$founder,$capital){
        $this->name = $name;
        $this->founder = $founder;
        $this->capital = $capital;
    }
    # setters
    public function SetName($name){
        $this->name = $name;
    }
    public function SetFounder($founder){
        $this->founder = $founder;
    }
    public function SetCaptial($ammount){
        $this->capital = $capital;
    }
    # getters
    public function GetName(){
        return $this->name;
    }
    public function GetFounder(){
        return $this->founder;
    }
    public function GetCapital(){
        return $this->capital;
    }
    public function __toString() {
        return "Name:$this->name Founder: $this->founder Capital: $this->capital";
    }
    public function AddCapital($capital){
        $holder = $this->capital + $capital;
        $this->capital = $holder;
    }
    
    
}

?>