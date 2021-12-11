<?php
require_once "personal.php";
class General extends Personal{
    private String $DateOfDisabling;
    function __construct($name,$founder,$capital,$HQLocation,$DateOfDisabling){
        parent::__construct($name,$founder,$capital,$HQLocation);
        $this->DateOfDisabling = $DateOfDisabling;
    }
    public function SetDateOD($DateOfDisabling){
        $this->DateOfDisabling = $DateOfDisabling;
    }
    public function GetDateOD(){
        return $this->DateOfDisabling;
    }
    public function DaysTillDisable(){
        $now = date_create();
        $diff = date_diff($now,$this->DateOfDisabling)/60/60/24;
        return "It is $diff days till disband of this company";
    }
    public function __toString() {
        return "Name:$this->name\nFounder: $this->founder\nCapital: $this->captial\nHQ Location: $this->HQLocation\nDate of disband: $this->DateOfDisabling";
    }
}
?>