<?php 

/**
* Strategy design pattern is a behavioral design pattern this pattern is also known as a policy pattern
* We use this pattern when we have several ways to to perform the same operation and we want 
* the application to pick the specific way base on the parameters you have.
**/

interface payStrategy 
{
    public function pay($amount);
}

class payByCC implements payStrategy
{
    private $_ccNum      = '';
    private $_ccType     = '';
    private $_cvvNum     = '';
    private $_ccExpMonth = '';
    private $_ccExpYear  = '';
    
    public function pay($amount = 0) 
    {
        echo "Paying " . $amount . " using Credit Card !!";
    }
}

class payViaPayPal implements payStrategy
{
    private $_payPalEmail = '';
    
    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using PayPal !!";
    }
}

class shoppingCart
{
    public $amount = 0;
    
    public function __construct($amount = 0)
    {
        $this->amount = $amount;
    }
    
    public function getAmount()
    {
        return $this->amount;
    }
    
    public function setAmount($amount = 0)
    {
        $this->amount = $amount;
    }
    
    public function payAmount()
    {
        if ( $this->amount >= 500 ) {
            $payment = new payByCC();
        } else {
            $payment = new payViaPayPal();
        }
        
        $payment->pay($this->amount);
    }
}

//Client code

$cart = new shoppingCart(480);
$cart->payAmount();
echo "<br>";
$cart = new shoppingCart(530);
$cart->payAmount();
