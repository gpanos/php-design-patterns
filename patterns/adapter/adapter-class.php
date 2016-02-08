<?php 
/*
* In software engineering the adapter pattern is a software design pattern that allows
* the interface of an existing class to be used from another interface.
* It is often used to make existing classes work with others without modifying their source code.
*/

//Concrete implementation of PayPal class
class PayPal
{
    public function __construct()
    {
        
    }
    
    public function sendPayment($amount)
    {
        echo 'Paying via paypal ' . $amount;
    }
}

//Simple Interface for each adapter we create

interface PaymentAdapter
{
    public function pay($amount);
}

class PayPalAdapter implements PaymentAdapter
{
    private $_payPal;
    
    public function __construct(PayPal $payPal)
    {
        $this->_payPal = $payPal;
    }
    
    public function pay($amount)
    {
        $this->_payPal->sendPayment($amount);
    }
}


//Client code

$paypal = new PayPalAdapter(new PayPal);
$paypal->pay(213213);