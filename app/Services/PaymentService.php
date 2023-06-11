<?php

namespace App\Services;
use App\Services\PaymentGateway;

class PaymentService{

    protected $gateway;
    
    public function __construct(PaymentGateway $gateway){
        $this->gateway = $gateway;
    }

    public function process(){
        // return 'paid';
        return $this->gateway->execute();
    }


}

?>
