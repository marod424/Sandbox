<?php

require 'src/Product.php';
require 'src/Loggr.php';
require 'src/Loggr/EchoOut.php';
require 'src/PurchaseManager.php';
require 'src/IoC.php';

class PurchaseManagerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_this = $this; // needed for 5.3; no longer needed in 5.4 (5.4 now allows $this in closures)

        IoC::register('Logger', function() use($_this) {
            return $_this->getMock('stdClass', array('log'));
        });

        IoC::register('Product', function($name, $price) {
            return new Product($name, $price);
        });

        $this->product = new Product('Water', 5.99);
    }

    public function testCanMakePurchase()
    {
        // stub out the log method
        // $mockLogger = $this->getMock('stdClass', array('log'));

        // $pm = new PurchaseManager($mockLogger);
        $pm = new PurchaseManager();

        // $pm->setLogger($mockLogger);
        $pm->purchase($this->product);

        $this->assertContainsOnly($this->product, $pm->purchaseHistory());
    }
}