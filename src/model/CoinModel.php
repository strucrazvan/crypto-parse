<?php
class CoinModel {
	public function insertCoins($coins) {
		// Create connection
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if ($conn->connect_error) {
   			die("Connection failed: " . $conn->connect_error);
		} 
		foreach ($coins as $coin) {
			$name = $coin->getName();
			$price = $coin->getPrice();
			$volume = $coin->getVolume();
			$sql = "INSERT INTO coin (name, price, volume) VALUES ('$name', '$price', '$volume')";
			if ($conn->query($sql) === TRUE) {
			    echo "fda";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
$conn->close();

	
	}
}
