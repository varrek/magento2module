<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 07.11.15
 * Time: 16:44
 */

namespace CustomNamespace\FirstModule\Controller\Block;

/**
 * Class Template
 * @package CustomNamespace\FirstModule\Controller\Block
 */
class Template extends \Magento\Framework\App\Action\Action
{
    /**
     * Simple output
     */
    public function executeInternal() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('CustomNamespace\FirstModule\Block\ExampleTemplate');
        $this->getResponse()->appendBody($block->toHtml());
    }
}