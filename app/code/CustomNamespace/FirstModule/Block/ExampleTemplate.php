<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 15.11.15
 * Time: 18:01
 */

namespace CustomNamespace\FirstModule\Block;


use Magento\Framework\View\Element\Template;

class ExampleTemplate extends \Magento\Framework\View\Element\Template
{
    /**
     * Internal constructor. Set template
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('CustomNamespace_FirstModule::exampleTemplate.phtml');
    }


}