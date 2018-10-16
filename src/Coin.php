<?php namespace Coin\Template;
require_once("config.php");
require_once("domain/Coin.php");
require_once("domain/CoinCrawler.php");
require_once("controller/CoinController.php");
require_once("model/CoinModel.php");
/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class Coin{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
   public function getData($text) {
    $ctrl = new CoinController();
    return $ctrl->getData($text);
   }
   public function uploadData($data) {
    $model = new CoinModel();
    $model->insertCoins($data);
   }
}