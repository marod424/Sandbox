<?php

// Null object pattern
class NullLog
{
    public function log($message) {}
}

class PurchaseManager
{
    protected $purchases;
    protected $logger;

    /* optional dependency defaulted to null */
    // public function __construct($logger = null)
    // {
    //     $this->logger = $logger;
    // }

    // public function __construct()
    // {
    //     $this->logger = new NullLog();
    // }
    
    public function __construct()
    {
        $this->logger = IoC::make('Logger');
    }

    public function purchaseDiscountedProduct($product, $discountPercentage)
    {
        $origPrice = $product->getPrice();
        $newPrice = $origPrice - (($discountPercentage / 100) * $origPrice);

        // $discountedProduct = new Product($product->getName(), $newPrice);
        $discountedProduct = IoC::make('Product', array($product->getName(), $newPrice));
        // $this->log("Applying discount to ".$product->getName());
        $this->logger->log("Applying discount to ".$product->getName());
        $this->purchase($discountedProduct);
    }

    public function purchase($product)
    {
        $this->purchases[] = $product;
        // $this->log("Purchased ".$product->getName()." for $".$product->getPrice());
        $this->logger->log("Purchased ".$product->getName()." for $".$product->getPrice());
    }

    public function purchaseHistory()
    {
        return $this->purchases;
    }

    /** ---------------------------
    *   null method or noop wrapper 
    *   ---------------------------
    *   wraps class dependency in function
    */
    // protected function $log($message)
    // {
    //     if ($this->logger) {
    //         return $this->logger->log($message);
    //     }
    // }

    // setter injection
    // public function setLogger($logger)
    // {
    //     $this->logger = $logger;
    // }
}

// Read more: constructor vs. setter injection (Martin Fowler's blog)