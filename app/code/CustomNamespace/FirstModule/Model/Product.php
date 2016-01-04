<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 08.11.15
 * Time: 14:52
 */

namespace CustomNamespace\FirstModule\Model;


/**
 * Class Product
 * @package CustomNamespace\FirstModule\Model
 */
class Product
{
    /**
     * @param \Magento\Catalog\Model\Product $product
     * @param $result
     * @return mixed
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $product, $result)
    {
        return $result*2;
    }
}