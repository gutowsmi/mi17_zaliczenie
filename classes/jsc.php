<?php
require_once "capital.php";
class Jsc extends Capital{
    private int $stockprice;
    private int $stocks;
    function __construct($name,$founder,$capital,$StockExchange,$stockprice,$stocks){
        parent::__construct($name,$founder,$capital,$StockExchange);
        $this->stockprice = $stockprice;
        $this->stocks = $stocks;
    }
    public function SetStockPrice($stockprice){
        $this->stockprice = $stockprice;
    }
    public function GetStockPrice(){
        return $this->stockprice;
    }
    public function SetStock($stocks){
        $this->stocks = $stocks;
    }
    public function GetStock(){
        return $this->stocks;
    }
    public function __toString() {
        $worth = $this->GetWorth();
        return "Type of Company: Capital\nName:$this->name S.A\nFounder: $this->founder\nCapital: $this->captial\nThis company is worth $worth";
    }
    public function GetWorth(){
        return $this->stockprice*$this->stocks;
    }
}
?>