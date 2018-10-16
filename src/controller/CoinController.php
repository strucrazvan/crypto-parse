<?php
require_once("IController.php");
class CoinController implements IController {
	private $coinObject;
	public function __construct() {
		$this->coinObject = new CoinCrawler();
	}
	public function getData($buttonText) {
		$url = $this->coinObject->getBaseUrl() . $this->findUrl($buttonText);
		$coins = $this->getAllCoins(file_get_contents($url));
		return $coins;
	}
	private function getAllCoins($html) {
		// echo $html;
		$data = strstr($html, '<tr id="id-');
		$coinData = array();
		$coins = array();
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $data) as $line) {
			preg_match('~>(.*?)<~', $line, $item);
			if(isset($item[1])) {
				array_push($coinData,$item[1]);
			}	
			if(strstr($line,"<img class")) {
				// var_dump($coin);
				if($coinData[1] == "") {
					array_push($coins, new Coin($coinData[10], $coinData[11], $coinData[12]));
					// echo $coinData[10]."<br>"; //name of coin
					// echo $coinData[11]."<br>"; //price of coin
					// echo $coinData[12]."<br>"; //volume 24h
				} 
				else {
					array_push($coins, new Coin($coinData[1], $coinData[2], $coinData[3]));
					// echo $coinData[1]."<br>"; //name of coin
					// echo $coinData[2]."<br>"; //price of coin
					// echo $coinData[3]."<br>"; //volume 24h
				
				}
				// echo "<br><br>";
				$coinData = array();
			}		
		}
		return $coins;
	}
	private function findUrl($text) {
		$html = file_get_contents($this->coinObject->getBaseUrl());
		foreach(preg_split("/((\r?\n)|(\r\n?))/", $html) as $line)
    		if(strstr($line,$text)) {
				preg_match('~"(.*?)"~', $line, $link);
    			return $link[1];
    		}	
    }
		
	
	public function getCoinObject() {
		return $this->coinObject;
	}

}

//$ctrl->getData("Market Cap - Top 100 (Coins)");