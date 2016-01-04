<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 08.11.15
 * Time: 15:22
 */

namespace CustomNamespace\FirstModule\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class LogUrl
 * @package CustomNamespace\FirstModule\Observer
 */
class LogUrl implements ObserverInterface
{    /*
     * Write url Path to system.log
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $path = $observer->getRequest()->getPathInfo();
        \Magento\Framework\App\ObjectManager::getInstance()
            ->get('Psr\Log\LoggerInterface')
            ->info('Url Path: ' . $path);
    }
}