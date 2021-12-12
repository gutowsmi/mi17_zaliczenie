<?php
require_once "capital.php";
class Llc extends Capital{
    private String $HeadOfAdministration;
    function __construct($name,$founder,$capital,$StockExchange,$HeadOfAdministration){
        parent::__construct($name,$founder,$capital,$StockExchange);
        $this->HeadOfAdministration = $HeadOfAdministration;
    }
    public function SetHeadOfAdministration($HeadOfAdministration){
        $this->HeadOfAdministration = $HeadOfAdministration;
    }
    public function GetHeadOfAdministration(){
        return $this->HeadOfAdministration;
    }
    public function __toString() {
        $worth = $this->GetWorth();
        return "Type of Company: Capital Name:$this->name S.A Founder: $this->founder Capital: $this->captial $this->HeadOfAdministration is head of Administration";
    }
    public function PlanAdminMeeting($date){
        print("Meeting of administration will be held on $date");
    }
}
?>