<?php
require_once "company.php";
class Capital extends Company{
    protected String $StockExchange;
    function __construct($name,$founder,$capital,$StockExchange){
        parent::__construct($name,$founder,$capital);
        $this->StockExchange = $StockExchange;
    }
    public function SetSE($StockExchange){
        $this->StockExchange = $StockExchange;
    }
    public function GetSE(){
        return $this->StockExchange;
    }
    public function __toString() {
        return "Type of Company: Capital\nName:$this->name\nFounder: $this->founder\nCapital: $this->captial\n";
    }
    public function BuyStocks(){
        return "You can buy stocks of this company on $this->$StockExchange Stock exchange";
    }
}
?>