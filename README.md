# Project Title

Crypto Coin crawler for getting data from CoinMarketCap.com, and in future other websites
## Getting Started

1. PHP 5.3.x is required
2. Install crypto-parser using Composer(recommended) or manually

### Installing


    1. Get Composer
    2. Require Crypto-parse with php composer.phar require strucrazvan/crypto-parse




### Break down into end to end tests

Explain what these tests test and why

```
require("Coin.php");
$coin = new Coin();
$data = $coin->getData("Market Cap - Top 100"); //Get top 100 coins from coinmarketcap.com
#coin->uploadData("Market Cap - Top 100"); //inserts data into a database with name, volume, price, create your config file before working with it
```


## Contributing

Please contribute as much as you can


## Authors

* **STRUC Razvan** - *Programming* - [PurpleBooth](https://github.com/strucrazvan)

See also the list of [contributors](https://github.com/strucrazvan/crypto-parse/contributors) who participated in this project.

## License

This project is licensed under the DBAD License - see the [LICENSE.md](LICENSE.md) file for details


