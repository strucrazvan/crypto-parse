<?php
class Coin {
	private $name;
	private $price;
	private $volume;
	public function __construct($name, $price, $volume) {
		$this->name = $name;
		$this->price = $price;
		$this->volume = $volume;
	}
	public function getName() {
		return $this->name;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getVolume() {
		return $this->volume;
	}
}