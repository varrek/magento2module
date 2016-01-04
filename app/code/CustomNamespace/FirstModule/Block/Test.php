<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 15.11.15
 * Time: 18:01
 */

namespace CustomNamespace\FirstModule\Block;


class Test extends \Magento\Framework\View\Element\AbstractBlock
{
    protected function _toHtml()
    {
        return 'Custom block content';
    }

}