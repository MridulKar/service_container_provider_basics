<?php

namespace App\Services;

class PaymentGateway{


    protected $secretKey;

    public function  __construct(string $secretKey){
        $this->secretKey = $secretKey;
    }

    public function execute(){
        return 'payment gateway';
    }

}

?>
