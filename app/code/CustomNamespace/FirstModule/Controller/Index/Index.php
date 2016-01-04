<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 15.11.15
 * Time: 18:06
 */

namespace CustomNamespace\FirstModule\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Simple block output
     */
    public function executeInternal() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('CustomNamespace\FirstModule\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}