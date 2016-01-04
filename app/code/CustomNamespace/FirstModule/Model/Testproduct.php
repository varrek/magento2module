<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 08.11.15
 * Time: 15:07
 */

namespace CustomNamespace\FirstModule\Model;

/**
 * Preference just like overwrite in magento 1
 *
 * Class Testproduct
 * @package CustomNamespace\FirstModule\Model
 */
class Testproduct extends \Magento\Catalog\Model\Product
{
    /**
     * @return float
     */
    public function getPrice() {
        return parent::getPrice()*3;
    }
}