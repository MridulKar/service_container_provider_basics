<?php

namespace App\Services;

class PaypalGateway implements PaymentServiceContract{

    protected $secretKey;

    public function __construct(string $secretKey){
        $this->secretKey = $secretKey;
    }

    public function doExecute(){
    }
}
