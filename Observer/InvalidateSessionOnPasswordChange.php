<?php

namespace WB\SessionInvalidation\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Customer\Model\Session;
use WB\SessionInvalidation\Model\Config;

class InvalidateSessionOnPasswordChange implements ObserverInterface
{
    protected $session;
    protected $config;

    public function __construct(Session $session, Config $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function execute(Observer $observer)
    {
        // Check if the module is enabled
        if (!$this->config->isEnabled()) {
            return;
        }

        // Check if the customer's password has been changed
        $customer = $observer->getEvent()->getCustomer();
        if ($customer->dataHasChangedFor('password_hash')) {
            // Logout the customer to expire the session
            $this->session->logout();
        }
    }
}
