<?php

Class CreditCard
{
    private $number;
    private $cvc;
    private $expiry;
    public function __construct($number, $cvc, $expiry)
    {
        $this->checkValidityNumber($number);
        $this->checkValidityCvc($cvc);
        $this->checkExpiry($expiry);
    }

    public function checkValidityNumber($number) {
        if(strlen(strval($number)) === 16) {
            $this->number = $number;
        }
        return $this;
    }
    public function checkValidityCvc($cvc) {
        if(strlen(strval($cvc)) === 3) {
            $this->cvc = $cvc;
        }
        return $this;
    }
    public function checkExpiry($expiry = false) {
        if(strtotime(date("d-m-Y")) > strtotime($expiry)) {
            $this->expiry = true;
        }
    }
}

?>