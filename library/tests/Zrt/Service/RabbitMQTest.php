<?php

namespace Zrt\Tests\Service;

use PHPUnit_Framework_TestCase,
    Zrt_Service_RabbitMQ,
    Zend_Application,
    Zend_Application_Bootstrap_Bootstrap,
    Zend_Controller_Front;

class RabbitMQTest extends PHPUnit_Frmaework_TestCase
{
    public function setUp()
    {
        $this->application = new Zend_Application('testing');
        $this->bootstrap = new Zend_Application_Bootstrap_Bootstrap($this->application);
        Zend_Controller_Front::getInstance()->resetInstance();
    }
}
