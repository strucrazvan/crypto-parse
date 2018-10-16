<?php
class CoinCrawler {
	private $baseUrl = "https://coinmarketcap.com";
	private $rankingTypes = array ('Market Cap - Top 100', 
									'Market Cap - Top 100 (Coins)');
	public function getBaseUrl() {
		return $this->baseUrl;
	}

	public function getRankingTypes() {
		return $this->rankingTypes;
	}
}
// $coin = new CoinCrawler();
// echo $coin->getBaseUrl();
// print_r($coin->getRankingTypes());