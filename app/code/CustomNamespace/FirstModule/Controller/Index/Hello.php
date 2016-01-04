<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 07.11.15
 * Time: 16:44
 */

namespace CustomNamespace\FirstModule\Controller\Index;

/**
 * Class Hello
 * @package CustomNamespace\FirstModule\Controller\Hello
 */
class Hello extends \Magento\Framework\App\Action\Action
{
    /**
     * Simple output
     */
    public function executeInternal() {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}