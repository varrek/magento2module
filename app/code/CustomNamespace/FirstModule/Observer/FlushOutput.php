<?php
/**
 * Created by PhpStorm.
 * User: varrek
 * Date: 08.11.15
 * Time: 22:36
 */

namespace CustomNamespace\FirstModule\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class FlushOutput
 * @package CustomNamespace\FirstModule\Observer
 */
class FlushOutput implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger = null;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->_logger = $logger;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $response = $observer->getResponse();
        $body = $response->getBody();
        $this->_logger->addDebug("Flushed output: " . PHP_EOL . $body);
    }
}