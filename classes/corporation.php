<?php
require_once "company.php";
class Corporation extends Company{
    private Int $branch;
    function __construct($name,$founder,$capital,$branch){
        parent::__construct($name,$founder,$capital);
        $this->branch = $branch;
    }
    public function SetBranch($branch){
        $this->branch = $branch;
    }
    public function GetBranch(){
        return $this->branch;
    }
    public function __toString() {
        return "Name:$this->name Founder: $this->founder Capital: $this->captial This company has: $this->branch branches";
    }
    public function ReadMe(){
        return "This corporation has $this->branch in multiple countries!";
    }
}
?>