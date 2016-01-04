<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 15.11.15
 * Time: 18:01
 */

namespace CustomNamespace\FirstModule\Block\Product\View;


class Description extends \Magento\Framework\View\Element\Template
{
    protected function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        $originalBlock->getProduct()->setDescription('Overrided description');
    }

}