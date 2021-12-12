<?php
require_once "personal.php";
class Partnership extends Personal{
    private String $profession;
    function __construct($name,$founder,$capital,$HQLocation,$profession){
        parent::__construct($name,$founder,$capital,$HQLocation);
        $this->profession = $profession;
    }
    public function SetProfession($profession){
        $this->profession = $profession;
    }
    public function GetProfession(){
        return $this->profession;
    }
    public function __toString() {
        return "Name:$this->name Founder: $this->founder Capital: $this->captial HQ Location: $this->HQLocation This company provides $this->profession services";
    }
    public function LookForWork(){
        print("We are ardevtising our $this->profession services");
    }
}
?>