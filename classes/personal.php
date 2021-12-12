<?php
require_once "company.php";
class Personal extends Company{
    protected String $HQLocation;
    function __construct($name,$founder,$capital,$HQLocation){
        parent::__construct($name,$founder,$capital);
        $this->HQLocation = $HQLocation;
    }
    public function SetHQ($HQLocation){
        $this->branch = $branch;
    }
    public function GetHQ(){
        return $this->HQLocation;
    }
    public function __toString() {
        return "Name:$this->name Founder: $this->founder Capital: $this->captial HQ Location: $this->HQLocation";
    }
    public function AboutHQ(){
        return "Headquarters of this company are located in $this->HQLocation";
    }
}
?>