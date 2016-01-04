<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 15.11.15
 * Time: 18:16
 */

namespace CustomNamespace\FirstModule\Controller\Index;


class Text extends \Magento\Framework\App\Action\Action
{
    /**
     * Simple text block output
     */
    public function executeInternal() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Magento\Framework\View\Element\Text');
        $block->setText('Some text block');
        $this->getResponse()->appendBody($block->toHtml());
    }
}